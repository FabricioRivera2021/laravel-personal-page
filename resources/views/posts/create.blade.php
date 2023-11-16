<x-layout>
    <x-navbar />
        <x-card class="rounded-md shadow-md bg-slate-200 pt-10 flex items-center justify-center h-screen">
            
            <form enctype="multipart/form-data" action="{{route('posts.store', app()->getLocale())}}" method="POST" class="flex flex-col gap-4 items-center justify-center bg-slate-300 p-5 shadow-md rounded-lg w-[50rem]">
                @csrf

                <h3>CREATE</h3>
                <label for="title" class="w-full text-slate-600">Title
                    <input name="title" type="text" class="bg-slate-50 w-full rounded-sm" >
                </label>
                <label for="subTitle" class="w-full text-slate-600">SubTitle
                    <input name="subTitle" type="text" class="bg-slate-50 w-full rounded-sm" >
                </label>
                <label for="body" class="w-full flex flex-col text-slate-600">Body
                    <textarea name="body" id="body" cols="30" rows="10" class="rounded-sm p-2"></textarea>
                </label>
                <label for="img" class="w-full flex flex-col text-slate-600">Load image
                    <input type="file" name="img" id="img">
                </label>
                <label for="lang" class="self-start">Lang: 
                    <input type="radio" name="lang" id="es" value="es" class="ml-1">ES
                    <input type="radio" name="lang" id="en" value="en">EN
                </label>
                <input type="hidden" name="author" value="guest">
                <button class="bg-blue-600 text-slate-100 px-3 py-1 self-start shadow-sm rounded-sm">Guardar</button>
            </form>


            @if (session('error'))
                <div role="alert" 
                    class="mb-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
                    <p class="font-bold">
                        Success!!
                    </p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
        </x-card>
    <x-footer />
</x-layout>