// Manejando la url dependiendo del entorno
const url = window.location.origin === 'http://localhost' ? `${window.location.origin}/proyectos/isaflor.cl` : window.location.origin;

// Menu móvil
const menuMovil = document.querySelector('.menuMovil');
const btnOpenMenu = document.querySelector('#btnOpenMenu');
const btnCloseMenu = document.querySelector('#btnCloseMenu');
const btnMovilOpenCategories = document.querySelector('.btnMovilOpenCategories');
const btnMovilCloseMenu = document.querySelector('.btnMovilCloseMenu');

// fondo gris
const backMenu = document.querySelector('.backMenu');


// Menu de categorías escritorio
const btnCategories = document.querySelector('.btnCategories');
const menu = document.querySelector('.menu');
const closeMenubtn = document.querySelector('.closeMenubtn');

// Botones del carrito
const btnCart = document.querySelector('.btnCart');
const cart = document.querySelector('.cart');
const btnCloseCart = document.querySelector('.btnCloseCart');

// Botones del carrito móvil
const btnMovilOpenCart = document.querySelector('.btnMovilOpenCart');


let listElements = document.querySelectorAll('.listElements');

// variables del buscador
const searchInput = document.querySelector('.searchInput');
const searchBody = document.querySelector('.searchBody');
const searchBodySection = document.querySelector('.searchBodySection');

let timeoutId;

// Variables del buscador movil
const searchInputMovil = document.querySelector('.searchInputMovil');
const searchBodyMovil = document.querySelector('.searchBodyMovil');
const searchBodySectionMovil = document.querySelector('.searchBodySectionMovil');
const closeSearchMovil = document.querySelector('.closeSearchMovil');

function contieneCaracteresEspeciales(texto) {
    const expresionRegular = /[!@#$%^&*()_+\[\]{};':"\\|,.<>\/?]+/;
    return expresionRegular.test(texto);
}

/*
 * Abre el menú deslizante.
 */
function openMenuMovil() {
    document.body.style.overflow = 'hidden';
    menuMovil.style.left = '0';
    btnOpenMenu.classList.add('hidden');
    backMenu.classList.remove('hidden');
}

/*
 * Cierra el menú ocultándolo y actualizando los elementos del botón y fondo.
 */
function closeMenuMovil() {
    document.body.style.overflow = 'auto';
    menuMovil.style.left = '-120%';
    btnOpenMenu.classList.remove('hidden');
    btnCloseMenu.classList.add('hidden');
    backMenu.classList.add('hidden');
}

/*
* Función para sumar la cantidad de productos del carrito
*/
function sumar(event) {
    var cantidadElement = event.target.closest('li').querySelector(".cantPro");
    var cantidad = parseInt(cantidadElement.value);
    cantidad += 1;
    cantidadElement.value = cantidad;
}
/*
* Función para restar la cantidad de productos del carrito
*/
function restar(event) {
    var cantidadElement = event.target.closest('li').querySelector(".cantPro");
    var cantidad = parseInt(cantidadElement.value);
    if (cantidad > 1) {
        cantidad -= 1;
        cantidadElement.value = cantidad;
    }
}

// Eliminar producto del carrito
function eliminar(event) {
    var productoElement = event.target.closest('li');
    productoElement.remove();
}

// Abrir el menú de categorías escritorio
function openMenu(e){
    e.preventDefault();
    closeCart();
    document.body.style.overflow = 'hidden';
    if(window.innerWidth < 768){
        menu.style.left = '100%';
        backMenu.classList.remove('hidden');
    }

    menu.style.left = '0';
    backMenu.classList.remove('hidden');
}

// Cerrar el menú de categorías escritorio
function closeMenu() {
    closeCart();
    searchBody.classList.add('hidden');
    searchBodyMovil.classList.add('hidden');
    const closeSearchMovil = document.querySelector('.closeSearchMovil');
    closeSearchMovil.classList.add('hidden');
    backMenu.classList.add('hidden');
    if(window.innerWidth < 768){
        menu.style.left = '-120%';
    }else{
        menu.style.left = '-100%';
    }
}

// Función para abrir el carrito escritorio
function openCart(){
    closeMenu();
    document.body.style.overflow = 'hidden';
    cart.style.left = '0%';
    backMenu.classList.remove('hidden');
}

// Función para cerrar el carrito escritorio
function closeCart() {
    document.body.style.overflow = 'auto';
    if(window.innerWidth < 768){
        cart.style.left = '-120%';
        backMenu.classList.add('hidden');
    }else{
        cart.style.left = '-80%';
        backMenu.classList.add('hidden');
    }
}


function fetchData(url) {
    return new Promise(async (resolve, reject) => {
        try {
            const response = await fetch(url);

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const data = await response.json();
            resolve(data);

        } catch (error) {
            resolve(false);
        }
    });
}

async function getSubCategories(id) {
    try {
        const data = await fetchData(`${url}/index.php/Subcategorias/getSubCategorias/${id}`);
        return data;
    } catch (error) {
        console.error('Error:', error);
    }
}


/*
 * Eventos
*/
if(btnOpenMenu){
    btnOpenMenu.addEventListener('click', openMenuMovil);
    btnCloseMenu.addEventListener('click', closeMenuMovil);
    
    // Fondo gris
    backMenu.addEventListener('click', closeMenu);
    
    closeMenubtn.addEventListener('click', closeMenu);
    btnCategories.addEventListener('click', openMenu);
    
    // carrito escritorio
    // btnCart.addEventListener('click', openCart);
    btnCloseCart.addEventListener('click', closeCart);
    
    // Carrito móvil
    // btnMovilOpenCart.addEventListener('click', openCart);

    // categorías móvil
    btnMovilOpenCategories.addEventListener('click', openMenu);

    // Menu móvil
    btnMovilCloseMenu.addEventListener('click', closeMenuMovil);
    
    // Funcionalidad de las subcategorias
    listElements.forEach(listElement => {
        listElement.addEventListener('click', async (e) =>{
            // Obtener el valor del data-id
            let id = e.target.dataset.id;
            // Obtener los datos de la subcategories
            let datos = await getSubCategories(id);
            if(datos.length > 0){
                listElement.classList.toggle('arrow');
    
                let subMenu = listElement.nextElementSibling;
                
                // Eliminar los elementos del subMenu
                subMenu.innerHTML = '';
                // Recorrer los datos para crear los elementos
                datos.forEach(dato => {
                    // Crear el elemento li
                    let li = document.createElement('li');
                    // Asigno las clases al li
                    li.classList.add('w-[100%]', 'flex');
                    // Crear el elemento a
                    let a = document.createElement('a');
                    // Asigno las clases y propiedades al a
                    a.classList.add('w-[100%]', 'h-[100%]', 'px-10', 'py-5', 'hover:bg-gray-100', 'hover:text-orange-500');
                    a.dataset.id = dato.id;
                    a.innerText = dato.nombre;
                    a.href = `${url}/index.php/categorias/viewCategoria/${dato.id}?page=1`;
                    // Agrego el a al li
                    li.appendChild(a);
                    // Agrego el li al ul
                    subMenu.appendChild(li);
                });
    
                // Mostrar el subMenu
                let height = 0;
                if(subMenu.clientHeight == '0'){
                    height = subMenu.scrollHeight;
                }
                subMenu.style.height = `${height}px`;
            }
        });
    });

    async function getProductosNombre(datos) {
        try {
            const data = await fetchData(`${url}/index.php/Productos/getProductosNombre/${datos}`);
            return data;
        } catch (error) {
            console.error('Error:', error);
        }
    }

    // Función para formatear moneda chilena
    function formatearMonedaChilena(numero) {
        return numero.toLocaleString('es-CL', {
            style: 'currency',
            currency: 'CLP'
        });
    }

    // Función para crear elementos de precio en la barra de búsqueda
    function createPriceElement(value, ...classes) {
        const element = document.createElement('h6');
        element.classList.add(...classes);
        
        const formattedPrice = formatearMonedaChilena(parseFloat(value));
    
        if (classes.includes('metros-cuadrados')) {
            element.innerHTML = `${formattedPrice} m<sup>2</sup>`;
            return element;
        }
        
        element.innerText = formattedPrice;
        
        return element;
    }

    function cerrarBusquedaMovil() {
        searchBodyMovil.classList.add('hidden');
        backMenu.classList.add('hidden');
        closeSearchMovil.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }


    function manejarEntrada(inputElement, bodyElement, bodySectionElement) {
        clearTimeout(timeoutId);
    
        // Establecer un retraso de 500 ms después de la última entrada
        timeoutId = setTimeout(async () => {
            inputElement.value = inputElement.value.trim();
            
            if (contieneCaracteresEspeciales(inputElement.value)) {
                return;
            }

            if (inputElement.value.length == 0) {
                bodyElement.classList.add('hidden');
                backMenu.classList.add('hidden');
                return;
            }
    
            if (inputElement.value.length < 3) {
                return;
            }

            //Traemos los datos de la base de datos 
            let datos = await getProductosNombre(inputElement.value);

            // verificamos que no sea falso
            if(!datos){
                return;
            }

            bodyElement.innerHTML = '';

            const commonClasses = ["w-[100%]", "h-[100px]", "hover:bg-gray-100", "py-2", "px-2", "flex", "items-center"];

            datos.forEach((dato) => {
                const { urlimagen, nompro, medida, prepro, preoferpro } = dato;
        
                const a = document.createElement('a');
                a.href = `${url}/index.php/productos/viewProduct/${dato.id}`;
                a.classList.add(...commonClasses);
        
                const div1 = document.createElement('div');
                div1.classList.add("w-[60px]", "flex");
        
                const img = document.createElement('img');
                img.classList.add("w-[100%]", "object-cover");
                img.src = `${url}/${urlimagen}`;
        
                div1.appendChild(img);
                a.appendChild(div1);
        
                const div2 = document.createElement('div');
                div2.classList.add("w-full", "flex", "flex-col", "px-5");
        
                const h4 = document.createElement('h4');
                h4.classList.add("text-lg", "font-bold", "text-gray-700");
                h4.innerText = nompro;
                div2.appendChild(h4);
        
                const div3 = document.createElement('div');
                div3.classList.add("w-full", "flex", "justify-between");
        
                if (medida > 0) {
                    const h5 = createPriceElement(prepro, "w-1/2", "text-md", "text-orange-500", "font-bold");
                    div3.appendChild(h5);
                    if(preoferpro > 0){
                        const h6 = createPriceElement(preoferpro, "w-1/2", "text-md", "text-orange-500", "font-bold");
                        div3.appendChild(h6);
                    }
                    const h62 = createPriceElement(`${prepro / medida}`, "w-1/2", "text-md", "text-orange-500", "font-bold", "metros-cuadrados");
                    div3.appendChild(h62);
                    div2.appendChild(div3);
                }else{
                    if(dato.preoferpro > 0){
                        const h5 = createPriceElement(prepro, "w-1/2", "text-md", "text-orange-400", "line-through");
                        div3.appendChild(h5);
                        const h6 = createPriceElement(preoferpro, "w-1/2", "text-md", "text-orange-500", "font-bold");
                        div3.appendChild(h6);
                    }else{
                        const h5 = createPriceElement(prepro, "w-1/2", "text-md", "text-orange-500", "font-bold");
                        div3.appendChild(h5);
                    }
                    div2.appendChild(div3);
                }
    
                a.appendChild(div2);
        
                bodyElement.appendChild(a);

            });

            if (bodyElement.classList.contains('hidden')) {
                bodyElement.classList.remove('hidden');
                backMenu.classList.remove('hidden');
                closeSearchMovil.classList.remove('hidden');   
                document.body.style.overflow = 'hidden';
            }
            
        }, 500);
    }
    
    // Buscador
    searchInput.addEventListener('input', function() {
        manejarEntrada(searchInput, searchBody, searchBodySection);
    });
    
    // Buscador Movil
    searchInputMovil.addEventListener('input', function() {
        manejarEntrada(searchInputMovil, searchBodyMovil, searchBodySectionMovil);
    });

    closeSearchMovil.addEventListener('click', function() {
        cerrarBusquedaMovil();
    });

    
}

