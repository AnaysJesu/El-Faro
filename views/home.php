<!DOCTYPE html>
<html lang="es">
<head>
<base href="/trabajo2/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="assets/js/index.js"></script>
</head>
<body>  
    <header class="bg-primary text-white text-center py-4">
        <h1>El Faro</h1>
        <img class="rounded-circle mt-3" src="assets/img/logo_faro.jpg" alt="logo" width="200" height="200"> 
    </header>   
    <div class="text-center mt-3" id="fechaHora"></div>
    <h5 class="aviso">⚡️ Se acercan tormentas eléctricas en la Región de Los Lagos ⚡️</h5>
    <nav class="nav justify-content-center bg-light py-3">
        <a class="nav-link active" href="?page=home">Inicio</a>
        <a class="nav-link" href="#SeccionDeDeportes">Deporte</a>
        <a class="nav-link"  href="#negocios">Negocios</a>
        <a class="nav-link" href="?page=contacto">Contacto</a>
        <a class="nav-link" href="?page=RegistroCuenta">Registrarse</a>
    </nav> 
    <section class="container my-5">
        <div class="text-center mb-4" id="btnCrear">
            <button class="btn btn-primary" onclick="mostrarNuevoArticulo()" id="btnNuevaNoticia">Nuevas Noticias</button>
        </div>
        <div class="table-responsive">
            <h2>Noticias Generales (<span id="contador-general">0</span>)</h2>
            <section class="container my-5" id="SeccionGeneral">
                <div class="table-responsive">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/Noticias/foto2.jpg">
                                <div class="card-body">
                                    <h3 class="card-title">Suegra acusada de matar a su joven nuera</h3>
                                    <h3>Crimen</h3>
                                    <p class="card-text">El crimen ocurrió la madrugada de este jueves al interior de un domicilio ubicado en la comuna de Osorno</p>
                                    <a class="Enlace1" href="https://www.meganoticias.cl/nacional/480507-osorno-asesinato-joven-manos-suegra-prision-preventiva-todo-lo-que-se-sabe-del-caso-fds01-29-03-2025.html">Mas info aqui</a>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/Noticias/foto3.jpg">
                                <div class="card-body">
                                    <h3 class="card-title">Todos los feriados de abril: Ojo con dos días de Semana Santa</h3>
                                    <h3>Anuncio</h3>
                                    <p class="card-text">Después de casi  tres meses sin festivos, este mes de abril trae consigo días feriados, algo que no se veía en este año desde enero, cuando se celebró el Año Nuevo.</p>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="assets/img/Noticias/foto1.jpg">
                                <div class="card-body">
                                    <h3>Anuncio</h3>
                                    <h3 class="card-title">Terremoto en Birmania: Continúan los trabajos de rescate y se reportan 1.700 muertos, 3.400 heridos y 300 desaparecidos</h3>
                                    <p class="card-text">Terremoto en Birmania: Continúan los trabajos de rescate y se reportan 1.700 muertos, 3.400 heridos y 300 desaparecidos</p>
                                    <a class="Enlace1" href="https://www.meganoticias.cl/mundo/481277-balance-terremoto-birmania-mas-3300-muertos220-desaparecidos-fds01-05-04-2025.html">Mas info aqui</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <h2>Sección video Noticias</h2>
            <video  controls>
                <source src="assets/videos/video.mp4.mp4" type="video/mp4">
            </video>
        </div>  
        <div>
            <h2>Audio Noticias</h2>
            <audio controls>
                <source src="assets/Audio/audio.mp3" type="audio/mpeg">
            </audio>
        </div>  
    </section>
 <section class="container my-5" id="SeccionDeDeportes">
    <div class="table-responsive">
        <h2>Sección de Deportes (<span id="contador-deporte">0</span>)</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets/img/Deportes/foto1.PNG">
                    <div class="card-body">
                        <h3 class="card-title">Universidad de Chile anota dura derrota frente a Everton</h3>
                        <h3>Deporte</h3>
                        <p class="card-text">Una Universidad de Chile deslucida y sin muchas ideas en los metros finales de la cancha, fue superada sin mayores contratiempos por un aplicado Everton, que se impuso por 2-0.</p>
                    </div>  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets/img/Deportes/foto2.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Colo Colo lanza vinos conmemorativos por su Centenario</h3>
                        <h3>Deporte</h3>
                        <p class="card-text">Hace algunas semanas salieron a la venta cereales y barras de cereales de Colo Colo, que se comercializan en una conocida cadena de supermercados; y ahora se lanzaron tres vinos del Cacique.</p>
                    </div>  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets/img/Deportes/foto3.png">
                    <div class="card-body">
                        <h3 class="card-title">Alcohol en el Mundial de Arabia Saudí estará prohibido</h3>
                        <h3>Deporte</h3>
                        <p class="card-text">En 2022, Catar avisó de la prohibición de beber alcohol dos días antes del comienzo del torneo.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="container my-5" id="negocios">
        <div class="table-responsive">
            <h2>Sección de Negocios y emprendimiento (<span id="contador-negocio">0</span>)</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/Negocio - emprendimiento/foto1.PNG" class="card-img-top" alt="Empresa economía">
                        <div class="card-body">
                            <h3 class="card-title">Las empresas que sostienen la economía</h3>
                            <p class="card-text">Banco Santander y Cámara de Comercio reconocen la valentía de las pymes y su capacidad de sobreponerse a las adversidades.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/Negocio - emprendimiento/foto2.PNG" class="card-img-top" alt="Relatidos cultura rural">
                        <div class="card-body">
                            <h3 class="card-title">Relatidos: dando voz a la cultura rural</h3>
                            <p class="card-text">Emprendedores de Jaén lanzan una app para compartir historias y memorias de la España despoblada.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="assets/img/Negocio - emprendimiento/foto3.PNG" class="card-img-top" alt="Jorge Olivera vino">
                        <div class="card-body">
                            <h3 class="card-title">Éxito del viticultor Jorge Olivera</h3>
                            <p class="card-text">De unas viñas en Huesca a restaurantes de culto al vino. Un proyecto que creció desde el corazón.</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <h5 class="FooterText mb-3">© 2025 Todos los derechos reservados.</h5>
            <div class="mb-3">
                <a href="/contacto" class="text-white me-3">Contacto</a>
                <a href="/privacidad" class="text-white me-3">Política de Privacidad</a>
                <a href="/terminos" class="text-white">Términos y Condiciones</a>
            </div>
            <div class="mb-3">
                <a href="https://facebook.com" class="text-white me-3" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" class="text-white me-3" target="_blank" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" class="text-white" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <small class="text-secondary">Sitio desarrollado por El Faro</small>
        </div>
    </footer>    
</body>
</html>