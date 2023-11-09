<x-layout>

    <x-navbar />

    <div class="w-full">
        <div class="pt-12 text-3xl max-w-7xl mx-auto flex flex-col justify-evenly">
            <h2 class="font-semibold uppercase text-slate-600 mt-20 mb-5">Photography site <a class="text-lg underline text-blue-400" href="https://fabriciorivera.art">View site</a> </h2>
            <div>
                <div class="flex items-center justify-between">
                    <h3 class="text-blue-500 font-semibold w-[56rem] mb-4">Fabricio Rivera Fotografia</h3>
                    <div class="flex space-x-4">
                        <p class="text-xs border rounded-xl bg-blue-400 px-5 py-1 text-slate-100 ring-slate-900">React</p>
                        <p class="text-xs border rounded-xl bg-sky-200 px-5 py-1 text-slate-600 whitespace-nowrap ring-slate-900">Tailwind CSS</p>
                    </div>
                </div>
                    <p class="text-sm mb-2">My sitio web creado con el proposito de demostrar mi trabajo como fotografo, fue el segundo sitio web que cree, el mismo esta echo con React y Tailwind CSS. 
                        Hosteado desde una instancia virtual utilizando los servicios de AWS. 
                        Desde dicho sitio se pueden ver fotografias relacionadas con los retratos tanto en exteriores como interiores. Ademas de tambien tener fotos de productos.
                    </p>
            </div>
            <div class="flex bg-slate-300 h-[1095px] py-8">
                {{--  --}}
            </div>

            <h2 class="font-semibold uppercase text-slate-600 mt-20 mb-5">Personal website (legacy) <span class="text-lg underline text-blue-400">View site</span> </h2>
            <div>
                <div class="flex items-center justify-between">
                    <h3 class="text-blue-500 font-semibold w-[56rem] mb-4">Página personal</h3>
                    <div class="flex space-x-4">
                        <p class="text-xs border rounded-xl bg-rose-300 px-5 py-1 text-slate-700">HTML/CSS</p>
                        <p class="text-xs border rounded-xl bg-yellow-200 px-5 py-1 text-slate-600 whitespace-nowrap">Javascript</p>
                    </div>
                </div>
                <p class="text-sm mb-10">El primer sitio que realize utilizando solo HTML/CSS y Javascript. Para mi primer página no utilize ningun framework, ya que queria familiarizarme con las partes mas basicas que componen una web. Mi enfoque en este caso radico 
                    en el diseño y en hacer que todo fuera responsive para poder funcionar en cualquier dispositivo. <br> Luego de haber realizado esta página y estar contento con el diseño, estoy optando por re hacer mi página personal. Esta vez utilizando Laravel ya que
                    ademas quiero implementar un Blog para ir subiendo contenido que sirva para la comunidad.
                </p>
            </div>
            <div class="flex bg-slate-300 h-[1095px] py-8">
                {{--  --}}
            </div>
        </div>
    </div>
</x-layout>