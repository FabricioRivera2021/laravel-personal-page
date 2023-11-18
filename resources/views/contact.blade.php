<x-nav-bar />

<x-layout>
    <div class="h-screen bg-slate-100 bg-background bg-cover bg-center">
        <div class="text-xl w-full mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center opacity-95 z-50">

            <div class="flex flex-col items-center justify-center p-10 bg-slate-50 rounded-md shadow-md w-1/2">
                
                
                <div class="flex w-full">
                    <div class="flex space-x-2 items-center w-full px-4">

                        <div class="max-w-[35%] h-[92%] bg-slate-300 text-sm flex flex-col justify-end items-center m-5 px-5 rounded-sm shadow-md">

                            <div class=" mb-4">
                                <div>
                                    <ul class="text-center text-sm space-y-1 text-slate-500 font-semibold whitespace-nowrap">
                                        <li>
                                            FabricioRivera2012@gmail.com
                                        </li>
                                        <li>
                                            www.linkedin.com/in/fabricio-rivera/
                                        </li>
                                        <li>
                                            www.github.com/FabricioRivera2021
                                        </li>
                                        <li>
                                            Montevideo, Uruguay.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        
                        <form class="flex flex-col space-y-4 w-full" action="">
                            @csrf
                            <div>
                                <h1 class="text-xl font-semibold text-slate-500">@lang('messages.contact-title')</h1>
                            </div>
                            <div class="flex w-full justify-between space-x-4">
                                <div class="w-full space-y-4">
                                    <x-input :placeholder="trans('messages.contact-name')" id="name" name="name"/>
                                    <x-input type="email" placeholder="Email" id="email" name="email"/>
                                </div>
                                <div class="w-full space-y-4">
                                    <x-input placeholder="Organización" id="name" name="name"/>
                                    <x-input placeholder="Asunto" id="name" name="name"/>
                                </div>
                            </div>
                            <textarea 
                            class="w-full pr-8 rounded-sm border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 text-slate-400 focus:ring-2" 
                            name="msg"
                            id=""
                            cols="30" 
                            rows="10">@lang('messages.contact-msg')</textarea>

                            <x-button class="shadow-sm border-slate-200 text-lg rounded-sm">@lang('messages.contact-submit')</x-button>
                        </form>
                        
                    </div>
                 </div>


            
            </div>
        </div>
    </div>

</x-layout>

<x-footer />