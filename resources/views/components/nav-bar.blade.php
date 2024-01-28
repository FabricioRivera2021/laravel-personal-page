<div
x-data="{ drawerOpen: window.innerWidth > 768 }" @resize.window="drawerOpen = window.innerWidth > 768"
class="antialiased lg:flex bg-slate-700 h-10 w-screen fixed z-50"
@keydown.escape.window="isOpen = false"
>
    <button class="p-1 text-orange-500 rounded m-1 bg-slate-700 hover:bg-slate-100 md:hidden z-50" @click="drawerOpen = !drawerOpen">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        viewBox="0 0 20 20"
        fill="currentColor"
    >
        <path
        fill-rule="evenodd"
        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
        clip-rule="evenodd"
        />
    </svg>
    </button>
    <div class="h-screen fixed md:h-10 bg-slate-700 transform transition duration-300 sm:w-full"
            :class="{'-translate-x-[200px] opacity-0 z-0 h-0':drawerOpen === false, 'translate-x-0 opacity-90 z-50':drawerOpen === true}">
        <nav x-show="drawerOpen" 
            class="transform transition duration-300 inset-0 md:max-w-[80rem] 2xl:max-w-[90rem] mx-auto md:h-10 w-full
                    sm:px-20 flex flex-col sm:flex-row p-5 justify-evenly sm:justify-between sm:space-x-24 sm:items-center bg-slate-700 text-slate-100"
                :class="{'-translate-x-[200px] h-[70vh]':drawerOpen === false, 'translate-x-0 w-fit opacity-100 h-[70vh]': drawerOpen === true}">
            <ul class="flex flex-col sm:flex-row md:space-x-7 space-y-3 sm:space-y-0 font-semibold w-3/4">
                <x-navbar-link href="{{ route('root', app()->getLocale()) }}">@lang('messages.home')</x-navbar-link>
                <x-navbar-link href="{{ route('projects', app()->getLocale()) }}">@lang('messages.proyects')</x-navbar-link>
                <x-navbar-link href="{{ route('contact.index', app()->getLocale()) }}">@lang('messages.contact')</x-navbar-link>
                <x-navbar-link href="{{ route('posts.index', app()->getLocale()) }}">Blog</x-navbar-link>
                @auth
                <x-navbar-link href="#" class="text-orange-400">
                    <form action="{{ route('auth.destroy') }}" method="POST" class="h-fit">
                        @csrf
                        @method('DELETE')
                        <button class="text-sm h-[10px]">LOGOUT</button>
                    </form>
                </x-navbar-link>
                @endauth
            </ul>
            <ul class="flex flex-col sm:flex-row md:space-x-7 w-1/2 space-y-2 sm:space-y-0 self-start sm:self-auto">
                <x-navbar-link class="text-sm" href="https://github.com/FabricioRivera2021" target="blank">Github</x-navbar-link>
                <x-navbar-link class="text-sm" href="https://www.linkedin.com/in/fabricio-rivera/" target="blank">LinkedIn</x-navbar-link>
                <x-navbar-link class="text-sm" href="#">Mail</x-navbar-link>
                <li>
                    <a  class="border rounded-sm border-slate-500 px-2 hover:bg-blue-400 hover:text-slate-100 whitespace-nowrap" href="{{ route('cv', app()->getLocale()) }}" target="_blank">
                        @lang('messages.downloadCV')
                    </a>
                </li>
                <div class="flex self-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>                  
                    <div>
                        <div class="px-1 bg-transparent bg-slate-200 focus:ring-blue-500 appearance-none space-x-1 flex">
                            <a class="text-slate-100 text-xs hover:text-orange-400" href="/en">EN</a>
                            <a class="text-slate-100 text-xs hover:text-orange-400" href="/es">ES</a>
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
</div>
{{-- {{ route('blogs.index', app()->getLocale()) }} --}}