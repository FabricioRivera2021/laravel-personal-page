<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Fabricio Rivera</title>
</head>
<body>

    <div class="w-screen bg-slate-700">
        <nav class="max-w-[90rem] mx-auto h-10 px-20 flex justify-between space-x-24 items-center bg-slate-700 text-slate-100">
            <ul class="flex space-x-7 font-semibold">
                <li><a class="block pt-1 px-1 h-full rounded-sm hover:bg-orange-400 hover:text-slate-700" href="#">Home</a></li>
                <li><a class="block pt-1 px-1 h-full rounded-sm hover:bg-orange-400 hover:text-slate-700" href="#">About</a></li>
                <li><a class="block pt-1 px-1 h-full rounded-sm hover:bg-orange-400 hover:text-slate-700" href="#">Projects</a></li>
                <li><a class="block pt-1 px-1 h-full rounded-sm hover:bg-orange-400 hover:text-slate-700" href="#">Blog</a></li>
                <li><a class="block pt-1 px-1 h-full rounded-sm hover:bg-orange-400 hover:text-slate-700" href="#">Contact</a></li>
            </ul>
            <ul class="flex space-x-7">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Mail</a></li>
            </ul>
        </nav>
    </div>

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

    {{ $slot }}

</body>
</html>
