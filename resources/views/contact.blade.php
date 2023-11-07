<x-nav-bar />

<x-layout>
    <div class="h-screen bg-slate-300">
        <div class="text-xl max-w-7xl mx-auto h-[calc(100vh-40px)]  flex justify-evenly items-center">
            <x-card class="flex flex-col items-center justify-center p-10 bg-slate-200 rounded-md shadow-md">

                <h1>Ponte en contacto</h1>

                <form class="flex flex-col space-y-4" action="">
                    <x-input placeholder="Name" id="name" name="name"/>
                    <x-input type="email" placeholder="Email" id="email" name="email"/>
                    <textarea 
                        class="w-full pr-8 rounded-sm border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 text-slate-400 focus:ring-2" 
                        name="msg" 
                        id="" 
                        cols="30" 
                        rows="10">Message</textarea>
                </form>
            </x-card>
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
            <li class="mb-2 font-semibold text-base">Site sections</li>
            <li class="flex space-x-3 justify-center">
                <div><a class="hover:underline hover:text-orange-400" href="#">Home</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">Projects</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="/contact">Contact form</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">blog</a></div>
            </li>
        </ul>
    </div>  
    <div>
        <ul class="text-center">
            <li class="mb-2 font-semibold text-base">Contact information:</li>
            <li class="flex space-x-3">
                <div>Fabricio.Rivera2012@gmail.com</div>
                <div><a class="hover:underline hover:text-orange-400" href="#">github/fabricioRivera</a></div>
                <div><a class="hover:underline hover:text-orange-400" href="#">linkedin/fabricioRivera</a></div>
            </li>
        </ul>
    </div>
    <div>
        <ul class="text-right">
            <li >&copy; 2023</li>
            <li >Montevideo, Uruguay</li>
            <li >Made with Laravel by Fabricio Rivera</li>
        </ul>
    </div>
</x-footer>