<x-layout>
    <x-nav-bar />
    <div class="w-[99vw] h-screen bg-slate-300">
        <div class="text-xl max-w-7xl mx-auto h-[calc(100vh-40px)]  flex justify-evenly items-center">
            <x-card class="flex flex-col items-center">
                <h1>Contacto</h1>
                <form class="flex flex-col" action="">
                    <label for="">Nombre
                        <input type="text">
                    </label>
                    <label for="">Email
                        <input type="text">
                    </label>
                    <label for="">Mensaje
                        <input type="text">
                    </label>
                    <button type="submit">Enviar</button>
                </form>
            </x-card>
        </div>
    </div>

</x-layout>