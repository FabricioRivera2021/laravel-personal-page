<footer class="bg-slate-800">
    <div class="h-[3px] w-full bg-slate-400"></div>
    <div class=" bg-slate-800 flex space-x-10 justify-between items-start pt-10 text-slate-100 text-xs max-w-xs md:max-w-6xl 2xl:max-w-7xl mx-auto pb-6 px-5">
        <div class="grid grid-cols-2 md:grid-rows-2 w-full h-full">
            <div class="place-content-top justify-self-start">
                <ul class="text-left">
                    <li class="mb-2 font-semibold text-base">@lang('messages.siteSections')</li>
                    <li class="flex flex-col md:flex-row md:space-x-3 justify-center">
                        <div><a class="hover:underline hover:text-orange-400" href="{{ route('root', app()->getLocale()) }}">@lang('messages.home')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="{{ route('projects', app()->getLocale()) }}">@lang('messages.proyects')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="{{ route('contact', app()->getLocale()) }}">@lang('messages.contact')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="{{ route('posts.index', app()->getLocale()) }}">Blog</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="{{ route('cv', app()->getLocale()) }}" target="_blank">CV</a></div>
                    </li>
                </ul>
            </div>  
            <div class="md:place-self-top place-self-center md:justify-self-end">
                <div class="text-right">
                    <div class="flex space-x-4 items-center justify-end">
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="https://github.com/FabricioRivera2021" target="_blank">
                                <img src="{{ Vite::asset('resources/images/icons/github.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="https://www.instagram.com" target="_blank">
                                <img src="{{ Vite::asset('resources/images/icons/instagram.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="https://www.linkedin.com/in/fabricio-rivera/" target="_blank">
                                <img src="{{ Vite::asset('resources/images/icons/linkedin.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="https://twitter.com/Fabricio0rivera" target="_blank">
                                <img src="{{ Vite::asset('resources/images/icons/twitter.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <ul>
                    <li class="md:mb-2 mt-3 md:mt-0">
                        <a class="hover:underline hover:text-orange-400" href="/en">
                            English version
                        </a>
                    </li>
                    <li>
                        <a class="hover:underline hover:text-orange-400" href="/es">
                            Version en español
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="text-right">
                    @lang('messages.info')
                </ul>
            </div>
        </div>
    </div>
</footer>