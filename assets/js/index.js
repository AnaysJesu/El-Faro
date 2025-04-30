
function mostrarHora(){
    const ahora = new Date();
    const fechaHora = ahora.toLocaleString('es-CL',{
        hour12: false
    });
    document.getElementById('fechaHora').textContent = fechaHora;
}
setInterval(mostrarHora, 1000);
window.onload = function(){
    let Noticias = JSON.parse(localStorage.getItem("noticias"))||[];
    let contadorGeneral = 0;
    let contadorDeporte = 0;
    let contadorNegocio = 0;
    Noticias.forEach(noticia =>{
        const col = document.createElement("div");
        col.className = "col-md-4";
        col.innerHTML = `
            <div class="card h-100">
                <img src="${noticia.link}" class="card-img-top" alt="${noticia.titulo}">
                <div class="card-body">
                    <h3 class="card-title">${noticia.titulo}</h3>
                    <h3>${noticia.tipo}</h3>
                    <p class="card-text">${noticia.descripcion}</p>
                </div>
            </div>
        `;
        if (noticia.seccion === "general"){
            let seccion = document.querySelector("#SeccionGeneral").parentElement;
            let generalContainer = seccion.querySelector(".row") || document.createElement("div");
            generalContainer.className = "row g-4";
            generalContainer.appendChild(col);
            seccion.appendChild(generalContainer);
            contadorGeneral++;
        } else if (noticia.seccion === "deporte"){
            let deporteContainer = document.querySelectorAll("#SeccionDeDeportes .row")[0];
            deporteContainer.appendChild(col);
            contadorDeporte++;
        } else if (noticia.seccion === "negocio"){
            let negocioContainer = document.querySelector("#negocios .row");
            negocioContainer.appendChild(col);
            contadorNegocio++;
        }
    });
    document.getElementById("contador-general").textContent = contadorGeneral;
    document.getElementById("contador-deporte").textContent = contadorDeporte;
    document.getElementById("contador-negocio").textContent = contadorNegocio;
    document.getElementById("btnNuevaNoticia").addEventListener("click", mostrarNuevoArticulo);
};
function mostrarNuevoArticulo(){
    window.location.href = "mantenedorArticulo.html"; 
}

