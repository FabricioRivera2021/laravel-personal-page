<x-layout>
    <div class="w-[99vw] h-screen bg-background bg-cover bg-center">

        <div class="text-4xl max-w-7xl mx-auto h-[calc(100vh-40px)] flex justify-evenly items-center">
            <x-card>
                <h1 class="w-[60rem] font-bold text-slate-500">
                    WEB DEVEL<span class="text-orange-400 text-3xl">OPMENT</span>
                    <span class="block text-lg text-orange-400 font-thin">
                        Made by Fabricio Rivera
                    </span>
                </h1>
                <p class="text-gray-700 text-sm w-[85rem]">
                    Welcome to my personal web development corner, where I embark on a creative odyssey through the fascinating realm of the web. Here, I'll be sharing my passion for crafting elegant and efficient web solutions, from front-end magic to back-end wizardry. 
                    Join me as I explore the ever-evolving landscape of technology, one line of code at a time, and let's build the digital future together.
                </p>
                <p class="text-gray-700 text-sm w-[85rem]">
                    I'll be diving into the world of web development with a strong focus on crafting dynamic and visually appealing web experiences. 
                    My toolkit includes an array of exciting technologies such as <span class='font-semibold text-black'>HTML/CSS</span> for structure 
                    and styling, the interactivity of <span class='font-semibold text-black'>JavaScript</span>, the versatility of 
                    <span class='font-semibold text-black'>React</span>, and the robust back-end power of <span class='font-semibold text-black'>PHP</span> 
                    and <span class='font-semibold text-black'>Laravel</span>. Join me on this thrilling journey as we transform ideas into stunning 
                    digital reality and create web pages that are both beautiful and functional.
                </p>
            </x-card>
        </div>
        
    </div>

    {{-- <div class="text-4xl max-w-3xl mx-auto items-center pt-20">
            <div class="text-slate-50 bg-gradient-to-r from-sky-700 to-indigo-500 rounded-sm py-6 font-bold text-xl flex justify-around">
                <div class="p-4 rounded-2xl">
                    HTML/CSS
                </div>
                <div class="p-4 rounded-2xl">
                    Javascript
                </div>
                <div class="p-4 rounded-2xl">
                    PHP
                </div>
                <div class="p-4 rounded-2xl">
                    LARAVEL
                </div>
            </div>
    </div> --}}

    <div class="w-[99vw] h-screen bg-gradient-to-r from-sky-200 to-indigo-700">
        <div class="text-3xl max-w-7xl mx-auto h-[calc(100vh-40px)] grid grid-rows-3 grid-flow-col gap-4 pt-16">
            <x-card class="row-span-3">
                <h3 class="max-w-[60rem] font-bold text-slate-500">
                    ABOUT ME
                    <span class="block text-lg text-orange-400 font-thin">
                        Story time
                    </span>
                </h3>
                <p class="text-gray-700 text-sm">
                    Welcome to my personal web development corner, where I embark on a creative odyssey through the fascinating realm of the web. Here, I'll be sharing my passion for crafting elegant and efficient web solutions, from front-end magic to back-end wizardry. 
                    Join me as I explore the ever-evolving landscape of technology, one line of code at a time, and let's build the digital future together.
                </p>
                <p class="text-gray-700 text-sm">
                    I'll be diving into the world of web development with a strong focus on crafting dynamic and visually appealing web experiences. 
                    My toolkit includes an array of exciting technologies such as <span class='font-semibold text-black'>HTML/CSS</span> for structure 
                    and styling, the interactivity of <span class='font-semibold text-black'>JavaScript</span>, the versatility of 
                    <span class='font-semibold text-black'>React</span>, and the robust back-end power of <span class='font-semibold text-black'>PHP</span> 
                    and <span class='font-semibold text-black'>Laravel</span>. Join me on this thrilling journey as we transform ideas into stunning 
                    digital reality and create web pages that are both beautiful and functional.
                </p>
            </x-card>
            <x-card>
                <h3 class="max-w-[60rem] min-w-[20rem] font-bold text-slate-500">
                    ACADEMICS
                    <span class="block text-lg text-orange-400 font-thin">
                        ... what have i studied
                    </span>
                </h3>
                <p class="text-gray-700 text-sm ">
                    Welcome to my personal web development corner, where I embark on a creative odyssey through the fascinating realm of the web. Here, I'll be sharing my passion for crafting elegant and efficient web solutions, from front-end magic to back-end wizardry. 
                    Join me as I explore the ever-evolving landscape of technology, one line of code at a time, and let's build the digital future together.
                </p>
            </x-card>
            <x-card>
                <h3 class="max-w-[60rem] min-w-[20rem] font-bold text-slate-500">
                    EXPERIENCE
                    <span class="block text-lg text-orange-400 font-thin">
                        ... a little background
                    </span>
                </h3>
                <ol class="text-sm">
                    <li>
                        <h4 class="text-lg font-semibold">item 1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quos!</p>
                    </li>
                    <li>
                        <h4 class="text-lg font-semibold">item 1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quos!</p>
                    </li>
                    <li>
                        <h4 class="text-lg font-semibold">item 1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quos!</p>
                    </li>
                </ol>
            </x-card>
            <x-card>
                <h3 class="max-w-[60rem] min-w-[20rem] font-bold text-slate-500">
                    TECHNOLOGIES
                    <span class="block text-lg text-orange-400 font-thin">
                        ... that i have used
                    </span>
                </h3>
                <div class="flex space-x-4 flex-wrap">
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
</x-layout>