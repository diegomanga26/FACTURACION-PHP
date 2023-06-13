<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" >
        <form action="" method="POST">
        <div class="row caja">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <label for="">Nombre:</label><br>
                        <input type="text" placeholder="Ingrese su nombre por favor" name="nombre">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Apellido:</label><br>
                        <input type="text" placeholder="Ingrese su apellido por favor" name="apellido">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Dirección:</label><br>
                        <input type="text" placeholder="Ingrese su dirección por favor" name="direccion">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col logo">
                        <h2>CAMPUSLAND</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Edad:</label><br>
                        <input type="number" placeholder="Ingrese su edad por favor" name="edad">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Email:</label><br>
                        <input type="text" placeholder="Ingrese su dirección por favor" name="email">
                    </div>
                </div>
            </div>
        </div>
        <div class="row caja">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <label for="">Horario:</label><br>
                        <input type="time" name="horario">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Team:</label><br>
                        <input type="text" placeholder="Ingrese su team por favor" name="team">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Trainer:</label><br>
                        <input type="text" placeholder="Ingrese su trainer por favor" name="trainer">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row botones1">
                    <div class="col">
                        <input type="submit" value="✔️" class="boton" name="guardar">
                    </div>
                    <div class="col">
                        <input type="submit" value="❌" class="boton">
                    </div>
                </div>
                <div class="row botones2">
                    <div class="col">
                        <input type="submit" value="✍🏻" class="boton">
                    </div>
                    <div class="col">
                        <input type="submit" value="🔍" class="boton">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Cédula:</label><br>
                        <input type="number" placeholder="Ingrese su cédula por favor" name="cedula">
                    </div>
                </div>
            </div>
        </div>
        </form>

        <div class="row caja">
            <table>
                <thead>
                    <tr>
                        <th>Nombre:</th>
                        <th>Apellido:</th>
                        <th>Dirección:</th>
                        <th>Edad:</th>
                        <th>Email:</th>
                        <th>Horario:</th>
                        <th>Team:</th>
                        <th>Trainer:</th>
                        <th>Cédula:</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>