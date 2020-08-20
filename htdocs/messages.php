<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- agregar header -->
    <?php include('../layouts/head.html') ?>
    <title>Mensajes</title>
</head>
<body>
    <!-- agregar Menu y el navbar -->
    <?php include('../layouts/navigation.html') ?>
    <div class="container">
        <!-- Escribir todo aqui -->
        <div class="card">
            <div class="card-header">
                <h4>Mensajeria</h4>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nombre             </label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" >
                        </div>
                    </div>
                  </br>
                  <textarea class="form-control" rows="3"></textarea>
                    <div class="form-group row">
                             <label class="col-lg-3 col-form-label form-control-label">Mensajes Dirigidos a: </label>
                        <div class="col-lg-9 ">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categoria:
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Docente</a>
                            <a class="dropdown-item"href="#">Estudiante<a>
                            <a class="dropdownitem"href="#">Administración</a>
                              <a class="dropdownitem"href="#">Psicologia</a>
                              <a class="dropdownitem"href="#">Tutor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <input type="reset" class="btn btn-secondary" value="Cancel">
                            <input type="button" class="btn btn-primary"
                                value="Enviar Mensajes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.html') ?>
</body>
</html>