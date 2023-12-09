<x-layout>
    <x-nav-bar />
    <div class="h-screen bg-background bg-cover bg-center antialiased">

        <div class="text-2xl md:text-4xl mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center">
            <x-card class="rounded-md p-3 shadow-md bg-slate-100 mx-5">
                <h1 class="sm:max-w-[70rem] font-bold text-slate-500">
                    @lang('messages.title')
                    <span class="block text-sm md:text-lg text-orange-400 font-thin">
                        @lang('messages.madeBy')
                    </span>
                </h1>
                <h2 class="text-slate-500 text-lg">@lang('messages.welcome')</h2>
                <p class="text-gray-700 text-sm max-w-md md:max-w-6xl 2xl:max-w-7xl">
                    @lang('messages.hero-text-first')
                </p>
                <p class="text-gray-700 text-sm max-w-md md:max-w-6xl 2xl:max-w-7xl">
                    @lang('messages.hero-text-second')
                </p>

                <x-button><a href="/{{app()->getLocale()}}/projects">@lang('messages.heroProyectbtn')</a></x-button>
            </x-card>
        </div>
    </div>


    {{-- todo ABOUT ME --------------------------------------------------------------------------------------------------------------------------------- --}}
    <div>
        {{-- todo primer bloque --}}
        <div class="text-xl sm:text-3xl md:max-w-6xl 2xl:max-w-7xl mx-auto grid grid-col-1 md:grid-col-4 md:gap-6 pt-6 md:pt-16">
            <x-card class="col-span-2 p-2 space-y-7 place-self-center mx-3">
                <div>
                    <div class="flex justify-start items-center space-x-3 text-slate-500">
                        <h3 class="max-w-[60rem] font-bold uppercase">
                            @lang('messages.aboutMe-about-me')
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                        </svg>                      
                    </div>
                    <span class="block text-lg text-orange-600 font-thin">
                        @lang('messages.aboutMe-about-subtitle')
                    </span>
                </div>
                <div class="flex space-x-2">
                    <div class="space-y-4 text-justify text-sm">
                        @lang('messages.aboutMe-about-text')
                    </div>
                    <div class="h-20 w-80 bg-slate-500 self-center rounded-xl">
                        {{--  --}}
                    </div>
                </div>
            </x-card>
        </div>

        {{-- todo segundo bloque --}}
        <div class="bg-gradient-to-b from-slate-700 to-blue-500 pb-6">
            <div class="text-xl sm:text-3xl md:max-w-6xl 2xl:max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 md:gap-3 pt-16">
                <x-card class="space-y-3 p-3 mt-10 bg-slate-100 rounded-t-md shadow-md col-span-2 row-span-2 place-self-center md:place-self-auto ml-3">
                    <div>
                        <div class="flex justify-start items-center space-x-3 text-slate-500">
                            <h3 class="max-w-[60rem] font-bold uppercase">
                                @lang('messages.aboutMe-edu-title')
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                                <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                            </svg>
                        </div>
                        <p class="block text-lg text-orange-600 font-thin capitalize">
                            @lang('messages.aboutMe-edu-msg')
                        </p>
                    </div>
                    @lang('messages.aboutMe-edu-text')
                </x-card>
                <x-card class="space-y-3 p-3 bg-slate-100 mt-5 md:mt-20 rounded-t-md shadow-md col-span-2 row-span-2 place-self-center md:place-self-auto mr-3">
                    <div>
                        <div class="flex justify-start items-center space-x-3 text-slate-500">
                            <h3 class="max-w-[60rem] font-bold uppercase">
                                @lang('messages.aboutMe-exp-title')
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                            </svg>                                           
                        </div>
                        <p class="block text-lg text-orange-600 font-thin capitalize mb-2">
                            @lang('messages.aboutMe-exp-msg')
                        </p>
                    </div>
                    <ol class="text-sm w-full">
                        <li class="bg-slate-100 mb-5">
                            <div class="flex items-center justify-between bg-slate-200 mb-2">
                                <h4 class="text-sm md:text-lg font-semibold">@lang('messages.aboutMe-exp-item1-place')</h4>
                                <p>01/03/23 - 01/03/23</p>
                            </div>
                            <p>@lang('messages.aboutMe-exp-item1-rol')</p>
                            <p class="text-slate-500">
                                @lang('messages.aboutMe-exp-item1-desc')
                            </p>
                        </li>
                        <li class="bg-slate-100 mb-5">
                            <div class="flex items-center justify-between bg-slate-200 mb-2">
                                <h4 class="text-sm md:text-lg font-semibold">@lang('messages.aboutMe-exp-item2-place')</h4>
                                <p>01/03/23 - 01/03/23</p>
                            </div>
                            <p>@lang('messages.aboutMe-exp-item2-rol')</p>
                            <p class="text-slate-500">
                                @lang('messages.aboutMe-exp-item2-desc')
                            </p>
                        </li>
                        <li class="bg-slate-100 mb-5">
                            <div class="flex items-center justify-between bg-slate-200 mb-2">
                                <h4 class="text-sm md:text-lg font-semibold">@lang('messages.aboutMe-exp-item3-place')</h4>
                                <p>01/03/23 - 01/03/23</p>
                            </div>
                            <p>@lang('messages.aboutMe-exp-item3-rol')</p>
                            <p class="text-slate-500">
                                @lang('messages.aboutMe-exp-item3-desc')
                            </p>
                        </li>
                    </ol>
                </x-card>
                <x-card class="space-y-10 p-5 bg-slate-100 mt-5 sm:mt-0 rounded-b-md shadow-md col-span-3 place-self-center md:place-self-auto ml-3">
                    <div class="flex flex-col md:flex-row justify-evenly w-full h-full items-start sm:items-center">    
                        <div>
                            <div class="flex justify-start items-center space-x-3 text-slate-500">
                                <h3 class="max-w-[60rem] font-bold uppercase">
                                    @lang('messages.aboutMe-tech-title')
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M12 1.5a.75.75 0 01.75.75V4.5a.75.75 0 01-1.5 0V2.25A.75.75 0 0112 1.5zM5.636 4.136a.75.75 0 011.06 0l1.592 1.591a.75.75 0 01-1.061 1.06l-1.591-1.59a.75.75 0 010-1.061zm12.728 0a.75.75 0 010 1.06l-1.591 1.592a.75.75 0 01-1.06-1.061l1.59-1.591a.75.75 0 011.061 0zm-6.816 4.496a.75.75 0 01.82.311l5.228 7.917a.75.75 0 01-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 01-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 01-1.247-.606l.569-9.47a.75.75 0 01.554-.68zM3 10.5a.75.75 0 01.75-.75H6a.75.75 0 010 1.5H3.75A.75.75 0 013 10.5zm14.25 0a.75.75 0 01.75-.75h2.25a.75.75 0 010 1.5H18a.75.75 0 01-.75-.75zm-8.962 3.712a.75.75 0 010 1.061l-1.591 1.591a.75.75 0 11-1.061-1.06l1.591-1.592a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                </svg>                 
                            </div>
                            <span class="block text-lg text-orange-600 font-thin capitalize">
                                @lang('messages.aboutMe-tech-msg')
                            </span>
                        </div>
                        <div class="flex space-x-1 flex-nowrap sm:flex-wrap self-center items-center pt-4">
                            <div class="2xl:w-12 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/html-5.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-12 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/css-3.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-12 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/js.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-14 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/react.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-14 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/php.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-12 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/laravel.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-16 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/mySql.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-14 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/tailwind.png') }}" class="w-20" alt="icon">
                            </div>
                            <div class="2xl:w-14 md:w-9 sm:w-8 w-7 rounded-md">
                                <img src="{{ Vite::asset('resources/images/icons/aws.png') }}" class="w-20" alt="icon">
                            </div>
                        </div>
                    </div>
                </x-card>
                <x-card class="space-y-10 p-5 bg-slate-100 mt-5 sm:mt-0 rounded-b-md shadow-md col-span-1 row-span-1 place-self-center m-3">
                    <div class="flex flex-col space-y-2">
                        <div class="w-full bg-orange-300 h-1"></div>
                            <p class="text-gray-700 text-sm">
                                @lang('messages.aboutMe-tech-text')
                            </p>
                        <div class="w-full bg-orange-300 h-1"></div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layout>

{{-- todo FOOTER------------------------------------------------------------------------------------------------------------------------------- --}}
<x-footer />