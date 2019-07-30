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
        <a class="navbar-brand"href="index.php"><img src="images/php.png" width="70px" height="40px"></a>
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
                <li class="nav-item active">
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

    <h2 class="formato">Componentes Registrados</h2>

    <div class=" formato row">
        <div class="col-md-3">
        </div>
        <?php
        $db_connection = pg_connect("host=ec2-174-129-41-127.compute-1.amazonaws.com dbname=d8oq081g0iok2c port=5432 user=sffkjxowzokbpd password=53c0bbe35d5f252d984ef1b24676ba3c525925895c561ae147859562a7b170d8");


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_auto = $_POST["id_auto"];
            $id_componente = $_POST["id_componente"];
            $estado = $_POST["estado"];
            $componente = $_POST["componente"];

            $result = @pg_query($db_connection, "INSERT INTO componentes (id_auto,id_componente,estado_componente,nombre_componente) VALUES ('$id_auto','$id_componente','$estado','$componente')");

            $result = pg_query($db_connection, "SELECT * FROM componentes");
            ?>


            <div class="col-md-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Componente</th>
                            <th scope="col">Id Auto</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Nombre Componente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 0;
                        while ($row = pg_fetch_row($result)) {
                            $n = $n + 1;
                            echo "
     <tr>
     <th scope=" . "row" . ">" . $n . "</th>
     <td>" . $row[2] . "</td>
     <td>" . $row[3] . "</td>
     <td>" . $row[1] . "</td>
     <td>" . $row[0] . "</td>
   </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>