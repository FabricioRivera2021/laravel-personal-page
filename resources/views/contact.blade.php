<x-nav-bar />

<x-layout>
    <div class="h-screen bg-slate-100 bg-contact-background bg-cover bg-center bg-opacity-50">
        <div class="w-full h-screen bg-slate-200 absolute opacity-20"></div>
        <div class="text-xl w-full mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center opacity-95 z-50">

            <div class="flex flex-col items-center justify-center p-10 bg-slate-50 rounded-md shadow-md w-1/2">
                
                
                <div class="flex w-full">
                    <div class="flex space-x-2 items-center w-full px-4">

                        <div class="w-full h-[92%] bg-slate-300 text-sm flex flex-col justify-between items-center m-5">

                            <p class="p-10 text-slate-700">
                                Tienes alguna consulta sobre mi trabajo o quieres realizar una colaboracion,
                                te dejo este formulario para que me hagas llegar cualquuier consulta con respecto
                                a lo que hago. Gracias y saludos.
                            </p>

                            <div class="text-slate-600 font-medium text-center mb-4">
                                <div>
                                    <ul class="text-center text-sm space-y-1">
                                        <li>
                                            fabriciorivera@gmail.com
                                        </li>
                                        <li>
                                            www.linkedin.com/in/fabricio-rivera/
                                        </li>
                                        <li>
                                            www.twitter.com
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
                            <x-input :placeholder="trans('messages.contact-name')" id="name" name="name"/>
                            <x-input type="email" placeholder="Email" id="email" name="email"/>
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