<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- agregar header -->
    <?php include('../layouts/head.html') ?>
    <title>Crador</title>
</head>
<body>
    <!-- agregar menu y el navbar -->
    <?php include('../layouts/navigation.html'); require_once('../connection.php')?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Crear Secciones</h4>
            </div>
            <div class="card-body">
            <?php
                if ($_POST) {
                    include('../assets/js/configurations.php');
                }else{
            ?>
                <p>Seleccione lo que desea crear</p>
                <form class="form" role="form" autocomplete="off" method="POST">
                    <button name="aula" class="btn btn-primary btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                    <button name="grado" class="btn btn-dark btn-lg btn-block" action="configurations.php" value="1" type="submit">Grado</button>
                    <button name="aula" class="btn btn-danger btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                    <button name="aula" class="btn btn-primary btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                    <button name="aula" class="btn btn-success btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                    <button name="aula" class="btn btn-warning btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                    <button name="aula" class="btn btn-info btn-lg btn-block" action="configurations.php" value="1" type="submit">Aula</button>
                </form>
            </div>
                <?php } ?>
        </div>
    </div>
    <?php include('../layouts/footer.html') ?>
</body>
</html>