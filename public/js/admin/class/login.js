import { Validation } from "./validation.js";
import { Alert } from "../alerts.js";


// Initiate the login form  
export class Login {
    constructor(formLogin){
        this.url = window.location.origin === 'http://localhost' ? `${window.location.origin}/proyectos/isaflor.cl` : window.location.origin;
        this.username = '';
        this.password = '';
        this.form = formLogin;
        this.validation = new Validation();
    }

    fetchData(url) {
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

    async login(){
        try {
            const data = await this.fetchData(`${this.url}/index.php/ipanel/login?username=${this.username}&password=${this.password}`);
            
            if(data == false){
                const alert = new Alert(document.querySelector('#alertWarning'));
                const resp = await alert.show('Usuario o contraseña incorrecta');
                return false;
            }

            try{
                const alert = new Alert(document.querySelector('#alertSuccess'));
                const resp = await alert.show('Bienvenido!');

                if(!resp){
                    return false;
                }

                if(resp){
                    window.location.href = `${this.url}/index.php/ipanel/dashboard`
                }
            }catch(e){
                console.error(e);
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    init(){
        this.username = this.form.username.trim();
        this.password = this.form.password.trim();

        if(this.username.length < 4 || this.password.length < 4){
            return false;
        }

        if(this.validation.specialCaracter(this.username) || this.validation.specialCaracter(this.password)){
            return false;
        }

        this.login();
    }
}