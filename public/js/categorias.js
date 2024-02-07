const btnAddCart = document.querySelectorAll('.btnAddCart');

btnAddCart.forEach(btn => {
    btn.addEventListener('mouseover', (e) => {
        const spanElement = btn.querySelector('span');
        const svgElements = btn.querySelectorAll('svg');
        
        // Configuración de transición para el span
        spanElement.style.transition = 'top 0.3s ease 0.2s';
        spanElement.style.top = '-50px';

        // Configuración de transición para los elementos svg
        svgElements.forEach((svg, index) => {
            const delay = (index + 1) * 0.1; // Ajusta el retraso para que sea progresivo
            svg.style.transition = `top 0.3s ease ${delay}s`;
            svg.style.top = '10px';
        });
    });

    btn.addEventListener('mouseout', (e) => {
        const spanElement = btn.querySelector('span');
        const svgElements = btn.querySelectorAll('svg');

        // Configuración de transición para el span
        spanElement.style.transition = 'all 0.3s ease';
        spanElement.style.top = '10px';

        // Configuración de transición para los elementos svg
        svgElements.forEach((svg, index) => {
            svg.style.transition = `top 0.3s ease`;
            svg.style.top = '50px';
        });
    });
});

const cuerpoMarca = document.querySelector('.cuerpoMarca');
if(cuerpoMarca){
    if(window.innerWidth < 768){
        cuerpoMarca.classList.add('animatesm');
    }else{
        cuerpoMarca.classList.remove('animatesm');
    }
}