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
        <a class="navbar-brand" href="#"><img src="images/php.png" width="70px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item active">
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

    <h2 class="formato">Autos</h2>

    <div class="row">
        <div class="col-md-4">
        </div>
        <?php
        $db_connection = pg_connect("host=localhost dbname=frenoSeguro port=5432 user=postgres password=admin");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $matricula = $_POST["matricula"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];

            $result = @pg_query($db_connection, "INSERT INTO autos (id_cliente,matricula,marca,modelo,color) VALUES ('$id','$matricula','$marca','$modelo','$color')");

            $result = pg_query($db_connection, "SELECT * FROM autos");
            ?>


            <div class="col-md-4">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Id Cliente</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Color</th>
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
     <td>" . $row[1] . "</td>
     <td>" . $row[2] . "</td>
     <td>" . $row[4] . "</td>
     <td>" . $row[0] . "</td>
     <td>" . $row[3] . "</td>
   </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</body>

</html>