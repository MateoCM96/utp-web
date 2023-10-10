document.addEventListener('DOMContentLoaded', function() {
    const modalStorePost = document.getElementById('interestModal');
    const modalShowPost = document.getElementById('showPost');
    const input = document.getElementById('dropzone-file');
    const nextButton = document.getElementById('next-a');
    
    document.querySelector('.openModal').addEventListener('click', function(element) {
        toggleModal(modalStorePost, 'invisible', false);
    });

    document.querySelector('.closeModal').addEventListener('click', function(element) {
        toggleModal(modalStorePost, 'invisible', true);
        location.reload();//pendiente revisar
    });

    document.querySelector('.container-posts').addEventListener('click', (event) => {
        showPostModal(event.target);
    });

    document.querySelector('.closeModalshowPost').addEventListener('click', function(element) {
        toggleModal(modalShowPost, 'invisible', true);
    });

    if (input) {
        input.addEventListener('change', handleFileUpload);
    };

    document.getElementById('button-back').addEventListener('click', function() {
        location.reload(); //pendiente revisar
    });

    nextButton.addEventListener('click', function(event) {
        let modalAll = modalStorePost.querySelector('#modal-all');
        const description = modalStorePost.querySelector('#description');
        const storePostForm = document.getElementById('store-post');

        modalAll.style.minWidth = '992px';
        modalAll.style.maxWidth = '1095px';
        toggleModal(description, 'hidden', false);
        nextButton.textContent = 'Compartir';
    
        nextButton.addEventListener('click', function() {
            event.preventDefault();
            storePostForm.submit();
        });
    });
    
    function toggleModal(modal, className, addClass) {
        if (addClass) {
            modal.classList.add(className);
        } else {
            modal.classList.remove(className);
        }
    }

    function showPostModal(element) {
        let modalAll = modalShowPost.querySelector('#modal-all');
        let url = element.getAttribute('data-url');
        let description = element.getAttribute('data-description');
        let createdAt = element.getAttribute('data-create-at');
        let userId = element.getAttribute('data-userId');

        modalAll.innerHTML = '';

        fetch('/api/render-conmponent-post-show?user_id='+userId)
        .then(response => response.text())
        .then(html => {
            modalAll.innerHTML = html;
            // aquí falta cargar foto al modal y descripción 
            toggleModal(showPost, 'invisible', false); 
        });
    }

    function handleFileUpload(event) {
        
        const step1 = document.getElementById('step1');
        const spinner = document.getElementById('spinner');
        toggleModal(step1, 'hidden', true);
        toggleModal(spinner, 'hidden', false);
        toggleModal(spinner, 'flex', true);

        const title = document.getElementById('title');
        const headerTitle = document.getElementById('header-title');
        const back = document.getElementById('back');
        const next = document.getElementById('next');
        const canvas = document.getElementById('canvas');
        const file = input.files[0];
        const formData = new FormData();
        formData.append('file', file);

        fetch('/api/crop-image', {
            method: 'POST', // Método de solicitud HTTP (en este caso, POST)
            body: formData // Datos a enviar en la solicitud (en este caso, un objeto FormData)
        })
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            const imagePath = data.imagePath; // Extraer el valor de la propiedad 'imagePath' del objeto JSON
            const imageName = data.imageName; // Extraer el valor de la propiedad 'imageName' del objeto JSON

            const img = new Image();
            img.onload = function() {
                const canvasContext = canvas.getContext('2d');
                let width;
                let height;

                if (window.innerWidth <= 767) {
                    width = 400;
                    height = 400;
                } else {
                    width = 704;
                    height = 704;
                }

                canvas.width = width;
                canvas.height = height;
                canvasContext.drawImage(img, 0, 0, width, height);
                
                title.textContent = "Recortar";
                toggleModal(headerTitle, 'justify-center', false);
                toggleModal(headerTitle, 'justify-between', true);
                toggleModal(back, 'hidden', false);
                toggleModal(next, 'hidden', false);
                toggleModal(spinner, 'hidden', true);
                canvas.style.display = 'block';

                const inputPhoto = document.createElement('input');
                inputPhoto.type = 'hidden';
                inputPhoto.name = 'photo';
                inputPhoto.value = imageName;
                document.getElementById('store-post').appendChild(inputPhoto);

                if (input) {
                    input.parentNode.removeChild(input);
                }
            };
            img.src = imagePath;
        })
        .catch(error => {
            console.error('Error al recortar el archivo:', error);
        });
    }

    function calculateElapsedTime(createdAt) {
        const now = new Date();
        const postDate = new Date(createdAt);
        const secondsElapsed = Math.floor((now - postDate) / 1000);
    
        if (secondsElapsed < 5) {
            return 'hace menos de 5 segundos';
        } else {
            return formatTime(secondsElapsed);
        }
    }
    
    function formatTime(secondsElapsed) {
        const secondsInMinute = 60;
        const secondsInHour = 3600;
        const secondsInDay = 86400;
    
        if (secondsElapsed < secondsInMinute) {
            return `hace ${secondsElapsed} segundo${secondsElapsed > 1 ? 's' : ''}`;
        } else if (secondsElapsed < secondsInHour) {
            const minutes = Math.floor(secondsElapsed / secondsInMinute);
            return `hace ${minutes} minuto${minutes > 1 ? 's' : ''}`;
        } else if (secondsElapsed < secondsInDay) {
            const hours = Math.floor(secondsElapsed / secondsInHour);
            return `hace ${hours} hora${hours > 1 ? 's' : ''}`;
        } else {
            const days = Math.floor(secondsElapsed / secondsInDay);
            return `hace ${days} día${days > 1 ? 's' : ''}`;
        }
    }
});