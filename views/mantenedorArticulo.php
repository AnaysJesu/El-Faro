<!DOCTYPE html>
<html lang="en">
<head>
<base href="/trabajo2/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleNuevaNoticia.css">
    <script src="assets/js/articulos.js"></script>
</head>
<body>
    <main class="container my-5">
        <section class="card p-4 shadow">
            <h1 class="mb-4">Agregar Nuevas Noticias</h1>
            <form method="POST" action="?page=mantenedorArticulo">
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Imagen (URL)</label>
        <input type="text" class="form-control" id="link" name="imagen">
    </div>
    <div class="mb-4">
        <label for="seccion" class="form-label">Sección</label>
        <select class="form-select" id="seccion" name="seccion">
            <option value="1">Noticias Generales</option>
            <option value="2">Deporte</option>
            <option value="3">Negocios</option>
        </select>
    </div>
    <input type="hidden" name="id_usuario_creacion" value="1">
    <button type="submit" class="btn btn-primary">Agregar</button>
    <button onclick="window.location.href='?page=home'" class="btn btn-primary">Volver</button>
</form>
        </section>
    </main>
</body>
</html>
