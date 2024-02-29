<main class="w-[60%] lg:w-[60%] h-dvh border-r-[3px] border-solid border-gray-200">
    <section class="w-full">
        <div class="w-full py-7 px-3">
            <h3 class="text-orange-500 text-lg flex gap-2"><?php echo 'Hola, <p class="font-bold">'.$user.'</p> Bienvenido de nuevo!' ?></h3>
        </div>
        <div class="w-full py-3 px-3">
            <h3 class="text-gray-700 font-bold text-2xl flex gap-1">
                Bodega -
                <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21v-13l9 -4l9 4v13" /><path d="M13 13h4v8h-10v-6h6" /><path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
            </h3>
        </div>

        <div class="w-full py-3 px-3 flex flex-wrap gap-3 font-bold">
            <button class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-md text-white flex items-center gap-2 outline-none">
                Categoría
                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
            </button>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-md text-white flex items-center gap-2 outline-none">
                Subcategorias
                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
            </button>
            <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white flex items-center gap-2 outline-none">
                Producto
                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z" /><path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5" /><path d="M6 19v2" /><path d="M18 19v2" /></svg>
            </button>
        </div>

        <!-- Select -->
        <div class="w-full py-3 px-3 bg-white flex justify-center items-center">
            <div class="h-[43px] flex items-center gap-2 px-1 rounded-md text-gray-700 border-2 border-gray-500 ">
                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                <input type="text" name="" id="" class="outline-none w-[300px]" placeholder="Buscar..">
            </div>
            <div class="w-auto flex items-center gap-2 py-1 px-3 rounded-md">
                <div class="dropdown relative">
                    <input type="text" class="textBox px-3 py-2 border-2 border-gray-500 w-[200px] rounded-md outline-none cursor-pointer text-gray-700" placeholder="Tipo" readonly>
                    <svg class="selectArrow absolute top-2 right-2 text-gray-700 transition-all delay-300 duration-75 ease-in-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                    <div class="options hidden bg-gray-700 absolute top-12 z-20 overflow-hidden transition-all duration-500 ease-in-out">
                        <button class="flex gap-2 py-2 px-3 hover:bg-orange-400 hover:text-white w-[200px] cursor-pointer text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 11a2 2 0 0 1 2 2v1h12v-1a2 2 0 1 1 4 0v5a1 1 0 0 1 -1 1h-18a1 1 0 0 1 -1 -1v-5a2 2 0 0 1 2 -2z" /><path d="M4 11v-3a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v3" /><path d="M12 5v9" /></svg>
                            Productos
                        </button>
                        <button class="flex gap-2 py-2 px-3 hover:bg-orange-400 hover:text-white w-[200px] cursor-pointer text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                            Categorías
                        </button>
                        <button class="flex gap-2 py-2 px-3 hover:bg-orange-400 hover:text-white w-[200px] cursor-pointer text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                            Subcategorias
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin select -->

        <div class="w-full py-3 px-3 bg-white flex justify-end items-center">
            <div class="w-auto flex">
                <button class="px-3 py-1 bg-gray-800 hover:bg-orange-400 text-white">Anterior</button>
                <button class="px-3 py-1 bg-gray-700 hover:bg-orange-400 text-white">1</button>
                <button class="px-3 py-1 bg-gray-800 hover:bg-orange-400 text-white">Siguiente</button>
            </div>
        </div>

    </section>
</main>