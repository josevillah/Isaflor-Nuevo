import { Login } from './class/login.js';

const formLogin = document.querySelector('#formLogin');

const url  = window.location.href;

const linksMenu = document.querySelectorAll('.linksMenu li a');

if(formLogin){
    formLogin.addEventListener('submit', (e) => {
        e.preventDefault();
    
        const data = Object.fromEntries(
            new FormData(e.target)
        )
    
        const login = new Login(data);
        
        if(login.init() == false){
            return;
        }
    });
}

if(linksMenu){
    linksMenu.forEach(link => {
        if(link.href == url){
            link.classList.add('text-orange-500');
        }
    });
}


// Configuración de select personalizado
const optionsBtn = document.querySelectorAll('.options button');
const textBox = document.querySelector('.textBox');
const selectArrow = document.querySelector('.selectArrow');

textBox.addEventListener('click', (e) => {
    selectArrow.classList.toggle('rotate-90');
    const options = document.querySelector('.options');
    options.classList.toggle('hidden'); // Alternar la clase hide para mostrar u ocultar el menú
});


optionsBtn.forEach(optionBtn => {
    optionBtn.addEventListener('click', (e) => {
        const text = e.target.innerText;
        textBox.value = text;
        const options = document.querySelector('.options');
        options.classList.toggle('hidden');
        selectArrow.classList.toggle('rotate-90');
    });
});
