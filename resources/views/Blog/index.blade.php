<x-layout>
    <x-navbar />
        <div>
            <div class="text-4xl max-w-7xl mx-auto pt-20 mb-10 flex flex-col justify-evenly items-center space-y-10">
                <h2 class="w-full font-semibold text-center text-slate-400 pb-4">
                    All entries
                </h2>
                {{-- ! Blog cards --}}
                <x-card class="rounded-lg shadow-lg bg-slate-100 p-3">
                    <div class="flex justify-end w-full">
                        <p class="text-xs text-slate-500">Date: 20/20/2023</p>
                    </div>
                    <x-card class="w-full bg-slate-50 rounded-md shadow-sm">
                        <div class="w-full flex flex-col justify-center">
                            <h4 class="text-xl font-medium text-slate-600">Titulo de blog generico</h4>
                            <div class="h-1 w-full bg-orange-100"></div>
                        </div>
                        <div class="flex flex-col w-full text-slate-700">
                            <p class="text-sm">Description</p>
                            <div class="flex space-x-3 text-xs items-center">
                                <p>By: Fabricio</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-slate-600">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta eaque animi eius, 
                                quod laboriosam quaerat exercitationem sit impedit nobis eos, nam rem reprehenderit, quidem 
                                deserunt magnam dolor accusamus officia unde maxime. Ipsam itaque error aliquid qui. Vitae, 
                                unde similique?...
                            </p>
                            <p class="text-sm text-slate-600">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta eaque animi eius, 
                                quod laboriosam quaerat exercitationem sit impedit nobis eos, nam rem reprehenderit, quidem 
                                deserunt magnam dolor accusamus officia unde maxime. Ipsam itaque error aliquid qui. Vitae, 
                                unde similique?...
                            </p>
                        </div>
                    </x-card>
                    <div class="w-full ml-4 flex justify-start">
                        <button class="bg-blue-500 text-slate-100 text-lg px-4 rounded-sm shadow-md"> Ver </button>
                    </div>
                </x-card>
                {{-- one blog --}}

               
            </div>
        </div>
    <x-footer />
</x-layout>