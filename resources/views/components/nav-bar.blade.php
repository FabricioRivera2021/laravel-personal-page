<div class="fixed w-[100vw] bg-slate-700 z-50">
    <nav class="md:max-w-[80rem] 2xl:max-w-[90rem] mx-auto h-10 px-20 flex justify-between space-x-24 items-center bg-slate-700 text-slate-100">
        <ul class="flex space-x-7 font-semibold">
            <x-navbar-link href="{{ route('root', app()->getLocale()) }}">@lang('messages.home')</x-navbar-link>
            <x-navbar-link href="{{ route('projects', app()->getLocale()) }}">@lang('messages.proyects')</x-navbar-link>
            <x-navbar-link href="{{ route('contact', app()->getLocale()) }}">@lang('messages.contact')</x-navbar-link>
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
        <ul class="flex space-x-7 items-center">
            <x-navbar-link class="text-sm" href="https://github.com/FabricioRivera2021" target="blank">Github</x-navbar-link>
            <x-navbar-link class="text-sm" href="https://www.linkedin.com/in/fabricio-rivera/" target="blank">LinkedIn</x-navbar-link>
            <x-navbar-link class="text-sm" href="#">Mail</x-navbar-link>
            <li class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>                  
                <div>
                    <div class="px-1 bg-transparent bg-slate-200 focus:ring-blue-500 appearance-none space-x-1 flex">
                        <a class="text-slate-100 text-xs hover:text-orange-400" href="/en">EN</a>
                        <a class="text-slate-100 text-xs hover:text-orange-400" href="/es">ES</a>
                    </div>
                </div>
            </li>
            <li class="border rounded-sm border-slate-500 px-2 hover:bg-blue-400 hover:text-slate-100 whitespace-nowrap">
                <a href="{{ route('cv', app()->getLocale()) }}" target="_blank">
                        @lang('messages.downloadCV')
                </a>
            </li>
        </ul>
    </nav>
</div>

{{-- {{ route('blogs.index', app()->getLocale()) }} --}}