<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    id="interestModal">
    <div class="">
        <button type="button"
            class="absolute z-20 box-content p-4 text-white closeModal rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-te-modal-dismiss aria-label="Close">
            <x-icons.close />
        </button>
    </div>
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div id="modal-all"
            class="min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[400px] min-[992px]:max-w-[704px] min-[992px]:max-h-[746px] inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:h-full">
           <x-div-modal-header title="Crea una nueva publicación" />
           <x-div-body-body />
        </div>
    </div>
</div>
</div>
