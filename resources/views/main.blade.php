<x-nav-bar />

<x-layout>
    <div class="h-screen bg-background bg-cover bg-center">

        <div class="text-4xl max-w-7xl mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center">
            <x-card class="rounded-md shadow-md bg-slate-100">
                <h1 class="w-[60rem] font-bold text-slate-500">
                    @lang('messages.title')
                    <span class="block text-lg text-orange-400 font-thin">
                        @lang('messages.madeBy')
                    </span>
                </h1>
                <h1>@lang('messages.welcome')</h1>
                
                <p class="text-gray-700 text-sm w-[85rem]">
                    @lang('messages.hero-text-first')
                </p>
                <p class="text-gray-700 text-sm w-[85rem]">
                    @lang('messages.hero-text-second')
                </p>

                <x-button><a href="#">@lang('messages.heroProyectbtn')</a></x-button>
            </x-card>
        </div>
    </div>

    <div>
        {{-- todo primer bloque --}}
        <div class="text-3xl max-w-7xl mx-auto grid grid-col-4 gap-6 pt-16">
            <x-card class="col-span-3 space-y-7">
                <div>
                    <div class="flex justify-start items-center space-x-3 text-slate-500">
                        <h3 class="max-w-[60rem] font-bold uppercase">
                            @lang('messages.aboutMe-about-me')
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                        </svg>                      
                    </div>
                    <span class="block text-lg text-orange-400 font-thin">
                        @lang('messages.aboutMe-about-subtitle')
                    </span>
                </div>
                <div class="flex space-x-2">
                    <div class="space-y-4 text-sm">
                        @lang('messages.aboutMe-about-text')
                    </div>
                    <div class="h-[400px] w-[1050px] bg-slate-500 self-center rounded-xl">
                        {{--  --}}
                    </div>
                </div>
            </x-card>
        </div>

        {{-- todo segundo bloque --}}
        <div class="bg-gradient-to-b from-slate-700 to-blue-500 pb-6">
            <div class="text-3xl max-w-7xl mx-auto grid grid-cols-3 gap-6 pt-16">
                <x-card class="space-y-3 mt-10 bg-slate-100 rounded-md shadow-md col-span-2">
                    <div>
                        <div class="flex justify-start items-center space-x-3 text-slate-500">
                            <h3 class="max-w-[60rem] font-bold uppercase">
                                @lang('messages.contact-edu-title')
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                                <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                                <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                            </svg>
                        </div>
                        <p class="block text-lg text-orange-400 font-thin capitalize">
                            @lang('messages.contact-edu-msg')
                        </p>
                    </div>
                    <p class="text-gray-700 text-sm ">
                        I believe that education is a lifelong journey, and my academic experiences have been instrumental in shaping my knowledge and perspective. 
                        I earned my Bachelor's degree in [Your Field of Study] from [University Name], where I gained a strong foundation in [Key Subjects or Skills]. 
                        This was just the beginning of my educational adventure, as I continued to explore and expand my horizons. I pursued further studies in 
                        [Mention Any Advanced Degrees or Courses], where I delved deeper into [Specific Areas of Study]. My academic pursuits have not only equipped 
                        me with valuable skills but have also instilled in me a passion for continuous learning and growth.
                    </p>
                    <p class="text-gray-700 text-sm ">
                        In addition to formal education, I'm a firm believer in self-directed learning. I've supplemented my academic achievements 
                        with online courses, workshops, and hands-on projects. These experiences have allowed me to stay up-to-date with the latest 
                        industry trends and technologies in the ever-evolving field of web development. I am a strong advocate for knowledge sharing 
                        and have actively participated in [Mention Any Relevant Educational or Community Initiatives] where I've had the opportunity 
                        to both teach and learn from others. Education is an ongoing journey, and I'm committed to embracing new challenges and expanding 
                        my skill set to stay at the forefront of my field.

                        Feel free to customize these paragraphs with your specific educational background and experiences to make them a perfect fit for your personal webpage.
                    </p>
                    <ul class="text-sm">
                        <li>item 1</li>
                        <li>item 1</li>
                        <li>item 1</li>
                        <li>item 1</li>
                    </ul>
                </x-card>
                <x-card class="space-y-3 bg-slate-100 mt-20 rounded-md shadow-md col-span-1 row-span-2">
                    <div>
                        <div class="flex justify-start items-center space-x-3 text-slate-500">
                            <h3 class="max-w-[60rem] font-bold uppercase">
                                @lang('messages.contact-exp-title')
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                            </svg>                                           
                        </div>
                        <p class="block text-lg text-orange-400 font-thin capitalize">
                            @lang('messages.contact-exp-msg')
                        </p>
                    </div>
                    <ol class="text-sm w-full">
                        <li class="bg-slate-100 mb-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-lg font-semibold">Hospital Policial</h4>
                                <p>01/03/2023</p>
                            </div>
                            <p>IT - Technical support</p>
                        </li>
                        <li class="bg-slate-100 mb-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-lg font-semibold">Hospital Policial</h4>
                                <p>01/03/2023</p>
                            </div>
                            <p>Pharmaceutical auxiliar</p>
                        </li>
                        <li class="bg-slate-100 mb-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-lg font-semibold">Hospital Vilardebo</h4>
                                <p>01/03/2023</p>
                            </div>
                            <p>Pharmaceutical auxiliar</p>
                        </li>
                    </ol>
                </x-card>
                <x-card class="space-y-10 bg-slate-100 rounded-md shadow-md col-span-2">
                    <div>
                        <div class="flex justify-start items-center space-x-3 text-slate-500">
                            <h3 class="max-w-[60rem] font-bold">
                                TECHNOLOGIES
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 1.5a.75.75 0 01.75.75V4.5a.75.75 0 01-1.5 0V2.25A.75.75 0 0112 1.5zM5.636 4.136a.75.75 0 011.06 0l1.592 1.591a.75.75 0 01-1.061 1.06l-1.591-1.59a.75.75 0 010-1.061zm12.728 0a.75.75 0 010 1.06l-1.591 1.592a.75.75 0 01-1.06-1.061l1.59-1.591a.75.75 0 011.061 0zm-6.816 4.496a.75.75 0 01.82.311l5.228 7.917a.75.75 0 01-.777 1.148l-2.097-.43 1.045 3.9a.75.75 0 01-1.45.388l-1.044-3.899-1.601 1.42a.75.75 0 01-1.247-.606l.569-9.47a.75.75 0 01.554-.68zM3 10.5a.75.75 0 01.75-.75H6a.75.75 0 010 1.5H3.75A.75.75 0 013 10.5zm14.25 0a.75.75 0 01.75-.75h2.25a.75.75 0 010 1.5H18a.75.75 0 01-.75-.75zm-8.962 3.712a.75.75 0 010 1.061l-1.591 1.591a.75.75 0 11-1.061-1.06l1.591-1.592a.75.75 0 011.06 0z" clip-rule="evenodd" />
                            </svg>                 
                        </div>
                        <span class="block text-lg text-orange-400 font-thin">
                            ... that i have used
                        </span>
                        <p class="text-gray-700 text-sm pt-5">
                            I wield HTML, CSS, JavaScript, PHP, and Laravel to craft exceptional web applications, seamlessly blending design, interactivity, and robust functionality.
                        </p>
                    </div>
                    <div class="flex space-x-4 flex-wrap self-center">
                        <div class="h-16 w-16 bg-slate-300 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-200 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-400 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-300 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-200 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-400 rounded-md"></div>
                        <div class="h-16 w-16 bg-slate-300 rounded-md"></div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layout>

<x-footer>
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
        <ul class="text-center">
            <li class="mb-2 font-semibold text-base">@lang('messages.siteSections')</li>
            <li class="flex space-x-3 justify-center">
                <div><a class="hover:underline hover:text-orange-400" href="#">@lang('messages.home')</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">@lang('messages.proyects')</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="/{{app()->getLocale()}}/contact">@lang('messages.contact')</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">blog</a></div>
            </li>
        </ul>
    </div>  
    <div>
        <ul class="text-center">
            <li class="mb-2 font-semibold text-base">@lang('messages.contactInfo')</li>
            <li class="flex space-x-3">
                <div>Fabricio.Rivera2012@gmail.com</div>
                <div><a class="hover:underline hover:text-orange-400" href="#">github/fabricioRivera</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">linkedin/fabricioRivera</a></div>
            </li>
        </ul>
    </div>
    <div>
        <ul class="text-right">
            @lang('messages.info')
        </ul>
    </div>
</x-footer>