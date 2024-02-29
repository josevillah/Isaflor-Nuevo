<!-- Categorías aleatorias 1 -->
<article class="w-[100%] flex flex-col justify-center items-center">
    <section class="w-[100%] md:w-[90%] px-5 flex justify-between items-center">
        <h3 class="text-lg md:text-2xl font-bold text-gray-800"><?php echo $productos[0]['nombre']; ?></h3>
    </section>
    <section class="w-[100%] px-5 py-5 mt-[20px] flex flex-row justify-center md:justify-center flex-wrap gap-7">
        <?php foreach($productos as $item1): ?>
            <div class="w-full md:w-[240px] px-2 bg-white rounded-md flex flex-col justify-center items-center">
                <!-- Etiquetas nuevo, oferta y agotado -->
                <div class="w-full py-3 min-h-[45px] flex flex-row items-center flex-wrap gap-2">
                    <?php if(strtotime($item1['fecharegistro']) > strtotime('-2 months')): ?>
                        <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-sm">Nuevo</span>
                    <?php endif; ?>
                    <?php if($item1['preoferpro'] > 0): ?>
                        <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-sm">Oferta</span>
                        
                        <?php if ($item1['preoferpro'] > 0 && $item1['prepro'] > $item1['preoferpro']) {
                            $porcentajeDescuento = (($item1['prepro'] - $item1['preoferpro']) / $item1['prepro']) * 100;?>
                            <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-sm"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                            
                        <?php } ?>

                    <?php endif; ?>
                    <?php if($item1['cantidad'] == 0): ?>
                        <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-sm">Agotado</span>
                    <?php endif; ?>
                </div>
                <section class="md:w-[200px] h-[50%] flex flex-col justify-center items-center">
                    <a href="<?php echo base_url("index.php/productos/viewProduct/".$item1['id']); ?>" class="w-full h-full flex justify-center overflow-hidden productosHover">
                        <img class="object-cover" src="<?php echo base_url($item1['urlimagen']); ?>">
                    </a>
                </section>
                <section class="w-full h-[50%] flex flex-col justify-center items-center">
                    <div class="w-full h-[70%] mt-[20px] flex flex-col">
                        <div class="w-full h-[60px]">
                            <h5 class="text-gray-700 font-bold overflow-hidden"><?php echo $item1['nompro']; ?></h5>
                        </div>
                        <div class="w-full flex flex-col justify-between pt-[10px]">
                            <h6 class="text-gray-600"><?php echo $item1['nombre']; ?></h6>
                            <div class="w-full flex flex-row justify-between items-center">
                                <?php if($item1['preoferpro'] > 0): ?>
                                    <div class="w-full flex flex-row justify-between items-center">
                                        <h6 class="text-orange-400 line-through">
                                            <?php echo '$' . number_format($item1['prepro'], 0, ',', '.'); ?>
                                        </h6>
                                        <h6 class="text-orange-500 font-bold">
                                            <?php echo '$' . number_format($item1['preoferpro'], 0, ',', '.'); ?>
                                        </h6>
                                    </div>
                                <?php else: ?>
                                    <div class="w-full flex flex-row justify-between items-center">
                                        <h6 class="text-orange-500 font-bold">
                                            <?php echo '$' . number_format($item1['prepro'], 0, ',', '.'); ?>
                                        </h6>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <?php if($item1['agregarCarrito'] > 0): ?>
                        <div class="w-full h-[30%] mt-[20px] mb-[10px] flex justify-center items-center">
                            <button class="btnAddCart w-[190px] h-[40px] bg-orange-500 text-white font-bold text-sm rounded-md flex flex-col justify-center items-center gap-5 overflow-hidden relative">
                                <span class="absolute top-[10px]">Agregar a carrito</span>
                                <svg class="absolute top-[50px]" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="w-full h-[30%] mt-[20px] mb-[10px] flex items-center">
                        <h5 class="text-gray-500 text-sm"><?php echo "SKU: ".$item1['codpro']; ?></h5>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>
    </section>
</article>

<?php $page = intval($_GET['page']); ?>

<!-- Pagination -->
<article class="w-full mt-5 flex justify-center items-center">
    <section class="w-full flex justify-center items-center">
        <ul class="paginacion flex flex-wrap">
            <!-- Anterior -->
            <?php if(isset($page) && is_numeric($page) && intval($page) <= 1): ?>
                <li class="pageItem flex justify-center items-center">
                    <a class="w-full h-full py-3 px-5 text-white font-bold bg-gray-400 cursor-default">Anterior</a>
                </li>
            <?php elseif(isset($page) && is_numeric($page)): ?>
                <li class="pageItem flex justify-center items-center">
                    <a href="<?php echo "?page=".($page - 1); ?>" class="w-full h-full py-3 px-5 text-white font-bold bg-gray-800 hover:bg-orange-500 cursor-pointer">Anterior</a>
                </li>
            <?php endif; ?>

            <!-- Numero de pagina -->
            <?php for($i=0; $i<$numero_paginas; $i++): ?>
                <li class="pageItem hidden md:flex justify-center items-center">
                    <a href="?page=<?php echo $i+1;  ?>" class="w-full h-full py-3 px-5 text-white font-bold <?php echo intval($page) == $i+1 ? 'bg-orange-400' : 'bg-gray-800' ?> hover:bg-orange-500 cursor-pointer"><?php echo $i+1; ?></a>
                </li>
            <?php endfor; ?>
            
            <!-- Siguiente -->
            <?php if(isset($page) && is_numeric($page) && intval($page) < $numero_paginas): ?>
                <li class="pageItem flex justify-center items-center">
                    <a href="<?php echo "?page=".($page + 1); ?>" class="w-full h-full py-3 px-5 text-white font-bold bg-gray-800 hover:bg-orange-500 cursor-pointer">Siguiente</a>
                </li>
            <?php elseif(isset($page) && is_numeric($page)): ?>
                <li class="pageItem flex justify-center items-center">
                    <a class="w-full h-full py-3 px-5 text-white font-bold bg-gray-400 cursor-default">Siguiente</a>
                </li>
            <?php endif; ?>
        </ul>
    </section>
</article>