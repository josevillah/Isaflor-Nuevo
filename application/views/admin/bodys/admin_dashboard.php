<main class="w-[60%] lg:w-[60%] h-dvh border-r-[3px] border-solid border-gray-200">
    <section class="w-full">
        <div class="w-full py-7 px-3">
            <h3 class="text-orange-500 text-lg flex gap-2"><?php echo 'Hola, <p class="font-bold">'.$user.'</p> Bienvenido de nuevo!' ?></h3>
        </div>
        <div class="w-full py-3 px-3">
            <h3 class="text-gray-700 font-bold text-2xl flex gap-1">
                Estadísticas -
                <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 3a1 1 0 0 1 .993 .883l.007 .117v1a2 2 0 0 1 1.995 1.85l.005 .15v3a2 2 0 0 1 -1.85 1.995l-.15 .005v8a1 1 0 0 1 -1.993 .117l-.007 -.117v-8a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-3a2 2 0 0 1 1.85 -1.995l.15 -.005v-1a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor" /><path d="M12 3a1 1 0 0 1 .993 .883l.007 .117v9a2 2 0 0 1 1.995 1.85l.005 .15v3a2 2 0 0 1 -1.85 1.995l-.15 .005a1 1 0 0 1 -1.993 .117l-.007 -.117l-.15 -.005a2 2 0 0 1 -1.844 -1.838l-.006 -.157v-3a2 2 0 0 1 1.85 -1.995l.15 -.005v-9a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor" /><path d="M18 3a1 1 0 0 1 .993 .883l.007 .117a2 2 0 0 1 1.995 1.85l.005 .15v4a2 2 0 0 1 -1.85 1.995l-.15 .005v8a1 1 0 0 1 -1.993 .117l-.007 -.117v-8a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-4a2 2 0 0 1 1.85 -1.995l.15 -.005a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor" /></svg>
            </h3>
        </div>
        <di class="w-full h-[500px] flex flex-col overflow-x-hidden">
            <div class="w-full py-3 px-3 flex gap-5">
                <div class="w-[50%] py-5 px-5 bg-blue-500 rounded-md flex flex-col gap-7">
                    <div class="w-full text-white flex flex-col lg:flex-row justify-left lg:items-center">
                        <div class="w-1/2">
                            <p class="text-xl font-bold">Productos</p>
                        </div>
                        <div class="w-1/2 flex lg:justify-end">
                        <svg width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z" /><path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5" /><path d="M6 19v2" /><path d="M18 19v2" /></svg>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <div class="w-[10px] h-[30px] bg-white"></div>
                        <p class="text-4xl font-bold text-white"><?php echo $cantidades['productos']; ?></p>
                    </div>
                </div>
                <div class="w-[50%] py-5 px-5 bg-yellow-400 rounded-md flex flex-col gap-7">
                    <div class="w-full text-white flex flex-col lg:flex-row justify-left lg:items-center">
                        <div class="w-1/2">
                            <p class="text-xl font-bold">Categorías</p>
                        </div>
                        <div class="w-1/2 flex lg:justify-end">
                            <svg width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <div class="w-[10px] h-[30px] bg-white"></div>
                        <p class="text-4xl font-bold text-white"><?php echo $cantidades['categorias']; ?></p>
                    </div>
                </div>
            </div>
            <div class="w-full py-3 px-3 flex gap-5">
                <div class="w-[50%] py-5 px-5 bg-green-500 rounded-md flex flex-col gap-7">
                    <div class="w-full text-white flex flex-col lg:flex-row justify-left lg:items-center">
                        <div class="w-1/2">
                            <p class="text-xl font-bold">Subcategorias</p>
                        </div>
                        <div class="w-1/2 flex lg:justify-end">
                            <svg width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 5h8" /><path d="M13 9h5" /><path d="M13 15h8" /><path d="M13 19h5" /><path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <div class="w-[10px] h-[30px] bg-white"></div>
                        <p class="text-4xl font-bold text-white"><?php echo $cantidades['subcategorias']; ?></p>
                    </div>
                </div>
                <div class="w-[50%] py-5 px-5 bg-orange-400 rounded-md flex flex-col gap-7">
                    <div class="w-full text-white flex flex-col lg:flex-row justify-left lg:items-center">
                        <div class="w-1/2">
                            <p class="text-xl font-bold">Usuarios</p>
                        </div>
                        <div class="w-1/2 flex lg:justify-end">
                            <svg width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <div class="w-[10px] h-[30px] bg-white"></div>
                        <p class="text-4xl font-bold text-white"><?php echo $cantidades['usuarios']; ?></p>
                    </div>
                </div>
            </div>
        </di>
    </section>
</main>