<x-layout>
    <x-navbar />
    
    <div class="flex flex-col justify-center items-center h-screen pt-28 mb-20">
        <iframe src="{{ Vite::asset('resources/files/fabricio_rivera_cv.pdf') }}" width="75%" height="100%">
        </iframe>
        <div class="mt-8">
            <a href="{{ route('root', app()->getLocale()) }}" class="font-semibold text-slate-600">Back to main page</a>
        </div>
    </div>

    <x-footer />
</x-layout>
