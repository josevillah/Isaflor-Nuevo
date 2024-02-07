<!-- Categorías destacadas -->
<article class="w-[100%] mt-[70px] hidden md:flex flex-col justify-center items-center">
    <section class="w-[90%] px-5 flex justify-center md:justify-between">
        <h3 class="text-2xl font-bold text-gray-800">Categorías Destacadas</h3>
    </section>
    <section class="w-[90%] px-5">
        <div class="w-[100%] flex flex-row flex-wrap justify-center md:justify-between gap-[80px]">
            <?php foreach($categoriasDes as $catDes): ?>
                <a href="<?php echo base_url("index.php/categorias/viewCategoria/".$catDes['id_categoria']).'?page=1'; ?>" class="mt-[100px] md:mt-[50px] flex flex-col justify-center items-center flex-wrap categoriasHover">
                    <div class="w-[160px] h-[160px] rounded-full bg-white py-2 px-2 cursor-pointer overflow-hidden">
                        <img class="w-[100%] h-[100%] object-cover" src="<?php echo base_url($catDes['url_imagen_categoria']); ?>">
                    </div>
                    <div class="w-[100%] mt-[10px] flex flex-col text-center">
                        <h5 class="font-bold text-gray-700"><?php echo $catDes['nombre_categoria']; ?></h5>
                        <h6 class="text-gray-400"><?php echo $catDes['cantidadProductos'],' Productos' ?></h6>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</article>

<!-- Ofertas -->
<article class="w-[100%] mt-[120px] flex flex-col justify-center items-center">
    <section class="w-[100%] md:w-[90%] px-5 flex justify-between items-center">
        <h3 class="text-lg md:text-2xl font-bold text-gray-800">Nuestras ofertas</h3>
        <a href="<?php echo base_url("index.php/productos/viewOferts/?page=1"); ?>" class="pl-[10px] py-3 md:px-5 md:py-3 md:pl-[27px] text-sm md:text-md rounded-md bg-orange-100 hover:bg-[#fee8cb] text-orange-500 font-semibold flex justify-center items-center transicionColor">
            <span class="hidden md:inline-block">
                Mas productos
            </span>
            <span class="md:hidden">
                Productos
            </span>
            <svg width="24" height="24" viewBox="0 0 24 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
        </a>
    </section>
    <section class="w-[100%] px-5 py-5 mt-[20px] flex flex-row justify-center md:justify-between flex-wrap gap-5">
        <?php foreach($ofertas as $oferta): ?>
            <div class="md:w-[240px] px-2 py-2 bg-white rounded-md flex flex-col justify-center items-center">
                <!-- Etiquetas nuevo, oferta y agotado -->
                <div class="w-full flex flex-row items-center flex-wrap gap-2">
                    <?php if(strtotime($oferta['fecharegistro']) > strtotime('-2 months')): ?>
                        <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-sm">Nuevo</span>
                    <?php endif; ?>
                    <?php if($oferta['preoferpro'] > 0): ?>
                        <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-sm">Oferta</span>
                        
                        <?php if ($oferta['preoferpro'] > 0 && $oferta['prepro'] > $oferta['preoferpro']) {
                            $porcentajeDescuento = (($oferta['prepro'] - $oferta['preoferpro']) / $oferta['prepro']) * 100;?>
                            <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-sm"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                            
                        <?php } ?>

                    <?php endif; ?>
                    <?php if($oferta['cantidad'] == 0): ?>
                        <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-sm">Agotado</span>
                    <?php endif; ?>
                </div>
                <!-- Cuerpo de la imagen -->
                <section class="md:w-[200px] h-[50%] mt-2 flex flex-col justify-center items-center">
                    <a href="<?php echo base_url("index.php/productos/viewProduct/".$oferta['id']); ?>" class="w-full h-full flex justify-center overflow-hidden productosHover">
                        <img class="object-cover" src="<?php echo base_url($oferta['urlimagen']); ?>">
                    </a>
                </section>
                <!-- Cuerpo de la información -->
                <section class="w-full h-[50%] flex flex-col justify-center items-center">
                    <div class="w-full h-[70%] mt-[20px] flex flex-col">
                        <div class="w-full h-[60px]">
                            <h5 class="text-gray-700 font-bold overflow-hidden"><?php echo $oferta['nompro']; ?></h5>
                        </div>
                        <div class="w-full flex flex-col justify-between pt-[10px]">
                            <h6 class="text-gray-600"><?php echo $oferta['nombre_categoria']; ?></h6>
                            <div class="w-full flex flex-row justify-between items-center">
                                <h6 class="text-orange-400 line-through">
                                    <?php echo '$' . number_format($oferta['prepro'], 0, ',', '.'); ?>
                                </h6>
                                <h6 class="text-orange-500 font-bold">
                                <?php echo '$' . number_format($oferta['preoferpro'], 0, ',', '.'); ?>
                                </h6>
                            </div>
                        </div>

                    </div>
                    <?php if($oferta['agregarCarrito'] > 0): ?>
                        <div class="w-full h-[30%] mt-[20px] mb-[10px] flex justify-center items-center">
                            <button class="btnAddCart w-[190px] h-[40px] bg-orange-500 text-white font-bold text-sm rounded-md flex flex-col justify-center items-center gap-5 overflow-hidden relative">
                                <span class="absolute top-[10px]">Agregar a carrito</span>
                                <svg class="absolute top-[50px]" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="w-full h-[30%] mt-[20px] mb-[10px] flex items-center">
                        <h5 class="text-gray-500 text-sm"><?php echo "SKU: ".$oferta['codpro']; ?></h5>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>
    </section>
</article>

<!-- Categorías aleatorias 1 -->
<article class="w-[100%] mt-[120px] flex flex-col justify-center items-center">
    <section class="w-[100%] md:w-[90%] px-5 flex justify-between items-center">
        <h3 class="text-lg md:text-2xl font-bold text-gray-800"><?php echo $aleatoriosUno[0]['nombre_categoria']; ?></h3>
        <a href="<?php echo base_url("index.php/categorias/viewCategoria/".$aleatoriosUno[0]['id_categoria']).'?page=1'; ?>" class="pl-[10px] py-3 md:px-5 md:py-3 md:pl-[27px] text-sm md:text-md rounded-md bg-orange-100 hover:bg-[#fee8cb] text-orange-500 font-semibold flex justify-center items-center transicionColor">
            <span class="hidden md:inline-block">
                Mas productos
            </span>
            <span class="md:hidden">
                Productos
            </span>
            <svg width="24" height="24" viewBox="0 0 24 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
        </a>
    </section>
    <section class="w-[100%] px-5 py-5 mt-[20px] flex flex-row justify-center md:justify-between flex-wrap gap-5">
        <?php foreach($aleatoriosUno as $item1): ?>
            <div class="md:w-[240px] px-2 bg-white rounded-md flex flex-col justify-center items-center">
                <!-- Etiquetas nuevo, oferta y agotado -->
                <div class="w-full py-2 h-[45px] flex flex-row items-center flex-wrap gap-2">
                    <?php if(strtotime($item1['fecha']) > strtotime('-2 months')): ?>
                        <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-sm">Nuevo</span>
                    <?php endif; ?>
                    <?php if($item1['precio_oferta'] > 0): ?>
                        <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-sm">Oferta</span>
                        
                        <?php if ($item1['precio_oferta'] > 0 && $item1['precio_producto'] > $item1['precio_oferta']) {
                            $porcentajeDescuento = (($item1['precio_producto'] - $item1['precio_oferta']) / $item1['precio_producto']) * 100;?>
                            <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-sm"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                            
                        <?php } ?>

                    <?php endif; ?>
                    <?php if($item1['cantidad'] == 0): ?>
                        <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-sm">Agotado</span>
                    <?php endif; ?>
                </div>
                <section class="md:w-[200px] h-[50%] flex flex-col justify-center items-center">
                    <a href="<?php echo base_url("index.php/productos/viewProduct/".$item1['id_producto']); ?>" class="w-full h-full flex justify-center overflow-hidden productosHover">
                        <img class="object-cover" src="<?php echo base_url($item1['url_imagen_producto']); ?>">
                    </a>
                </section>
                <section class="w-full h-[50%] flex flex-col justify-center items-center">
                    <div class="w-full h-[70%] mt-[20px] flex flex-col">
                        <div class="w-full h-[60px]">
                            <h5 class="text-gray-700 font-bold overflow-hidden"><?php echo $item1['nombre_producto']; ?></h5>
                        </div>
                        <div class="w-full flex flex-col justify-between pt-[10px]">
                            <h6 class="text-gray-600"><?php echo $item1['nombre_categoria']; ?></h6>
                            <div class="w-full flex flex-row justify-between items-center">
                                <h6 class="text-orange-500 font-bold">
                                    <?php echo '$' . number_format($item1['precio_producto'], 0, ',', '.'); ?>
                                </h6>
                                <h6 class="text-gray-600 flex flex-row gap-1">
                                    <svg class="text-orange-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    En stock
                                </h6>
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
                        <h5 class="text-gray-500 text-sm"><?php echo "SKU: ".$item1['codigo_producto']; ?></h5>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>
    </section>
</article>

<!-- Marcas -->
<article class="w-full mt-[100px] px-5 flex flex-row justify-center items-center">
    <section class="w-[100%] px-2 bg-white rounded-md flex items-center overflow-hidden">
        <div class="cuerpoMarca flex gap-3 py-5 items-center justify-center animatesm animate-marquee">
            <a  target="_blank" href="https://www.amesti.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img class="object-cover" src="<?php echo base_url("public/img/marcas/amesti.png"); ?>">
            </a>
            <a target="_blank"  href="https://www.oster.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img class="object-cover" src="<?php echo base_url("public/img/marcas/oster.png"); ?>">
            </a>
            <a target="_blank"  href="https://www.doral.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img class="object-cover" src="<?php echo base_url("public/img/marcas/doral.png"); ?>">
            </a>
            <a target="_blank"  href="https://eglo.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img class="object-cover" src="<?php echo base_url("public/img/marcas/eglo.png"); ?>">
            </a>
            <a target="_blank"  href="https://tiendamsa.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img class="" src="<?php echo base_url("public/img/marcas/msa.png"); ?>">
            </a>
            <a target="_blank"  href="https://liberochile.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img src="<?php echo base_url("public/img/marcas/libero.png"); ?>">
            </a>
            <a target="_blank"  href="https://www.alcazar.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img src="<?php echo base_url("public/img/marcas/alcazar.png"); ?>">
            </a>
            <a target="_blank"  href="https://www.tiendamademsa.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img src="<?php echo base_url("public/img/marcas/mademsa.png"); ?>">
            </a>
            <a target="_blank"  href="https://colchonesmantahue.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img src="<?php echo base_url("public/img/marcas/mantahue.png"); ?>">
            </a>
            <a target="_blank"  href="https://ecoindef.cl/" class="w-[300px] md:w-[164px] xl:w-[255px] max-h-[65px] flex">
                <img src="<?php echo base_url("public/img/marcas/ecoindef.png"); ?>">
            </a>
        </div>
    </section>
</article>

<!-- Categorías aleatorias 2 -->
<article class="w-[100%] mt-[120px] flex flex-col justify-center items-center">
    <section class="w-[100%] md:w-[90%] px-5 flex justify-between items-center">
        <h3 class="text-lg md:text-2xl font-bold text-gray-800"><?php echo $aleatoriosDos[0]['nombre_categoria']; ?></h3>
        <a href="<?php echo base_url("index.php/categorias/viewCategoria/".$aleatoriosDos[0]['id_categoria']).'?page=1'; ?>" class="pl-[10px] py-3 md:px-5 md:py-3 md:pl-[27px] text-sm md:text-md rounded-md bg-orange-100 hover:bg-[#fee8cb] text-orange-500 font-semibold flex justify-center items-center transicionColor">
            <span class="hidden md:inline-block">
                Mas productos
            </span>
            <span class="md:hidden">
                Productos
            </span>
            <svg width="24" height="24" viewBox="0 0 24 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
        </a>
    </section>
    <section class="w-[100%] px-5 py-5 mt-[20px] flex flex-row justify-center md:justify-between flex-wrap gap-5">
        <?php foreach($aleatoriosDos as $item2): ?>
            <div class="md:w-[240px] px-2 py-2 bg-white rounded-md flex flex-col justify-center items-center">
                <!-- Etiquetas nuevo, oferta y agotado -->
                <div class="w-full py-2 h-[45px] flex flex-row items-center flex-wrap gap-2">
                    <?php if(strtotime($item2['fecha']) > strtotime('-2 months')): ?>
                        <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-sm">Nuevo</span>
                    <?php endif; ?>
                    <?php if($item2['precio_oferta'] > 0): ?>
                        <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-sm">Oferta</span>
                        
                        <?php if ($item2['precio_oferta'] > 0 && $item2['precio_producto'] > $item2['precio_oferta']) {
                            $porcentajeDescuento = (($item2['precio_producto'] - $item2['precio_oferta']) / $item2['precio_producto']) * 100;?>
                            <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-sm"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                            
                        <?php } ?>

                    <?php endif; ?>
                    <?php if($item2['cantidad'] == 0): ?>
                        <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-sm">Agotado</span>
                    <?php endif; ?>
                </div>
                <section class="md:w-[200px] h-[50%] flex flex-col justify-center items-center">
                    <a href="<?php echo base_url("index.php/productos/viewProduct/".$item2['id_producto']); ?>" class="w-full h-full flex justify-center overflow-hidden productosHover">
                        <img class="object-cover" src="<?php echo base_url($item2['url_imagen_producto']); ?>">
                    </a>
                </section>
                <section class="w-full h-[50%] flex flex-col justify-center items-center">
                    <div class="w-full h-[70%] mt-[20px] flex flex-col">
                        <div class="w-full h-[60px]">
                            <h5 class="text-gray-700 font-bold overflow-hidden"><?php echo $item2['nombre_producto']; ?></h5>
                        </div>
                        <div class="w-full flex flex-col justify-between pt-[10px]">
                            <h6 class="text-gray-600"><?php echo $item2['nombre_categoria']; ?></h6>
                            <div class="w-full flex flex-row justify-between items-center">
                                <h6 class="text-orange-500 font-bold">
                                    <?php echo '$' . number_format($item2['precio_producto'], 0, ',', '.'); ?>
                                </h6>
                                <h6 class="text-gray-600 flex flex-row gap-1">
                                    <svg class="text-orange-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                    En stock
                                </h6>
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
                        <h5 class="text-gray-500 text-sm"><?php echo "SKU: ".$item2['codigo_producto']; ?></h5>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>
    </section>
</article>