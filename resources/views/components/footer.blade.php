<footer class="bg-slate-800">
    <div class="h-[3px] w-full bg-slate-400"></div>
    <div class="h-48 bg-slate-800 flex space-x-10 justify-between items-start pt-10 text-slate-100 text-xs max-w-7xl mx-auto">
        <div class="grid grid-cols-2 grid-rows-2 w-full h-full">
            <div class="place-content-top justify-self-start">
                <ul class="text-left">
                    <li class="mb-2 font-semibold text-base">@lang('messages.siteSections')</li>
                    <li class="flex space-x-3 justify-center">
                        <div><a class="hover:underline hover:text-orange-400" href="#">@lang('messages.home')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="#">@lang('messages.proyects')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="/{{app()->getLocale()}}/contact">@lang('messages.contact')</a></div>
                        <div><a class="hover:underline hover:text-orange-400" href="#">blog</a></div>
                    </li>
                </ul>
            </div>  
            <div class="place-self-top justify-self-end">
                <div class="text-right">
                    <div class="flex space-x-4 items-center justify-end">
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="#">
                                <img src="{{ Vite::asset('resources/images/icons/github.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="#">
                                <img src="{{ Vite::asset('resources/images/icons/instagram.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="#">
                                <img src="{{ Vite::asset('resources/images/icons/linkedin.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                        <div>
                            <a class="hover:underline hover:text-orange-400" href="#">
                                <img src="{{ Vite::asset('resources/images/icons/twitter.png') }}" class="w-6" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <ul>
                    <li class="mb-2">
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