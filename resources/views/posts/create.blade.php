
{{-- ! <img src="/storage/img/YmLswek4HWqDif2xJMKFIX3Wmdto5g8dVGzFazf7.jpg" alt="img" /> --}}
{{-- Para agregar imagenes, una forma seria guardarlas en el storage y desde ahi sacar el link --}}

{{-- Vite::asset('public/storage/img/lN0pkaItEaZFs1Yc0RVx19WCE9dPzWfNkHj1tIdz.jpg') --}}

<x-layout>
    <x-nav-bar />
        <x-card class="flex items-center justify-center mx-auto">
            <div class="mt-[2rem]">

                <form id="form" enctype="multipart/form-data" action="{{route('posts.store', app()->getLocale())}}" method="POST" class="flex flex-col gap-4 items-center justify-center py-5 w-[65rem]">
                    @csrf
                    <h3 class="font-semibold text-slate-500 text-lg">NEW POST</h3>
                    <label for="title" class="w-full text-slate-600">Title
                        <input name="title" type="text" class="bg-slate-50 w-full rounded-sm" >
                        @error('title')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <label for="subTitle" class="w-full text-slate-600">SubTitle
                        <input name="subTitle" type="text" class="bg-slate-50 w-full rounded-sm" >
                        @error('subTitle')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <div class="flex flex-col space-y-2 w-full">
                        <label for="editor" class="text-gray-600 font-semibold">Content</label>
                        <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-slate-100"></div>
                        @error('body')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <input type="hidden" name="body" id="body">
                    {{-- <label for="img" class="text-sm self-start text-slate-100 flex flex-col hover:cursor-pointer bg-blue-600 px-3 py-0.5 rounded-sm items-center shadow-sm hover:bg-slate-200 hover:text-slate-600">Load Thumbnail
                        <input class="hidden" type="file" name="img" id="img">
                    </label> --}}
                    <label for="lang" class="self-start">Lang: 
                        <input class="text-xs" type="radio" name="lang" id="es" value="es" class="ml-1">es
                        <input class="text-xs" type="radio" name="lang" id="en" value="en">en
                        @error('lang')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <input type="hidden" name="author" value="guest">
                    <button class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Guardar</button>
                </form>
                <div  x-data="{ clickable: false }"
                    class="flex flex-col">
                    <label for="imgUpload" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600 hover:cursor-pointer">Cargar imagen
                        <input id="imgUpload" name="imgUpload" type="file" accept="image/*" class="hidden" x-on:change="clickable = true">
                    </label>
                    <div class="flex flex-col">
                        <img id="imagePreview" class="w-44 mt-2 p-3" alt="" >
                        <div class="flex space-x-2 py-1">
                            <button x-show="clickable" x-on:click="clickable = false" id="uploadImageButton" type="submit" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Añadir</button>
                            <button x-show="clickable" x-on:click="clickable = false" id="clearImageButton" type="submit" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Limpiar</button>
                        </div>
                    </div>
                    {{-- x-show="clickable" --}}
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

{{-- If you are fetching the image source dynamically from a JavaScript file that interacts with a 
    Laravel controller, you need to make sure that you set the value of imagePreviewSrc in your Alpine.js 
    data based on the fetched data.

Here's a general example of how you might structure your code:

    Initialize the Alpine.js data with a default or initial imagePreviewSrc value.
    Fetch the image source data from your Laravel controller using JavaScript.
    Update the imagePreviewSrc value in the Alpine.js data with the fetched data.

html

<div x-data="{ imagePreviewSrc: 'initial_default_value' }">
    <!-- Your image tag with x-bind to dynamically set the src attribute -->
    <img x-bind:src="imagePreviewSrc" alt="Image Preview">

    <!-- Fetch data and update imagePreviewSrc -->
    <button @click="fetchImageSrc">Fetch Image</button>

    <script>
        function fetchImageSrc() {
            // Make a fetch request to your Laravel controller
            fetch('/your-laravel-endpoint')
                .then(response => response.json())
                .then(data => {
                    // Update the imagePreviewSrc with the fetched data
                    imagePreviewSrc = data.src;
                })
                .catch(error => {
                    console.error('Error fetching image source:', error);
                });
        }
    </script>
</div>

In this example:

    The fetchImageSrc function is triggered when the button is clicked.
    It makes a fetch request to your Laravel controller endpoint.
    Upon a successful response, it updates the imagePreviewSrc value with the fetched data.

Ensure that your Laravel controller returns the appropriate JSON response containing the image 
source (data.src) for this to work correctly. Adjust the code based on your specific implementation. --}}