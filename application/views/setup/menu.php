<!-- Panel superior -->
<header class="w-[100%] max-w-[1550px] bg-[#FAFAFA] flex flex-col fixed top-0 left-0 z-20">
    <div class="w-[100%] py-4 md:py-[10px] shadow-md flex flex-col justify-center items-center gap-2">
        <section class="w-[100%] hidden md:flex flex-row overflow-hidden">
            <!-- Logo empresa -->
            <a href="<?php echo base_url(); ?>" class="w-[70%] md:w-[20%]">
                <div class="w-[70%] md:w-[100%] md:h-[100%] flex object-cover justify-center items-center">
                    <img class="w-[100px] md:w-[150px]" src="<?php echo base_url('/public/img/setup/Logo-naranja.png'); ?>">
                </div>
            </a>
            <!-- Formulario con barra de búsqueda -->
            <section class="w-[60%] md:w-[40%] lg:w-[50%] hidden md:inline-block relative">
                <div class="w-[100%] h-[100%]">
                    <form action="#" class="w-[100%] h-[100%]">
                        <div class="w-[100%] h-[100%] flex flex-row justify-center items-center gap-5">
                            <button class="btnCategories hidden text-orange-300 hover:text-orange-500 lg:flex flex-row justify-center items-center py-2 rounded-sm outline-0 cursor-pointer transicionColor">
                                <svg width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                                <h6 class="text-lg">Categorías</h6>
                            </button>
                            <div class="relative w-[100%] lg:w-[70%]">
                                <input class="searchInput w-[100%] rounded-sm outline-0 px-5 py-2 text-gray-600 border-[3px] border-solid border-orange-300 focus:border-orange-500 hover:border-orange-500 transicionColor" type="text" name="search" placeholder="Buscar...">
                                <svg class="absolute top-[8px] right-[10px] text-gray-600" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Buscador -->
                <nav class="searchBody hidden w-[55%] max-h-[400px] max-w-[800px] px-3 py-3 rounded-md bg-white fixed top-[83px] z-20 overflow-x-hidden">
                    <section class="searchBodySection w-[100%] flex flex-col flex-wrap justify-between">
                    </section>
                </nav>
            </section>
            <!-- Navegador de links -->
            <nav class="hidden md:inline-block md:w-[40%] lg:w-[30%]">
                <ul class="w-[100%] h-[100%] flex flex-row justify-center items-center gap-5">
                    <li><a href="<?php echo base_url(); ?>" class="w-[100%] h-[100%] hover:text-orange-500 text-orange-300 font-bold text-lg py-2 px-5 transicionColor border-r-[3px] border-gray-300">Inicio</a></li>
                    <li><a href="#" class="w-[100%] h-[100%] hover:text-orange-500 text-orange-300 font-bold text-lg py-2 px-5 transicionColor border-r-[3px] border-gray-300">Nosotros</a></li>
                    <!-- <li>
                        <a class="btnCart relative w-[100%] h-[100%] hover:text-orange-500 text-orange-300 font-bold px-5 transicionColor cursor-pointer">
                            <svg width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                            <div class="min-w-[23px] min-h-[23px] max-w-[30px] max-h-[30px] rounded-full bg-white absolute top-[10px] right-[-32px] flex justify-center items-center hidden">
                                <p class="text-black">0</p>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </nav>
        </section>
        <div class="w-full flex md:hidden">
            <!-- Barra de búsqueda del dispositivo móvil -->
            <nav class="w-[80%] md:hidden">
                <form action="#" class="w-[100%] h-[100%] flex justify-center items-center">
                    <div class="w-[90%] h-[100%] flex flex-row justify-center items-center">
                        <div class="relative w-[100%]">
                            <input class="searchInputMovil w-[100%] rounded-sm outline-0 px-5 py-2 text-gray-600 border-[3px] border-solid border-orange-300 focus:border-orange-500 transicionColor" type="text" name="search" placeholder="Buscar...">
                            <svg class="absolute top-[7px] md:top-[8px] right-[10px] text-gray-600" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                        </div>
                    </div>
                </form>
            </nav>
            <!-- Botón Movil -->
            <section class="w-[20%] md:hidden flex justify-center items-center">
                <button class="text-orange-300" id="btnOpenMenu">
                    <svg width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                </button>
                <button class="text-orange-300 hidden absolute right-3" id="btnCloseMenu">
                    <svg width="60" height="60" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10l4 4m0 -4l-4 4" /><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /></svg>
                </button>
            </section>
        </div>

        <!-- Buscador móvil -->
        <nav class="searchBodyMovil hidden w-full max-h-[600px] max-w-[800px] px-3 py-3 rounded-md bg-white fixed top-[81px] z-20 overflow-x-hidden"></nav>
    </div>
</header>

<!-- Panel del carrito de ventas -->
<section class="cart flex flex-col space-between w-[100%] md:w-[60%] lg:w-[30%] h-dvh bg-white shadow-[0_1px_20px_2px_rgba(0,0,0,0.3)] fixed top-0 left-[-120%] md:left-[-80%] z-30 transicionColor">
    <!-- Header del carrito -->
    <div class="w-[100%] flex justify-between items-center bg-gray-800">
        <!-- Imagen -->
        <div class="w-[80%] flex justify-center items-center">
            <img class="w-[120px] object-cover py-4" src="<?php echo base_url("public/img/setup/Logo-blanco.png"); ?>">
        </div>
        <!-- Botón de cerrar -->
        <div class="btnCloseCart w-[20%] flex justify-center items-center">
            <svg class="text-white cursor-pointer hover:text-orange-500" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
        </div>
    </div>
    <!-- Cuerpo del carrito -->
    <div class="w-[100%] overflow-y-scroll">
        <!-- Cuerpo del carrito -->
        <ul class="w-[100%] text-md font-bold text-gray-500 py-3 px-3">
            <!-- Producto en el carrito -->
            <li class="w-[100%] max-h-[150px] flex flex-col justify-center items-center overflow-hidden">
                <div class="w-[100%] py-[10px] px-5 hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex flex-row items-center relative">
                    <!-- Imagen del producto -->
                    <div class="w-[30%] flex justify-center items-center">
                        <img class="w-[80px] object-cover flex" src="<?php echo base_url("public/img/productos/340.webp"); ?>">
                    </div>
                    <!-- Nombre y precio -->
                    <div class="w-[40%] flex flex-col">
                        <p class="text-sm">Arrimo Durmientes</p>
                        <p class="text-sm text-orange-500">2.000.000 clp</p>
                    </div>
                    <!-- Botones de acción, sumar y restar -->
                    <div class="producto w-[20%] h-[100%] flex flex-col gap-2">
                        <div class="w-[100%] flex justify-center items-center">
                            <button onclick="sumar(event)" class="w-[30px] h-[30px] bg-gray-300 hover:bg-orange-300 hover:text-white rounded-full flex justify-center items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svgxmlns=>
                            </button>
                        </div>
                        <div class="w-[100%] flex justify-center items-center">
                            <input class="cantPro  w-[50px] px-4 py-2" type="text" name="" value="1">
                        </div>
                        <div class="w-[100%] flex justify-center items-center">
                            <button onclick="restar(event)" class="w-[30px] h-[30px] bg-gray-300 hover:bg-orange-300 hover:text-white rounded-full flex justify-center items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                            </button>
                        </div>
                    </div>
                    <!-- Botón para eliminar item del carrito -->
                    <div class="w-[10%] flex">
                        <button onclick="eliminar(event)" class="w-[40px] h-[40px] bg-gray-300 hover:bg-red-400 hover:text-white rounded-full flex justify-center items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                        </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Botón de completar compra -->
    <div class="w-[100%] mt-auto py-5 flex justify-center items-center">
        <button class="py-2 px-5 bg-orange-500 hover:bg-orange-400 text-white font-bold">Completar</button>
    </div>
</section>

<!-- Menu categorías -->
<navbar class="menu flex flex-col w-[100%] md:w-[40%] xl:w-[22%] h-dvh bg-white shadow-[0_1px_20px_2px_rgba(0,0,0,0.3)] fixed top-0 left-[-120%] z-30 transicionColor">
    <div class="w-[100%] flex justify-around items-center bg-gray-800">
        <img class="w-[120px] py-4" src="<?php echo base_url("public/img/setup/Logo-blanco.png"); ?>">
        <svg class="closeMenubtn text-white cursor-pointer hover:text-orange-500" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
    </div>
    <ul class="w-[100%] text-md font-bold text-gray-500 py-3 px-3 overflow-y-scroll overflow-x-hidden">
        <?php foreach($categorias as $categoria): ?>
            <li class="w-[100%] flex flex-col">
                <!-- Botón del dropdown -->
                <a class="listElements w-[100%] h-[100%] py-[20px] px-5 hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex justify-between items-center relative">
                    <?php echo $categoria['nombre']; ?>
                    <svg class="listArrow transicionColor" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                    <input data-id="<?php echo $categoria['id']; ?>" type="checkbox" class="absolute w-[100%] h-[100%] opacity-0 cursor-pointer">
                </a>
                <!-- Contenido del dropdown -->
                <ul class="h-[0px] overflow-hidden bg-gray-200 text-sm flex flex-col transicionColor"></ul>
            </li>
        <?php endforeach; ?>
    </ul>
</navbar>

<!-- Menu móvil -->
<navbar class="menuMovil flex flex-col w-[100%] h-dvh bg-white shadow-[0_1px_20px_2px_rgba(0,0,0,0.3)] fixed top-0 left-[-120%] z-20 transicionColor">
     <!-- Header del carrito -->
     <div class="w-[100%] flex justify-between items-center bg-gray-800">
        <!-- Imagen -->
        <div class="w-[80%] flex justify-center items-center">
            <img class="w-[105px] object-cover py-5" src="<?php echo base_url("public/img/setup/Logo-blanco.png"); ?>">
        </div>
        <!-- Botón de cerrar -->
        <div class="btnMovilCloseMenu w-[20%] flex justify-center items-center">
            <svg class="text-white cursor-pointer hover:text-orange-500" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
        </div>
    </div>
    <ul class="w-[100%] text-md font-bold text-gray-500 py-3 px-3 overflow-y-scroll">
        <li class="w-[100%] flex flex-col">
            <!-- Botón del dropdown -->
            <a href="<?php echo base_url(""); ?>" class="w-[100%] h-[100%] py-[20px] px-5 text-md hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex gap-2 items-center relative">
            <svg width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                Inicio
            </a>
            <a href="#" class="w-[100%] h-[100%] py-[20px] px-5 text-md hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex gap-2 items-center relative">
                <svg width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21h18" /><path d="M19 21v-4" /><path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z" /><path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14" /><path d="M9 17v4" /><path d="M8 13h2" /><path d="M8 9h2" /></svg>
                Nosotros
            </a>
            <button class="btnMovilOpenCategories w-[100%] h-[100%] py-[20px] px-5 text-md hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex gap-2 items-center relative">
                <svg width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                Categorías
            </button>
            <!-- <button class="btnMovilOpenCart w-[100%] h-[100%] py-[20px] px-5 text-md hover:bg-gray-100 hover:text-gray-900 border-l-[7px] border-solid border-white hover:border-orange-500 flex gap-2 items-center relative">
                <svg width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                Carrito
            </button> -->
            <!-- Contenido del dropdown -->
            <ul class="h-[0px] overflow-hidden bg-gray-200 text-sm flex flex-col transicionColor"></ul>
        </li>
    </ul>
</navbar>

<div class="closeSearchMovil hidden w-[40px] h-[40px] rounded-md bg-white flex justify-center items-center absolute top-[710px] left-[45%] z-40">
    <svg width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
</div>