<x-nav-bar />

<x-layout>
    <div class="h-screen bg-slate-100">
        <div class="text-xl max-w-[50rem] mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center">
            <div class="flex flex-col items-center justify-center p-5 bg-slate-600 rounded-md shadow-md w-full">
                
                <div>
                    <h1 class="text-xl font-semibold text-slate-100 mb-4">@lang('messages.contact-title')</h1>
                </div>
                
                <div class="flex space-x-2 items-center w-full px-14">

                    <form class="flex flex-col space-y-4 w-full" action="">
                        @csrf
                        <x-input :placeholder="trans('messages.contact-name')" id="name" name="name"/>
                        <x-input type="email" placeholder="Email" id="email" name="email"/>
                        <textarea 
                        class="w-full pr-8 rounded-sm border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 text-slate-400 focus:ring-2" 
                        name="msg"
                        id=""
                        cols="30" 
                        rows="10">@lang('messages.contact-msg')</textarea>

                        <x-button class="shadow-sm border-slate-600 text-xl">@lang('messages.contact-submit')</x-button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>

</x-layout>

<x-footer />