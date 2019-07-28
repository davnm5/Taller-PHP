<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freno Seguro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="images/php.png" width="70px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="autos.php">Autos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="componentes.php">Componentes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="mantenimientos.php">Mantenimientos</a>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
    </nav>

    <h2 class="formato">Mantenimientos</h2>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="registro_mantenimientos.php" method="post">
                <div class="form-group">
                    <label> Id Auto </label>
                    <select class="form-control" name="id_auto">
                        <?php
                        $db_connection = pg_connect("host=ec2-174-129-41-127.compute-1.amazonaws.com dbname=d8oq081g0iok2c port=5432 user=sffkjxowzokbpd password=53c0bbe35d5f252d984ef1b24676ba3c525925895c561ae147859562a7b170d8");
                        $result = pg_query($db_connection, "SELECT a.matricula FROM autos a");
                        while ($row = pg_fetch_row($result)) {
                            ?>
                            <option><?php echo "$row[0]" ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div class="form-group">
                    <label>Id Mantenimiento</label>
                    <input type="text" pattern="[0-9]{1,10}" class="form-control" name="id_mantenimiento" required>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" minlength="5" class="form-control" name="descripcion"  required>
                </div>
                <div class="form-group">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" required>
                </div>

                <div class="form-group">
                    <label>Fecha Fin</label>
                    <input type="date" class="form-control" name="fecha_fin" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>

</body>

</html>