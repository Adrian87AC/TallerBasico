<?php $usuario ="admin";?>

<?php $nota= 10;

$nota = 10;

if($nota >= 10){
    echo "Sobresaliente";
} else if($nota >= 8){
    echo "Notable";
} else if($nota >= 6){
    echo "Suficiente";
} else {
    echo "Suspendido";
}
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página con Navbar</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MiSitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="container mt-5">
    <h1 class="text-center">Bienvenido a Mi Sitio</h1>
    <?php if ($usuario == "admin"): ?>
        <p>Bienvenido, administrador.</p>
        <?php else: ?>
        <p>Bienvenido, usuario.</p>
    <?php endif; ?>
    <p class="text-center">Esta es una página básica con una barra de navegación usando Bootstrap 5.</p>
    <div class="text-center">
      <button class="btn btn-primary">Explorar</button>
    </div>
  </div>
<?php
    $producto=["nombre"=>"HP", "precio" => 56.99, "stock" => "Disponible", "url" => "data:image/jpeg;base64,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","  "descripcion"=> "un ordenador potente"];
    var_dump($producto);
?>
<?php
$producto = [
    "url" => "data:image/jpeg;base64,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",
    "nombre" => "HP",
    "precio" => 56.99,
    "stock" => "Disponible",
    "descripcion" => "un ordenador potente",
    "imagen" => "https://example.com/imagen-hp.jpg"  // URL de la imagen
];

// Mostrar contenido del array
var_dump($producto);
?>

<!-- Mostrar los datos en HTML -->
<h2><?php echo $producto["nombre"]; ?></h2>
<p>Precio: <?php echo $producto["precio"]; ?> €</p>
<p>Stock: <?php echo $producto["stock"]; ?></p>
<p>Descripción: <?php echo $producto["descripcion"]; ?></p>
<img src="<?php echo $producto["url"]; ?>" alt="<?php echo $producto["nombre"]; ?>">

<!DOCTYPE html>
</div>  <!-- Bootstrap 5 JS (con Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

*/