<x-layout>
    <x-navbar />
        <div>
            <div class="text-4xl max-w-7xl mx-auto pt-20 mb-10 flex flex-col justify-evenly items-center space-y-10">
                <h2 class="w-full font-semibold text-center text-slate-400 pb-4">
                    All entries
                </h2>
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
                    <form action="{{ route('auth.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-sm text-red-400">Logout</button>
                    </form>
                @else
                    <h1>no estas logueado LOQUITA!!</h1>
                @endauth

                @forelse ($posts as $post)
                    <x-card class="rounded-lg shadow-lg bg-slate-100 p-3 min-w-full">
                        <div class="flex justify-end w-full">
                            <p class="text-xs text-slate-500">{{$post->created_at->format('d M Y')}}</p>
                        </div>
                        <x-card class="w-full bg-slate-50 rounded-md shadow-sm">
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-2xl font-medium text-slate-600">{{$post->title}}</h4>
                                    <span class="text-xs bg-amber-600 text-slate-200 px-6 py-0.5 rounded-sm shadow-sm">
                                        <p>
                                            {{ strtoupper($post->lang) }}
                                        </p>
                                    </span>
                                </div>
                                <div class="h-1 w-full bg-orange-100"></div>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-lg">{{$post->subTitle}}</p>
                                <div class="text-xs font-thin">
                                    <p>By: {{$post->author}}</p>
                                </div>
                            </div>

                            <div class="flex w-full justify-between">
                                <div class="flex flex-col text-slate-700 pr-10">
                                    <p class="text-sm text-slate-600 text-justify">
                                        {!! Str::limit(nl2br(e($post->body)), 800) !!}
                                    </p>
                                </div>
                                <div class="bg-slate-200 max-w-[200px] min-w-[250px] overflow-hidden flex items-center justify-center justify-self-end">
                                    <img class="h-full" src="{{Storage::url($post->img)}}" alt="img">
                                </div>
                            </div>
                        </x-card>
                        <div class="w-full ml-4 flex justify-start">
                            <a href="{{route('posts.show', [
                                'locale' => app()->getLocale(), 
                                'post' => $post])}}">
                                <button class="bg-blue-500 text-slate-100 text-sm px-4 py-0.5 rounded-sm shadow-sm hover:bg-blue-400 hover:text-slate-200"> Ver </button>
                            </a>
                        </div>
                    </x-card>
                    {{-- one blog --}}
                @empty
                    <div>
                        no hay posts disponibles
                    </div>
                @endforelse
            </div>
        </div>
    <x-footer />
</x-layout>