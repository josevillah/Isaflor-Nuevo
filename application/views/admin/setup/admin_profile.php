<article class="lg:w-[30%] h-dvh bg-gray-700">
    <div class="w-full flex flex-col">
        <section class="w-full flex justify-center">
            <div class="w-full h-full px-2 py-2 flex items-center justify-between">
                <section class="w-auto">
                    <button class="flex items-center relative text-white">
                        <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        <span class="w-[10px] h-[10px] bg-orange-500 rounded-full absolute top-0 right-[-5px]"></span>
                    </button>
                </section>
                <section class="w-auto">
                    <div class="w-full">
                        <button class="bg-white hover:bg-gray-200 py-3 px-3 rounded-md flex justify-center items-center gap-2 text-gray-700 hover:text-gray-900">
                            <svg class="hidden lg:block" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                            <div class="flex gap-2">
                                <?php echo $user; ?>
                                <p class="text-orange-500">Administrador</p>
                            </div>
                            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                        </button>
                    </div>
                </section>
            </div>
        </section>
        <section class="w-full flex justify-center mt-7">
            <div class="climateBody w-[80%] h-[0px] hidden py-10 px-7 rounded-md bg-white text-gray-700">
                <section class="w-full flex items-center relative">
                    <div class="w-auto">
                        <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                    </div>
                    <div class="w-[80%] flex">
                        <input class="inputSearch w-[100%] py-[7px] px-5 outline-none rounded-md bg-white text-2xl font-bold text-left" value="Valdivia" type="text">
                    </div>
                    <button class="btnSearch w-[40px] h-[40px] bg-white hover:bg-blue-300 rounded-full flex justify-center items-center absolute top-0 right-0 cursor-pointer outline-none">
                        <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                    </button>
                </section>
                <section class="w-full flex flex-col items-center justify-center">
                    <div class="w-full h-[130px] mt-7 flex justify-center">
                        <img class="imgClimate w-full object-contain">
                    </div>
                    <div class="w-full mt-7 flex flex-col justify-center items-center">
                        <p class="degreeClimate text-4xl font-bold"></p>
                        <p class="typeClimate text-xl font-bold"></p>
                    </div>
                    <div class="w-full mt-7 flex flex-row">
                        <div class="w-1/2 flex justify-start items-center gap-2">
                            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7" /><path d="M11 13v2m0 3v2m4 -5v2m0 3v2" /></svg>
                            <div class="">
                                <p class="humidityClimate text-lg font-bold"></p>
                                <p class="text-md">Humedad</p>
                            </div>
                        </div>
                        <div class="w-1/2 flex justify-end items-center gap-2">
                            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 8h8.5a2.5 2.5 0 1 0 -2.34 -3.24" /><path d="M3 12h15.5a2.5 2.5 0 1 1 -2.34 3.24" /><path d="M4 16h5.5a2.5 2.5 0 1 1 -2.34 3.24" /></svg>
                            <div class="">
                                <p class="windClimate text-lg font-bold"></p>
                                <p class="text-md">Viento</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</article>