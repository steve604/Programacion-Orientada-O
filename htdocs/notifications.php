<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- agregar header -->
    <?php include('../layouts/head.html') ?>
    <title>Notificaciones</title>
</head>
<body>
    <!-- agregar menu y el navbar -->
    <?php include('../layouts/navigation.html') ?>
    <div class="container">
        <!-- Escribir todo aqui -->
        <div class="p-3 mb-2 bg-info text-white"> <h2>Notificaciones</h2>  </div>
    <nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Marcar todas como leidas<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ver todas las notificaciones</a>
              </li>

          </ul>

        </div>
      </nav>
    </div>
    <?php include('../layouts/footer.html') ?>
</body>
</html>
