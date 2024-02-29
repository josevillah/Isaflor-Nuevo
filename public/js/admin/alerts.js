// Funcionamiento de las alertas
export class Alert {
    constructor(alert) {
        this.alert = alert;
        this.alertBody = document.querySelector('.alertsBody');
    }

    // Mostrar alerta
    async show(message) {

        return new Promise((resolve, reject) => {
            if(this.alertBody.classList.contains('hidden')){
                this.alertBody.classList.remove('hidden');
            }

            this.alert.querySelector('p.message').textContent = message;
    
            this.alert.classList.add('show');
            this.alert.classList.remove('hidden');

            setTimeout(() => {
                this.closeAlert();
                resolve(true);
            }, 2000);
        });
    }
    
    // Cerrar alerta botón x
    closeAlert(){
        this.alert.classList.remove('show');
        this.alert.classList.add('hidden');
        
        if(!this.alertBody.classList.contains('hidden')){
            this.alertBody.classList.add('hidden');
        }
        
    }
}