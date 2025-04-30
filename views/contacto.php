<!DOCTYPE html>
<html lang="en">
<head>
<!--<base href="/trabajo2/"> -->
<base href="/">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contacto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main class="container my-5">
    <form>
      <div class="mb-3">
        <label for="nombre" class="form-label">Ingrese su Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
      </div>
      <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </main>
</body>
</html>
