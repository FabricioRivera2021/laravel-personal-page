<x-layout>

    <div class="w-[99vw] h-screen bg-slate-300">
        <div class="text-xl max-w-7xl mx-auto h-[calc(100vh-40px)]  flex justify-evenly items-center">
            <x-card class="flex flex-col items-center justify-center p-10">
                <h1>Contacto</h1>
                <form class="flex flex-col space-y-4" action="">
                    <x-input 
                        placeholder="Name"
                        id="name"
                        name="name"
                    />
                    <x-input 
                        type="email"
                        placeholder="Email"
                        id="name"
                        name="name"
                    />
                    <x-input 
                        type="text"
                        placeholder="Name"
                        id="name"
                        name="name"
                    />
                </form>
            </x-card>
        </div>
    </div>

</x-layout>

<x-footer />