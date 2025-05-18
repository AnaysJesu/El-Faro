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
        <a class="nav-link" href="?page=MantenedorUsuarios">Mantenedor Usuario</a>
    </nav> 
    <form id="formArticulo" method="POST" action="index.php?action=insertarArticulo">
    <section class="container my-5">
        <div class="text-center mb-4" id="btnCrear">
        <a href="?page=mantenedorArticulo" class="btn btn-primary" id="btnNuevaNoticia">Nuevas Noticias</a>
        </div>
        <div class="table-responsive">
        <h2>Noticias Generales (<?= count($articulosGeneral) ?>)</h2>
<div class="row g-4">
    <?php foreach ($articulosGeneral as $articulo): ?>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="<?= htmlspecialchars($articulo['imagen']) ?>" class="card-img-top" alt="Imagen noticia">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($articulo['titulo']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($articulo['descripcion']) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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
    <h2>Sección de Deportes (<?= count($articulosDeporte) ?>)</h2>
<div class="row g-4">
    <?php foreach ($articulosDeporte as $articulo): ?>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="<?= htmlspecialchars($articulo['imagen']) ?>" class="card-img-top" alt="Imagen noticia">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($articulo['titulo']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($articulo['descripcion']) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</section>
    <section class="container my-5" id="negocios">
        <div class="table-responsive">
        <h2>Sección de Negocios y Emprendimiento (<?= count($articulosNegocio) ?>)</h2>
<div class="row g-4">
    <?php foreach ($articulosNegocio as $articulo): ?>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="<?= htmlspecialchars($articulo['imagen']) ?>" class="card-img-top" alt="Imagen noticia">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($articulo['titulo']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($articulo['descripcion']) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    </section>
</form>
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