<x-layout>

    <x-navbar />

    <div class="w-full">
        <div class="flex flex-col bg-slate-100">
            {{-- !? PROYECTO CARD --}}
            <div class="max-w-xl md:max-w-7xl justify-self-center self-center md:pt-12">
                <h2 class="font-semibold uppercase text-slate-600 mt-20 ml-5 mb-5 text-xl">@lang('messages.project-1-title') <a class="text-sm underline text-blue-400" href="https://fabriciorivera.art" target="_blank" >@lang('messages.view-site')</a> </h2>
                <div class="flex flex-col md:flex-row justify-center items-center md:space-x-20">
                    <div>
                        <div class="flex flex-col items-start mb-4">
                            <h3 class="text-blue-500 font-semibold mb-2 whitespace-nowrap">Fabricio Rivera Fotografia</h3>
                            <div class="flex space-x-3">
                                <p class="text-xs border rounded-3xl bg-blue-500 px-3 py-0.5 text-slate-100 shadow-md">React</p>
                                <p class="text-xs border rounded-3xl bg-sky-700 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">Tailwind CSS</p>
                                <p class="text-xs border rounded-3xl bg-amber-600 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">AWS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs mb-2 text-justify p-5 text-slate-600">
                            @lang('messages.project-1-desc')
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 mx-auto gap-5 p-5 md:p-20">
                <div class="col-span-2 place-self-center rounded-sm shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/main.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/portfolio.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/portfolio1.jpg')}}" alt="">
                </div>
                <div class="col-span-2 place-self-center rounded-sm shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/portfolio2.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/portfolio3.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/photography/contact.jpg')}}" alt="">
                </div>
            </div>

            {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- !? PROYECTO CARD --}}
            <div class="max-w-7xl  justify-self-center self-center md:pt-12">
                <h2 class="font-semibold uppercase text-slate-600 mt-20 ml-5 mb-5 text-xl">@lang('messages.project-2-title') <a class="text-sm underline text-blue-400" href="{{ route('legacy', app()->getLocale() )}}" target="_blank">@lang('messages.view-site')</a> </h2>
                <div class="flex flex-col md:flex-row justify-center items-center md:space-x-20">
                    <div>
                        <div class="flex flex-col items-start mb-4">
                            <h3 class="text-blue-500 font-semibold mb-2 whitespace-nowrap">fabriciorivera.com <span class="text-xs text-slate-500">@lang('messages.project-2-subtitle')</span></h3>
                            <div class="flex space-x-3">
                                <p class="text-xs border rounded-xl bg-orange-500 px-3 py-0.5 text-slate-100 shadow-md">HTML/CSS</p>
                                <p class="text-xs border rounded-xl bg-yellow-400 px-3 py-0.5 text-slate-500 shadow-md whitespace-nowrap">Javascript</p>
                                <p class="text-xs border rounded-xl bg-indigo-400 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">PHP</p>
                                <p class="text-xs border rounded-xl bg-amber-600 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">AWS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs mb-2 text-justify p-5 text-slate-600">
                            @lang('messages.project-2-desc')
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 mx-auto gap-5 bg-slate-100 p-5 md:p-20 shadow-lg ">
                <div class="col-span-2 place-self-center rounded-sm shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/old-personal-page/main.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/old-personal-page/about-me.jpg')}}" alt="">
                </div>
                <div class="shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/old-personal-page/projects.jpg')}}" alt="">
                </div>
                <div class="col-span-2 place-self-center rounded-sm shadow-md">
                    <img class="rounded-md" src="{{Vite::asset('resources/images/screenshots/old-personal-page/mobile.jpg')}}" alt="">
                </div>
            </div>


        </div>
    </div>

</x-layout>

<x-footer />
