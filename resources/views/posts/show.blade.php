<x-layout>
    <x-navbar />
        <main>
            <div class="text-4xl max-w-7xl mx-auto pt-20 mb-10 flex flex-col justify-evenly items-center space-y-10 min-h-screen">
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
                                <div class="flex justify-between items-end">
                                    <h4 class="text-3xl font-semibold text-slate-600">{{$post->title}}</h4>
                                </div>
                                <div class="h-1 w-full bg-orange-100"></div>
                            </div>
                            <div class="flex flex-col w-full text-slate-700">
                                <p class="text-lg">{{$post->subTitle}}</p>
                            </div>
                            <article class="prose prose-xl text-justify prose-code:text-slate-200">
                                    {!! Str::markdown($post->body) !!}
                            </article>
                            <div class="text-sm pt-10">
                                <div>
                                    By: {{$post->author}}
                                </div>
                            </div>
                            @auth
                            <div class="flex flex-col justify-start items-start border rounded-sm p-2">
                                <form action="{{ route('posts.destroy', ['locale' => app()->getLocale(), 'post' => $post]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-gray-200 text-sm text-red-600 hover:underline px-3">Eliminar post</button>
                                </form>
                                <div>
                                    <a class="bg-gray-200 text-sm text-emerald-600 hover:underline px-3" href="{{ route('posts.edit', ['locale' => app()->getLocale(), 'post' => $post]) }}">Editar Post</a>
                                </div>
                                {{-- <a class="text-sm text-red-500 hover:underline" href="{{ route('posts.destroy', ['locale' => app()->getLocale(), 'post' => $post]) }}">Eliminar post</a> --}}
                            </div>
                            @endauth
                        </x-card>
                    </x-card>
            </div>
        </main>
    <x-footer />
</x-layout>