<!DOCTYPE html>
<html lang="es">
<head>
<!--<base href="/">-->
    <base href="/trabajo2/">
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <form method="" action="" class=""> 
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
            $usuarios =[
                ['id' => 1, 'nombre' => 'Ana', 'primerApellido' => 'Gómez', 'segundoApellido' => 'López', 'email' => 'ana@example.com'],
                ['id' => 2, 'nombre' => 'Luis', 'primerApellido' => 'Martínez', 'segundoApellido' => 'Pérez', 'email' => 'luis@example.com']
            ];
            foreach ($usuarios as $u){
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
