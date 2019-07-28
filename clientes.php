<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freno Seguro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="images/php.png" width="70px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="autos.php">Autos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="componentes.php">Componentes</a>
                </li>
                <li class="nav-item">
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

    <h2 class="formato">Clientes</h2>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="registro_clientes.php" method="post">
                <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" minlength="3" name="nombres" placeholder="nombres" required>
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" pattern="([a-zA-Z]\s*){2,}" minlength="3" class="form-control" name="apellidos" placeholder="apellidos" required>
                </div>

                <div class="form-group">
                    <label>Cédula</label>
                    <input type="text" pattern="[0-9]{10}" class="form-control" name="cedula" placeholder="número de cédula" required>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>

</body>

</html>