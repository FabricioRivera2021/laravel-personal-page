<x-layout>
    <x-navbar />
        <div>
            <div class="text-4xl max-w-7xl mx-auto pt-20 mb-10 flex flex-col justify-evenly items-center space-y-10 min-h-screen">
                {{-- <h2 class="w-full font-semibold text-center text-slate-400 pb-4">
                    One entry
                </h2> --}}
                {{-- ! Blog cards --}}
                    <x-card class="rounded-lg shadow-lg bg-slate-100 p-3 min-w-full">
                        <div class="flex justify-between w-full">
                            <p class="pl-2 text-xs text-slate-500">
                                <a href="{{route('posts.index', app()->getLocale())}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400 hover:text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>                                  
                                </a>
                            </p>
                            <p class="text-xs text-slate-500">{{$post->created_at->format('d M Y')}}</p>
                        </div>
                        <x-card class="w-full bg-slate-50 rounded-md shadow-sm">
                            <div class="w-full flex flex-col justify-center">
                                <h4 class="text-xl font-medium text-slate-600">{{$post->title}}</h4>
                                <div class="h-1 w-full bg-orange-100"></div>
                            </div>
                            <div class="flex flex-col w-full text-slate-700">
                                <p class="text-sm">{{$post->subTitle}}</p>
                                <div class="flex space-x-3 text-xs items-center">
                                    <p>By: {{$post->author}}</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-slate-600">
                                    {!! nl2br(e($post->body)) !!}
                                </p>
                            </div>
                            <div class="w-full">
                                <div class="p-5 bg-slate-100 rounded-sm">
                                    <img src="{{Storage::url($post->img)}}" alt="img">
                                </div>
                            </div>
                        </x-card>
                    </x-card>
                    {{-- one blog --}}
            </div>
        </div>
    <x-footer />
</x-layout>