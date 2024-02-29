<article class="alertsBody hidden w-full h-dvh fixed top-0 left-0 z-50 flex flex-col justify-start items-end gap-5">
    <!-- Alert Success -->
    <div id="alertSuccess" class="alert hidden bg-white min-w-[380px] flex justify-between absolute top-7 right-7 shadow-md rounded-md overflow-hidden">
        <div class="w-[40px] h-auto bg-green-400 flex justify-center items-center text-white">
            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svgs=>
        </div>
        <div class="h-auto py-2 px-2 text-gray-700">
            <p class="text-lg font-bold">Completado</p>
            <p class="message">El registro se completó con éxito!</p>
        </div>
        <div class="closeAlert w-[40px] h-auto flex justify-center items-center hover:text-red-400 cursor-pointer">
            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg=>
        </div>
    </div>
    <!-- Alert warning -->
    <div id="alertWarning" class="alert hidden bg-white min-w-[380px] flex justify-between absolute top-7 right-7 shadow-md rounded-md overflow-hidden">
        <div class="w-[40px] h-auto bg-yellow-400 flex justify-center items-center text-white">
            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4" /><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" /><path d="M12 16h.01" /></svg>
        </div>
        <div class="h-auto py-2 px-2 text-gray-700">
            <p class="text-lg font-bold">Atención</p>
            <p class="message">El producto no puede registrarse sin un código</p>
        </div>
        <div class="closeAlert w-[40px] h-auto flex justify-center items-center hover:text-red-400 cursor-pointer">
            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg=>
        </div>
    </div>
    <!-- Alert Error -->
    <div id="alertError" class="alert hidden bg-white min-w-[380px] flex justify-between absolute top-7 right-7 shadow-md rounded-md overflow-hidden">
        <div class="w-[40px] h-auto bg-red-400 flex justify-center items-center text-white">
            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 11a1 1 0 0 1 1 1a10 10 0 0 1 -5 8.656a1 1 0 0 1 -1.302 -.268l-.064 -.098l-3 -5.19a.995 .995 0 0 1 -.133 -.542l.01 -.11l.023 -.106l.034 -.106l.046 -.1l.056 -.094l.067 -.089a.994 .994 0 0 1 .165 -.155l.098 -.064a2 2 0 0 0 .993 -1.57l.007 -.163a1 1 0 0 1 .883 -.994l.117 -.007h6z" stroke-width="0" fill="currentColor" /><path d="M7 3.344a10 10 0 0 1 10 0a1 1 0 0 1 .418 1.262l-.052 .104l-3 5.19l-.064 .098a.994 .994 0 0 1 -.155 .165l-.089 .067a1 1 0 0 1 -.195 .102l-.105 .034l-.107 .022a1.003 1.003 0 0 1 -.547 -.07l-.104 -.052a2 2 0 0 0 -1.842 -.082l-.158 .082a1 1 0 0 1 -1.302 -.268l-.064 -.098l-3 -5.19a1 1 0 0 1 .366 -1.366z" stroke-width="0" fill="currentColor" /><path d="M9 11a1 1 0 0 1 .993 .884l.007 .117a2 2 0 0 0 .861 1.645l.237 .152a.994 .994 0 0 1 .165 .155l.067 .089l.056 .095l.045 .099c.014 .036 .026 .07 .035 .106l.022 .107l.011 .11a.994 .994 0 0 1 -.08 .437l-.053 .104l-3 5.19a1 1 0 0 1 -1.366 .366a10 10 0 0 1 -5 -8.656a1 1 0 0 1 .883 -.993l.117 -.007h6z" stroke-width="0" fill="currentColor" /></svg>
        </div>
        <div class="h-auto py-2 px-2 text-gray-700">
            <p class="text-lg font-bold">Error</p>
            <p class="message">Problemas con la base de datos</p>
        </div>
        <div class="closeAlert w-[40px] h-auto flex justify-center items-center hover:text-red-400 cursor-pointer">
            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg=>
        </div>
    </div>
    <!-- Alert Info -->
    <div id="alertInfo" class="alert hidden bg-white min-w-[380px] flex justify-between absolute top-7 right-7 shadow-md rounded-md overflow-hidden">
        <div class="w-[40px] h-auto bg-blue-400 flex justify-center items-center text-white">
            <svg width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9h.01" /><path d="M11 12h1v4h1" /><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /></svg>
        </div>
        <div class="h-auto py-2 px-2 text-gray-700">
            <p class="text-lg font-bold">Información</p>
            <p class="message">Para registrar el producto, debe ingresar todos los campos requeridos (*)</p>
        </div>
        <div class="closeAlert w-[40px] h-auto flex justify-center items-center hover:text-red-400 cursor-pointer">
            <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg=>
        </div>
    </div>
</article>