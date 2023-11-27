
{{-- ! <img src="/storage/img/YmLswek4HWqDif2xJMKFIX3Wmdto5g8dVGzFazf7.jpg" alt="img" /> --}}
{{-- Para agregar imagenes, una forma seria guardarlas en el storage y desde ahi sacar el link --}}

<x-layout>
    <x-navbar />
        <x-card class="rounded-md shadow-md flex items-center justify-center">
            <div class="mt-[5rem]">

                <form id="form" enctype="multipart/form-data" action="{{route('posts.store', app()->getLocale())}}" method="POST" class="flex flex-col gap-4 items-center justify-center py-5 w-[65rem]">
                    @csrf
                    <h3 class="font-semibold text-slate-500 text-lg">NEW POST</h3>
                    <label for="title" class="w-full text-slate-600">Title
                        <input name="title" type="text" class="bg-slate-50 w-full rounded-sm" >
                    </label>
                    <label for="subTitle" class="w-full text-slate-600">SubTitle
                        <input name="subTitle" type="text" class="bg-slate-50 w-full rounded-sm" >
                    </label>
                    <div class="flex flex-col space-y-2 w-full">
                        <label for="editor" class="text-gray-600 font-semibold">Content</label>
                        <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-slate-100"></div>
                    </div>
                    <input type="hidden" name="body" id="body">
                    <label for="img" class="text-sm self-start text-slate-100 flex flex-col hover:cursor-pointer bg-blue-600 px-3 py-0.5 rounded-sm items-center shadow-sm hover:bg-slate-200 hover:text-slate-600">Load Thumbnail
                        <input class="hidden" type="file" name="img" id="img">
                    </label>
                    <label for="lang" class="self-start">Lang: 
                        <input class="text-xs" type="radio" name="lang" id="es" value="es" class="ml-1">es
                        <input class="text-xs" type="radio" name="lang" id="en" value="en">en
                    </label>
                    <input type="hidden" name="author" value="guest">
                    <button class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Guardar</button>
                </form>
                <div class="flex space-x-2">
                    <label for="imgUpload" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600 hover:cursor-pointer">Cargar imagen
                        <input id="imgUpload" name="imgUpload" type="file" accept="image/*" class="hidden">
                    </label>
                    <button id="uploadImageButton" type="submit" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Añadir</button>
                    <button id="clearImageButton" type="submit" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Limpiar</button>
                </div>
                
                <div>
                    <i id="imageUrl"></i>
                </div>
                
                @if (session('error'))
                <div role="alert" 
                    class="mb-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
                    <p class="font-bold">
                        Error!!
                    </p>
                    <p>{{ session('error') }}</p>
                </div>
                @endif
            </div>
        </x-card>
    <x-footer />
</x-layout>