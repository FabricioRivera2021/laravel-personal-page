<x-layout>
    <x-navbar />
        <div>
            <div class="text-4xl max-w-7xl mx-auto pt-20 mb-10 flex flex-col justify-evenly items-center space-y-10">
                <h2 class="w-full font-semibold text-center text-slate-400 pb-4">
                    All entries
                </h2>
                {{-- ! Blog cards --}}
                @forelse ($posts as $post)
                    <x-card class="rounded-lg shadow-lg bg-slate-100 p-3 min-w-full">
                        <div class="flex justify-end w-full">
                            <p class="text-xs text-slate-500">20/20/2023</p>
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
                                    {{$post->body}}
                                </p>
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