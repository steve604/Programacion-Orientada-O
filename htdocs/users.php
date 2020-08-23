<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../layouts/head.html') ?>
    <title>Usuarios</title>
</head>
<body>
<?php include('../layouts/navigation.html') ?>
    <div class="container">
        
        <div class="card">
            <div class="card-header">
                <h4>Registro de Cuenta</h4>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nombre             </label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nombre de usuario</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> Confirmar Contraseña</label>
                        <div class="col-lg-9">
                            
                            <input class="form-control" type="password" >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Fecha de Nacimiento</label>
                        <div class="col-lg-9">
                            
                            <input class="form-control" type="password" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Teléfono</label>
                     <div class="col-lg-9">
                    <input class="form-control" type="password" >
                        </div>
                    </div>
                    <div class="form-group row">
                             <label class="col-lg-3 col-form-label form-control-label">Tipo de Usuario</label>
                        <div class="col-lg-9 ">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Docente</a>
                                  <a class="dropdown-item" href="#">Estudiante</a>
                                  <a class="dropdown-item" href="#">Administración</a>
                                </div>
                            </div>
                             
                        </div>
                    </div>                   
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <input type="reset" class="btn btn-secondary" value="Cancel">
                            <input type="button" class="btn btn-primary"
                                value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <?php include('../layouts/footer.html') ?>
</body>
</html>