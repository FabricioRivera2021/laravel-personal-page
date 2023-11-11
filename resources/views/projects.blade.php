<x-layout>

    <x-navbar />

    <div class="w-full">
        <div class="flex flex-col">
            {{-- !? PROYECTO CARD --}}
            <div class="max-w-7xl  justify-self-center self-center pt-12">
                <h2 class="font-semibold uppercase text-slate-600 mt-20 mb-5 text-xl">Photography site <a class="text-sm underline text-blue-400" href="https://fabriciorivera.art">View site</a> </h2>
                <div class="flex justify-center items-center space-x-20">
                    <div>
                        <div class="flex flex-col items-start mb-4">
                            <h3 class="text-blue-500 font-semibold mb-2 whitespace-nowrap">Fabricio Rivera Fotografia</h3>
                            <div class="flex space-x-3">
                                <p class="text-sm border rounded-3xl bg-blue-500 px-3 py-0.5 text-slate-100 shadow-md">React</p>
                                <p class="text-sm border rounded-3xl bg-sky-700 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">Tailwind CSS</p>
                                <p class="text-sm border rounded-3xl bg-amber-600 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">AWS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs mb-2 text-justify p-5 text-slate-600">Es un sitio web creado con el proposito de demostrar mi trabajo como fotografo, fue el segundo sitio web que cree, el mismo esta echo con React y Tailwind CSS. 
                            Hosteado desde una instancia virtual utilizando los servicios de AWS. 
                            Desde dicho sitio se pueden ver fotografias relacionadas con los retratos tanto en exteriores como interiores. Ademas de tambien tener fotos de productos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="flex bg-slate-300 h-[1095px] py-8">
                    {{--  --}}
                </div>
            </div>

            {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
            {{-- !? PROYECTO CARD --}}
            <div class="max-w-7xl  justify-self-center self-center pt-12">
                <h2 class="font-semibold uppercase text-slate-600 mt-20 mb-5 text-xl">Página personal (Legacy) <a class="text-sm underline text-blue-400" href="https://fabriciorivera.art">View site</a> </h2>
                <div class="flex justify-center items-center space-x-20">
                    <div>
                        <div class="flex flex-col items-start mb-4">
                            <h3 class="text-blue-500 font-semibold mb-2 whitespace-nowrap">fabriciorivera.com old version</h3>
                            <div class="flex space-x-3">
                                <p class="text-xs border rounded-xl bg-orange-500 px-3 py-0.5 text-slate-100 shadow-md">HTML/CSS</p>
                                <p class="text-xs border rounded-xl bg-yellow-400 px-3 py-0.5 text-slate-500 shadow-md whitespace-nowrap">Javascript</p>
                                <p class="text-xs border rounded-xl bg-indigo-400 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">PHP</p>
                                <p class="text-sm border rounded-3xl bg-amber-600 px-3 py-0.5 text-slate-100 shadow-md whitespace-nowrap">AWS</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs mb-2 text-justify p-5 text-slate-600">Esta fue la primera página web que publique, echa con HTML/CSS, Javascript y una pizca de PHP. La diseñe sin utilizar ningun framework ya que al ser la primera página que iba a realizar
                            para publicar en internet queria realizarla con las tecnologias mas basicas. Con el objetivo de mejorar el diseño y aumentar las caracteristicas de mi página personal realize una nueva version, echa con Laravel y que implementa un Blog al que
                            pienso ir subiendo contenido que pueda ser de utilidad para la comunidad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="flex bg-slate-300 h-[1095px] py-8">
                    {{--  --}}
                </div>
            </div>


        </div>
    </div>

</x-layout>

<x-footer />
