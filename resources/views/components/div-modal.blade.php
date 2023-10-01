<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white">
                    <div class="sm:items-center">
                        <div class="mt-3 text-center sm:my-2 sm:text-center border-gray-500">
                            <div class="flex justify-between items-center px-2">
                                <h1 class="text-md font-semibold text-gray-900" id="modal-title">
                                    Crea una nueva publicación
                                </h1>
                                <!--Close button-->
                                <button
                                    type="button"
                                    class="box-content closeModal rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                    data-te-modal-dismiss
                                    aria-label="Close">
                                    <x-icons.close/>
                                </button>
                            </div>
                            <hr class="my-3">

                            <x-div-nothing-to-show src="{{ asset('img/galery.png') }}" alt="image saved" textH1="" textP="Arrastra las fotos y los videos aquí"/>
 
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 sm:px-6 text-center">
                    {{-- <x-forms.input-button type="file" value="Seleccionar de la computadora"/> --}}
                    <x-forms.form route="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        <!-- the first file input -->
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="description" value="{{auth()->user()->description}}">
                        <label>
                            <input type="file" name="file" accept=".jfif,.pjpeg,.jpeg,.pjp,.jpg,.png,.heic,heif" class="text-sm mb-5 text-grey-500
                            file:mr-5 file:py-2 file:px-6
                            file:rounded-full file:border-0
                            file:text-sm file:font-medium
                            file:bg-blue-50 file:text-blue-700
                            hover:file:cursor-pointer hover:file:bg-amber-50
                            hover:file:text-amber-700"/>
                        </label>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Descripcion</label>
                            <div class="mt-2">
                              <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        
                        <div class="w-full flex flex-col items-center md:flex-row">
                            <x-forms.input-button type="submit" value="Publicar"/>
                        </div>
                    </x-forms.form>
                </div>
            </div>
        </div>
    </div>
</div>
