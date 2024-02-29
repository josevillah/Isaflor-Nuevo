import { Climate } from './class/climate.js';

const url = window.location.origin === 'http://localhost' ? `${window.location.origin}/proyectos/isaflor.cl` : window.location.origin;

const btnSearch = document.querySelector(".btnSearch");

if(btnSearch){

    document.addEventListener("DOMContentLoaded", async () => {
        const city = 'VALDIVIA';
        try {
            const climate = new Climate();
            const data = await climate.getClimate(city);
    
            if (data === false)
                return;
    
            const imgClimate = document.querySelector(".imgClimate");
            const degreeClimate = document.querySelector(".degreeClimate");
            const typeClimate = document.querySelector(".typeClimate");
            const humidityClimate = document.querySelector(".humidityClimate");
            const windClimate = document.querySelector(".windClimate");
    
            const climateBody = document.querySelector(".climateBody");
            if (climateBody) {
                if (data.weather[0].main === "Clear") {
                    typeClimate.innerHTML = "Despejado";
                    imgClimate.src = `${url}/public/img/climate/clear.png`;
                } else if (data.weather[0].main === "Clouds") {
                    typeClimate.innerHTML = "Nublado";
                    imgClimate.src = `${url}/public/img/climate/cloud.png`
                } else if (data.weather[0].main === "Rain") {
                    typeClimate.innerHTML = "Lluvia";
                    imgClimate.src = `${url}/public/img/climate/rain.png`
                } else if (data.weather[0].main === "Snow") {
                    typeClimate.innerHTML = "Tormenta";
                    imgClimate.src = `${url}/public/img/climate/storm.png`
                } else if (data.weather[0].main === "Haze") {
                    typeClimate.innerHTML = "Niebla";
                    imgClimate.src = `${url}/public/img/climate/mist.png`
                } else {
                    typeClimate.innerHTML = "Despejado";
                    imgClimate.src = `${url}/public/img/climate/clear.png`;
                }
    
                degreeClimate.innerHTML = `${Math.floor(data.main.temp)}<sup>ºC</sup>`;
                humidityClimate.innerHTML = `${data.main.humidity}%`;
                windClimate.innerHTML = `${Math.floor(data.wind.speed)} Km/h`;
    
                // Retrasar la animación de la altura para dar tiempo a que se aplique la clase 'hidden'
                setTimeout(() => {
                    climateBody.classList.remove('hidden');
                    climateBody.style.height = 'auto'; // Cambiar la altura a 'auto' para mostrar el contenido gradualmente
                }, 100); // Espera 100ms para que se quite la clase 'hidden' antes de cambiar la altura
            }
    
        } catch (error) {
            console.log(error);
        }
    
    });
       

    btnSearch.addEventListener("click", async (e) => {
        e.preventDefault();
        const city = document.querySelector(".inputSearch").value.trim().toUpperCase();
        try{
            const climate = new Climate();
            const data = await climate.getClimate(city);
    
            if(data === false)
                return;
            
            const imgClimate = document.querySelector(".imgClimate");
            const degreeClimate = document.querySelector(".degreeClimate");
            const typeClimate = document.querySelector(".typeClimate");
            const humidityClimate = document.querySelector(".humidityClimate");
            const windClimate = document.querySelector(".windClimate");

            if(data.weather[0].main === "Clear"){
                typeClimate.innerHTML = "Despejado";
                imgClimate.src = `${url}/public/img/climate/clear.png`;
            }else if(data.weather[0].main === "Clouds"){
                typeClimate.innerHTML = "Nublado";
                imgClimate.src = `${url}/public/img/climate/cloud.png`
            }else if(data.weather[0].main === "Rain"){
                typeClimate.innerHTML = "Lluvia";
                imgClimate.src = `${url}/public/img/climate/rain.png`
            }else if(data.weather[0].main === "Snow"){
                typeClimate.innerHTML = "Tormenta";
                imgClimate.src = `${url}/public/img/climate/storm.png`
            }else if(data.weather[0].main === "Haze"){
                typeClimate.innerHTML = "Niebla";
                imgClimate.src = `${url}/public/img/climate/mist.png`
            }else{
                typeClimate.innerHTML = "Despejado";
                imgClimate.src = `${url}/public/img/climate/clear.png`;
            }

            degreeClimate.innerHTML = `${Math.floor(data.main.temp)}<sup>ºC</sup>`;
            humidityClimate.innerHTML = `${data.main.humidity}%`;
            windClimate.innerHTML = `${Math.floor(data.wind.speed)} Km/h`;

        }catch (error) {
            console.log(error);
        }
    });
}