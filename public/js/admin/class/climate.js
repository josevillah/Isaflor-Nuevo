export class Climate {
    constructor() {
        this.apiKey = "9e67aba38e87a3dc6b81f860ebf5920c";
    }

    async getClimate(city) {

        
        return new Promise(async (resolve, reject) =>{
            if(city === "")
                resolve(false);

            const urlApi = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${this.apiKey}`;

            try{

                const response = await fetch(urlApi);
                const data = await response.json();
                resolve(data);

            }catch(error){
                resolve(false);
            }
            
        });

    }
}
