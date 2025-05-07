<!DOCTYPE html>
<html lang="es">
<head>
<base href="/trabajo2/">
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Registrar Usuario</h2>
    <form method="" action="" class="border p-4 bg-white rounded shadow-sm">
        <div class="row mb-3">
            <div class="col">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col">
                <label for="primerApellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
            </div>
            <div class="col">
                <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <hr class="my-5">
    <h2 class="mb-4">Lista de Usuarios</h2>
    <table class="table table-striped table-bordered bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $usuarios = [
                ['id' => 1, 'nombre' => 'Ana', 'primerApellido' => 'Gómez', 'segundoApellido' => 'López', 'email' => 'ana@example.com'],
                ['id' => 2, 'nombre' => 'Luis', 'primerApellido' => 'Martínez', 'segundoApellido' => 'Pérez', 'email' => 'luis@example.com']
            ];
            foreach ($usuarios as $u) {
                echo "<tr>
                        <td>{$u['id']}</td>
                        <td>{$u['nombre']}</td>
                        <td>{$u['primerApellido']}</td>
                        <td>{$u['segundoApellido']}</td>
                        <td>{$u['email']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
