<article class="w-full flex flex-col">
    <section class="w-full">
        <section class="w-1/2 px-7 py-7">
            <a class="w-[70%] md:w-[18%] flex" href="<?php echo base_url(); ?>">
                <img class="w-full" src="<?php echo base_url("public/img/setup/Logo-naranja.png"); ?>">
            </a>
        </section>
    </section>
    
    <section class="w-full mt-12 flex justify-center items-center">
        <div class="w-[100%] md:w-[50%] flex justify-center">
            <section class="bg-white py-10 px-[60px] rounded-md shadow-md flex flex-col items-center">
                <div class="w-[100%]">
                    <h1 class="text-2xl font-bold text-left">Inicia con tu cuenta 👋</h1>
                </div>
                <form id="formLogin" action="#" class="w-[100%] mt-3 flex flex-col items-center gap-2">
                    <div class="w-full flex flex-col gap-1 relative">
                        <label for="username" class="block text-sm text-gray-700 font-bold">Nombre de usuario:</label>
                        <input type="text" id="username" name="username" placeholder="Tu usuario..." class="w-full rounded-md outline-0 px-3 py-1 text-gray-600 border-[2px] border-solid border-gray-300 focus:border-orange-500 hover:border-orange-500 transicionColor">
                        <i class="absolute top-[50%] right-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                        </i>
                    </div>
                    <div class="w-full flex flex-col gap-1 relative">
                        <label for="password" class="block text-sm text-gray-700 font-bold">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="Tu contraseña..." class="w-full rounded-md outline-0 px-3 py-1 text-gray-600 border-[2px] border-solid border-gray-300 focus:border-orange-500 hover:border-orange-500 transicionColor">
                        <i class="absolute top-[50%] right-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" /><path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /></svg>
                        </i>
                    </div>
                    <div class="w-full flex flex-col mt-4">
                        <button class="w-full rounded-md py-2 bg-orange-400 hover:bg-orange-500 hover:border-orange-500 text-white font-bold border-[3px] border-solid border-orange-400">Iniciar sesión</button>
                    </div>
                    <div class="w-full mt-4">
                        <a href="#" class="w-auto text-orange-500 hover:text-orange-700">Restablecer contraseña</a>
                    </div>
                </form>
            </section>
        </div>
    </section>
</article>