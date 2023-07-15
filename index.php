<!DOCTYPE html>
<html>

<head>
        <title>Insertar Usuario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
        <div class="container">
                <!--tomamos los datos del usuario activo -->
                <?php
                include("conectar.php");
                include("menu.php");
                $bd = conectar();
                ?>

                <h1> <br></h1>
                <h3>Listar Usuarios</h3>
                <hr>

                <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                                <table class="table table-striped">
                                        <thead>
                                                <tr>
                                                        <th>ID</th>
                                                        <th>NOMBRE</th>
                                                        <th>CORREO</th>
                                                        <th>CELULAR</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                $sql = "select * from usuarios";
                                                $datos = mysqli_query($bd, $sql);
                                                while ($row = $datos->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td>" . $row['nombre'] . "</td>";
                                                        echo "<td>" . $row['correo'] . "</td>";
                                                        echo "<td>" . $row['telefono'] . "</td>";
                                                        echo "</tr>";
                                                }
                                                mysqli_close($bd);
                                                ?>
                                        </tbody>
                                </table>
                                
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6"></div>
                </div>

        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>