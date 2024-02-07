<!-- Ficha del producto -->
<article class="w-[100%] flex flex-col justify-center items-center">
    <section class="w-[70%] md:w-[95%] h-full bg-white flex flex-col md:flex-row items-center md:items-start">
        <div class="w-[70%] md:w-1/2 md:h-[550px] py-3 px-3 flex">
            <img class="w-full object-contain" src="<?php echo base_url($producto['urlimagen']); ?>" alt="<?php echo $producto['nompro']; ?>" class="w-[100%] h-[100%] object-cover">
        </div>
        <div class="w-[100%] md:w-1/2 py-3 px-3 flex flex-col">
            <div class="w-full flex flex-row items-center flex-wrap gap-2">
                <?php if(strtotime($producto['fecharegistro']) > strtotime('-2 months')): ?>
                    <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-lg">Nuevo</span>
                <?php endif; ?>
                <?php if($producto['preoferpro'] > 0): ?>
                    <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-lg">Oferta</span>
                    
                    <?php if ($producto['preoferpro'] > 0 && $producto['prepro'] > $producto['preoferpro']) {
                        $porcentajeDescuento = (($producto['prepro'] - $producto['preoferpro']) / $producto['prepro']) * 100;?>
                        <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-lg"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                        
                    <?php } ?>

                <?php endif; ?>
                <?php if($producto['cantidad'] == 0): ?>
                    <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-lg">Agotado</span>
                <?php endif; ?>
            </div>
            <div class="w-full mt-3 flex items-center">
                <h4 class="text-lg md:text-3xl font-bold"><?php echo $producto['nompro']; ?></h4>
            </div>
            <div class="w-[90%] mt-3 flex items-center">
                <h4 class="text-lg font-bold flex items-center gap-2">SKU: <p class="font-normal text-gray-700"><?php echo $producto['codpro']; ?></p></h4>
            </div>
            <?php if($producto['preoferpro'] > 0): ?>
                <div class="w-[90%] mt-3 flex items-center gap-5">
                    <h4 class="text-3xl text-orange-400 line-through"><?php echo '$' . number_format($producto['prepro'], 0, ',', '.'); ?></h4>
                    <h4 class="text-3xl font-bold text-orange-500"><?php echo '$' . number_format($producto['preoferpro'], 0, ',', '.'); ?></h4>
                </div>
            <?php else: ?>
                <div class="w-[90%] mt-3 flex items-center">
                    <h4 class="text-3xl font-bold text-orange-500"><?php echo '$' . number_format($producto['prepro'], 0, ',', '.'); ?></h4>
                </div>
            <?php endif; ?>
            <div class="w-[90%] mt-3 flex items-center">
                <h4 class="text-lg font-bold">Descripción</h4>
            </div>
            <div class="w-[90%] mt-3 flex items-center">
                <p class="text-gray-700"><?php echo $producto['despro']; ?></p>
            </div>
        </div>
    </section>
</article>

<!-- Productos relacionados  -->
<?php if(!empty($relacionados)): ?>
    <article class="w-[100%] mt-[80px] flex flex-col justify-center items-center">
        <section class="w-[100%] md:w-[90%] px-5 flex flex-col md:flex-row justify-between items-center gap-2 md:gap-0">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800">Productos relacionados</h3>
            <a href="<?php echo base_url("index.php/categorias/viewCategoria/".$relacionados[0]['idsubcat']); ?>" class="pl-[10px] py-3 md:px-5 md:py-3 md:pl-[27px] text-sm md:text-md rounded-md bg-orange-100 hover:bg-[#fee8cb] text-orange-500 font-semibold flex justify-center items-center transicionColor">
                <span class="hidden md:inline-block">
                    Mas productos
                </span>
                <span class="md:hidden">
                    Productos
                </span>
                <svg width="24" height="24" viewBox="0 0 24 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
            </a>
        </section>
        <section class="w-[90%] px-5 py-5 mt-[20px] flex flex-row justify-center md:justify-between flex-wrap gap-5">
            <?php foreach($relacionados as $relacion): ?>
                <div class="w-[80%] md:w-[240px] px-2 py-2 bg-white rounded-md flex flex-col justify-center items-center">
                    <!-- Etiquetas nuevo, relacionados y agotado -->
                    <div class="w-full flex flex-row items-center flex-wrap gap-2">
                        <?php if(strtotime($relacion['fecharegistro']) > strtotime('-2 months')): ?>
                            <span class="px-2 py-1 rounded-md bg-green-200 text-green-500 font-bold text-sm">Nuevo</span>
                        <?php endif; ?>
                        <?php if($relacion['preoferpro'] > 0): ?>
                            <span class="px-2 py-1 rounded-md bg-blue-200 text-blue-500 font-bold text-sm">Oferta</span>
                            
                            <?php if ($relacion['preoferpro'] > 0 && $relacion['prepro'] > $relacion['preoferpro']) {
                                $porcentajeDescuento = (($relacion['prepro'] - $relacion['preoferpro']) / $relacion['prepro']) * 100;?>
                                <span class="px-2 py-1 rounded-md bg-blue-100 text-blue-500 font-bold text-sm"><?php echo round($porcentajeDescuento, 2) . "%"; ?></span>
                                
                            <?php } ?>

                        <?php endif; ?>
                        <?php if($relacion['cantidad'] == 0): ?>
                            <span class="px-2 py-1 rounded-md bg-red-200 text-red-500 font-bold text-sm">Agotado</span>
                        <?php endif; ?>
                    </div>
                    <!-- Cuerpo de la imagen -->
                    <section class="md:w-[200px] h-[50%] mt-2 flex flex-col justify-center items-center">
                        <a href="<?php echo base_url("index.php/productos/viewProduct/".$relacion['id']); ?>" class="w-full h-full flex justify-center overflow-hidden productosHover">
                            <img class="object-cover" src="<?php echo base_url($relacion['urlimagen']); ?>">
                        </a>
                    </section>
                    <!-- Cuerpo de la información -->
                    <section class="w-full h-[50%] flex flex-col justify-center items-center">
                        <div class="w-full h-[70%] mt-[20px] flex flex-col">
                            <div class="w-full h-[60px]">
                                <h5 class="text-gray-700 font-bold overflow-hidden"><?php echo $relacion['nompro']; ?></h5>
                            </div>
                            <?php if($relacion['preoferpro'] > 0): ?>
                                <div class="w-full flex flex-col justify-between pt-[10px]">
                                    <h6 class="text-gray-600"><?php echo $relacion['nombre_categoria']; ?></h6>
                                    <div class="w-full flex flex-row justify-between items-center">
                                        <h6 class="text-orange-400 line-through">
                                            <?php echo '$' . number_format($relacion['prepro'], 0, ',', '.'); ?>
                                        </h6>
                                        <h6 class="text-orange-500 font-bold">
                                            <?php echo '$' . number_format($relacion['preoferpro'], 0, ',', '.'); ?>
                                        </h6>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="w-full flex flex-col justify-between pt-[10px]">
                                    <h6 class="text-gray-600"><?php echo $relacion['nombre_categoria']; ?></h6>
                                    <div class="w-full flex flex-row justify-between items-center">
                                        <h6 class="text-orange-500 font-bold">
                                            <?php echo '$' . number_format($relacion['prepro'], 0, ',', '.'); ?>
                                        </h6>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if($relacion['agregarCarrito'] > 0): ?>
                            <div class="w-full h-[30%] mt-[20px] mb-[10px] flex justify-center items-center">
                                <button class="btnAddCart w-[190px] h-[40px] bg-orange-500 text-white font-bold text-sm rounded-md flex flex-col justify-center items-center gap-5 overflow-hidden relative">
                                    <span class="absolute top-[10px]">Agregar a carrito</span>
                                    <svg class="absolute top-[50px]" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="w-full h-[30%] mt-[20px] mb-[10px] flex items-center">
                            <h5 class="text-gray-500 text-sm"><?php echo "SKU: ".$relacion['codpro']; ?></h5>
                        </div>
                    </section>
                </div>
            <?php endforeach; ?>
        </section>
    </article>
<?php endif; ?>