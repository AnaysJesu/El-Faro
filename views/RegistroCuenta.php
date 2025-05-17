<!DOCTYPE html>
<html lang="es">
<head>
    <!--<base href="/">-->
    <base href="/trabajo2/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Crear Cuenta</h2>
            <form method="post" action="?page=registroCuenta">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" required>
              </div>
              <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
              </div>
              <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="••••••••" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Registrar</button>
            </form>
            <p class="text-center mt-3">
              ¿Ya tienes cuenta? <a href="?page=login">Inicia sesión</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>