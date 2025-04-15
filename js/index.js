
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
        const fila = document.createElement("tr");
        fila.innerHTML = `
            <th><h3>${noticia.titulo}</h3></th>
            <th><h3>${noticia.tipo}</h3></th>
            <th>
                <img src="${noticia.link}" width="200"><br>
                <p>${noticia.descripcion}</p>
            </th>
        `;
        if (noticia.seccion === "general"){
            document.querySelector(".TablaNoticiaGeneral").appendChild(fila);
            contadorGeneral++;
        } else if (noticia.seccion === "deporte"){
            document.getElementById("SeccionDeDeportes").appendChild(fila);
            contadorDeporte++;
        } else if (noticia.seccion === "negocio"){
            const contenedor = document.querySelector("section:nth-of-type(3)");
            const div = document.createElement("div");
            div.innerHTML = `
                <h3>${noticia.titulo}</h3>
                <img src="${noticia.link}" width="200"><br>
                <p>${noticia.descripcion}</p>
            `;
            contenedor.appendChild(div);
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

