<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <!-- Agregar los enlaces a los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <form action="login.php" method="post">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Iniciar Sesión</h4>
                </div>
                <div class="card-body">
                <form>
                    <div class="mb-3">
                    <label for="usuario" class="form-label">Email</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su email" required>
                    </div>
                    <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </form>
  </div>

  <!-- Agregar el enlace al script de Bootstrap (requerido para algunos componentes interactivos) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
