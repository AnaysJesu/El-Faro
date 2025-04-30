document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("formNoticias"); 
    form.addEventListener("submit", function(e){
        e.preventDefault(); 

        const noticia = {
            seccion: document.getElementById("seccion").value,
            titulo: document.getElementById("titulo").value,
            tipo: document.getElementById("tipo").value,
            descripcion: document.getElementById("descripcion").value,
            link: document.getElementById("link").value
        };

        let Noticias = JSON.parse(localStorage.getItem("noticias"))||[];
        Noticias.push(noticia);
        localStorage.setItem("noticias", JSON.stringify(Noticias));

        alert("Noticia Agregada Correctamente");
        form.reset();
        window.location.href = "?page=home";
    });
});
function actualizarContador(){
    const noticias = JSON.parse(localStorage.getItem("noticias"))||[];
    document.getElementById("contadorNoticias").textContent = noticias.length;
}