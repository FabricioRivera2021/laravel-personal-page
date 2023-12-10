<x-layout>
    <x-navbar />
        <x-card class="rounded-md shadow-md flex items-center justify-center mx-auto">
            <div class="mt-[5rem]">

                <form id="form" enctype="multipart/form-data" action="{{ route( 'posts.update', ['locale' => app()->getLocale(), 'post' => $post->id] ) }}" method="POST" class="flex flex-col gap-4 items-center justify-center py-5 w-[65rem]">
                    @csrf
                    @method('PUT')
                    <h3 class="font-semibold text-slate-500 text-lg">EDIT POST</h3>
                    <label for="title" class="w-full text-slate-600">Title
                        <input name="title" type="text" class="bg-slate-50 w-full rounded-sm" value="{{$post->title}}">
                        @error('title')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <label for="subTitle" class="w-full text-slate-600">SubTitle
                        <input name="subTitle" type="text" class="bg-slate-50 w-full rounded-sm" value="{{$post->subTitle}}">
                        @error('subTitle')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <div class="flex flex-col space-y-2 w-full">
                        <label for="editor" class="text-gray-600 font-semibold">Content</label>
                        <div id="editor" name="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-slate-100">{!! Str::markdown($post->body) !!}</div>
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
                        <input class="text-xs" type="radio" name="lang" id="es" value="es" class="ml-1" {{($post->lang == 'es') ? 'checked' : ''}}>es
                        <input class="text-xs" type="radio" name="lang" id="en" value="en" {{($post->lang == 'en') ? 'checked' : ''}}>en
                        @error('lang')
                        <div class="mt-1 text-xs text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </label>
                    <input type="hidden" name="author" value="guest">
                    <button class="text-sm bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">Editar</button>
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
            </div>
        </x-card>
    <x-footer />
</x-layout>