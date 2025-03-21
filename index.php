<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="body">
    <!-- Encabezado -->
    <header class="header">
        <div class="logo">
            <h1>Mi Tienda Online</h1>
        </div>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="#productos" class="nav-link">Productos Más Destacados</a></li>
                <li><a href="#contacto" class="nav-link">Contacto</a></li>
                <li><a href="#redes" class="nav-link">Redes Sociales</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <button>Login</button>
            <button>Registro</button>
        </div>
    </header>

    <!-- Sección principal -->
    <section id="bienvenida">
        <h2>Bienvenido a nuestra tienda en línea</h2>
        <p>Descubre nuestros productos y realiza tus compras desde la comodidad de tu hogar.</p>
    </section>

    <!-- Productos Más Destacados -->
    <section id="productos">
        <h2>Productos Más Destacados</h2>
        <div class="productos">
            <div class="producto">
                <img src="producto1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción del producto 1</p>
                <p>Precio: $100</p>
            </div>
            <div class="producto">
                <img src="producto2.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Descripción del producto 2</p>
                <p>Precio: $150</p>
            </div>
            <div class="producto">
                <img src="producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción del producto 3</p>
                <p>Precio: $200</p>
            </div>
        </div>
    </section>

    <!-- Formulario de contacto -->
    <section id="contacto">
        <h2>Formulario de Contacto</h2>
        <form action="contacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Sección de Redes Sociales -->
    <section id="redes">
        <h2>Conéctate con nosotros</h2>
        <p>¡Síguenos en nuestras redes sociales!</p>
        <ul>
            <li><a href="https://facebook.com">Facebook</a></li>
            <li><a href="https://instagram.com">Instagram</a></li>
            <li><a href="https://twitter.com">Twitter</a></li>
        </ul>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 Mi Tienda Online. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
