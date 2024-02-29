<nav class="hidden md:block w-[10%] lg:w-[20%] h-dvh border-r-[3px] border-solid border-gray-200">
    <section class="hidden lg:block w-full h-[20%] px-5 py-5 flex justify-center items-center">
        <div class="flex">
            <img class="w-[150px] object-contain" src="<?php echo base_url("public/img/setup/Logo-naranja.png"); ?>" alt="">
        </div>
    </section>
    <section class="w-full h-full lg:h-[70%] px-5 py-5 flex justify-center items-center">
        <ul class="linksMenu w-full flex flex-col justify-center items-center">
            <li class="w-full">
                <a href="<?php echo base_url('index.php/ipanel/dashboard'); ?>" class="w-full py-3 text-gray-700 hover:text-orange-500 flex justify-center lg:justify-start items-center gap-3 outline-none" href="">
                    <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 12h6v8h-6z" /><path d="M14 4h6v4h-6z" /></svg>
                    <p class="hidden lg:block">Panel</p> 
                </a>
            </li>
            <li class="w-full">
                <a href="<?php echo base_url('index.php/ipanel/store'); ?>" class="w-full py-3 text-gray-700 hover:text-orange-500 flex justify-center lg:justify-start items-center gap-3 outline-none" href="">
                    <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21v-13l9 -4l9 4v13" /><path d="M13 13h4v8h-10v-6h6" /><path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
                    <p class="hidden lg:block">Bodega</p> 
                </a>
            </li>
            <li class="w-full">
                <a href="<?php echo base_url('index.php/ipanel/config'); ?>" class="w-full py-3 text-gray-700 hover:text-orange-500 flex justify-center lg:justify-start items-center gap-3 outline-none" href="">
                    <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                    <p class="hidden lg:block">Configuración</p> 
                </a>
            </li>
            <li class="w-full">
                <a href="<?php echo base_url('index.php/ipanel/logOut'); ?>" class="w-full py-3 text-gray-700 hover:text-red-500 flex justify-center lg:justify-start items-center gap-3 outline-none" href="">
                    <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                    <p class="hidden lg:block">Salir</p> 
                </a>
            </li>
        </ul>
    </section>
</nav>