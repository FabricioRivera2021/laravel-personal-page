<x-layout>

    <x-nav-bar />

    <div class="min-h-screen bg-slate-100 bg-background bg-cover bg-center">
        <div class="text-xl w-full mx-auto min-h-[calc(100vh-40px)] flex justify-evenly items-center opacity-95 z-50">
            <div class="flex flex-col items-center justify-center py-2 bg-slate-50 min-w-min rounded-sm shadow-md w-1/2 mt-20 mb-10 sm:mt-0">
                <div class="flex w-full">
                    <div class="flex flex-col sm:flex-row items-end justify-evenly w-full mx-10 mb-4">
                        
                        <form class="flex flex-col space-y-4 min-w-[237px]" method="POST" {{route('contact.store', app()->getLocale())}}>
                            @csrf
                            <div>
                                <h1 class="text-xl font-semibold text-slate-500">@lang('messages.contact-title')</h1>
                            </div>
                            <div class="flex flex-col sm:flex-row justify-between sm:space-x-4 space-y-4 sm:space-y-0">
                                <div class="w-full space-y-4">
                                    <x-input :placeholder="trans('messages.contact-name')" id="name" name="name"/>
                                    @error('name')
                                        <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                    <x-input type="email" placeholder="Email" id="email" name="email"/>
                                    @error('email')
                                        <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-full space-y-4">
                                    <x-input :placeholder="trans('messages.contact-organization')" id="org" name="org"/>
                                    @error('prg')
                                        <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                    <x-input :placeholder="trans('messages.contact-subject')" id="subject" name="subject"/>
                                    @error('subject')
                                        <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <textarea 
                            class="w-full pr-8 rounded-sm border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 text-slate-400 focus:ring-2" 
                            name="msg"
                            placeholder=@lang('messages.contact-msg')
                            id=""
                            cols="30" 
                            rows="10"></textarea>
                            @error('msg')
                                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                            @enderror

                            <x-button class="shadow-md border-slate-200 text-lg rounded-sm">@lang('messages.contact-submit')</x-button>
                        </form>                  

                        <div class="sm:max-w-[35%] sm:min-w-min mt-3 h-[86.5%] bg-gradient-to-b from-slate-200 to-slate-100 text-xs sm:text-sm flex flex-col justify-between items-start px-3 sm:ml-5 rounded-sm shadow-md">
                            <div class="mt-4 text-justify text-sm space-y-3 text-slate-500 font-semibold p-4">
                                <p>
                                    @lang('messages.contact-quote')
                                    <br> 
                                    <span class="whitespace-nowrap italic text-xs">
                                        <br>
                                        @lang('messages.contact-quote-author')
                                    </span> 
                                </p>
                            </div>
                            {{-- 237 --}}

                            <div class="mb-4 mr-2 ml-3">
                                <div>
                                    <div class="text-left text-sm space-y-3 text-slate-600 font-semibold whitespace-nowrap p-1 pr-5">
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ Vite::asset('resources/images/icons/twitter2.png') }}" class="w-6" alt="icon">
                                            <p class="text-xs">
                                               - Fabricio0rivera
                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ Vite::asset('resources/images/icons/linkedin2.png') }}" class="w-6" alt="icon">
                                            <p class="text-xs">
                                                - /in/fabricio-rivera
                                            </p> 
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ Vite::asset('resources/images/icons/github2.png') }}" class="w-6" alt="icon">
                                            <p class="text-xs">
                                                - FabricioRivera2021
                                            </p> 
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ Vite::asset('resources/images/icons/email.png') }}" class="w-6" alt="icon">
                                            <p class="text-xs">
                                                - Fabricio.Rivera2012@gmail.com
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                 </div>         
            </div>
        </div>
    </div>

</x-layout>

<x-footer />