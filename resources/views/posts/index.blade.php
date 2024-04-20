<x-layout>
    <x-nav-bar />
        <div class="bg-slate-100 min-h-screen">
            <div class="text-4xl max-w-xs md:max-w-6xl 2xl:max-w-7xl mx-auto pt-32 pb-10 flex flex-col justify-evenly items-center space-y-10">
                <form action="{{ route('posts.index', [ 'locale' => app()->getLocale() ]) }}" method="GET" class="flex flex-col items-start text-xl w-full font-semibold text-left text-slate-600">
                    <div class="flex flex-col md:flex-row md:items-center items-start space-y-2 md:space-y-0 md:space-x-4">
                        <label for="search" class="sm:w-fit flex items-center bg-white px-1 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>                          
                            <input name="search" class="p-2 focus:ring-0 border-0 text-sm outline-none" type="text" placeholder="{{trans('messages.blog-search-input')}}" value="{{ request('search') }}">
                        </label>
                        <button type="submit" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">@lang('messages.blog-search-btn')</button>
                        <a href="{{ route('posts.index', [ 'locale' => app()->getLocale() ]) }}" class="text-sm bg-blue-600 text-slate-100 px-3 py-1 shadow-sm rounded-sm hover:bg-slate-200 hover:text-slate-600">@lang('messages.blog-clear-btn')</a>
                    </div>
                </form>
                
                {{-- ! Blog cards --}}
                @if (session('success'))
                    <div role="alert" 
                        class="w-full mb-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 text-sm self-start opacity-75">
                        <p class="font-bold">
                            Success!!
                        </p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                @auth
                    <a class="bg-slate-500 text-slate-100 rounded-sm text-sm px-4 py-1.5 shadow-sm" href="{{route('posts.create', app()->getLocale())}}">
                        <button>Crear post</button>
                    </a>
                @endauth

                
                @forelse ($posts as $post)
                    <x-card class="bg-slate-50 rounded-sm p-3 min-w-full shadow-sm">
                        <div class="flex flex-col items-end justify-end w-full">
                            <p class="text-xs text-slate-500"> @lang('messages.blog-created-at') {{ $post->created_at->format('d M Y') }} </p>
                            <p class="text-xs text-slate-500">
                                @if($post->updated_at > $post->created_at) 
                                    @lang('messages.blog-modify-at') {{$post->updated_at->format('d M Y')}}
                                @endif
                            </p>
                        </div>
                        <x-card class="w-full">
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-2xl md:text-3xl font-medium text-slate-600">{{$post->title}}</h4>
                                    <span class="text-xs bg-orange-400 text-slate-200 px-6 py-0.5 rounded-sm shadow-sm">
                                        <p>
                                            {{ strtoupper($post->lang) }}
                                        </p>
                                    </span>
                                </div>
                                <div class="h-0.5 w-full bg-slate-600"></div>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-lg">{{$post->subTitle}}</p>
                                <div class="text-xs font-thin">
                                    <p>By: {{$post->author}}</p>
                                </div>
                            </div>

                            <div class="flex w-full justify-between">
                                <div class="flex flex-col text-slate-700 h-full">
                                    <div class="prose prose-sm sm:prose-xl text-xs sm:text-sm">
                                        {!! Str::markdown(Str::limit($post->body, 500)) !!}
                                    </div>
                                </div>
                                {{-- <div class="max-w-[200px] min-w-[250px] overflow-hidden flex items-end justify-center justify-self-end">
                                    <img src="{{Storage::url($post->img)}}" alt="img">
                                </div> --}}
                            </div>
                        </x-card>
                        <div class="w-full ml-4 flex justify-start">
                            <a href="{{route('posts.show', [
                                'locale' => app()->getLocale(), 
                                'post' => $post])}}">
                                <button class="text-slate-700 text-sm hover:text-blue-400 hover:underline"> @lang('messages.blog-see') </button>
                            </a>
                        </div>
                    </x-card>
                    {{-- one blog --}}
                @empty
                    <div class="h-full w-full flex items-center justify-center">
                        <div class="p-10 rounded-2xl border border-slate-600 border-dotted text-slate-500 font-semibold">
                            @lang('messages.blog-no-post')
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    <x-footer />
</x-layout>