<?php
$url = "https://64838534f2e76ae1b95c9c0a.mockapi.io/data";
global $dataUser;
if (isset($_POST['guardar'])) {
    guardarData($url);
} else if (isset($_POST['buscar'])) {
    buscarData($url);
} else if (isset($_POST['editar'])) {
    $id = $_POST["id"];
    editarData($url, $id);
} else if (isset($_POST['flecha'])) {
    seleccionarUsuario($url);
}

function guardarData($url) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $horario = $_POST["horario"];
    $team = $_POST["team"];
    $trainer = $_POST["trainer"];
    $cedula = $_POST["cedula"];

    $cred['http']['method'] = 'POST';
    $cred['http']['header'] = 'Content-Type: application/json';

    $datosTabla = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'direccion' => $direccion,
        'edad' => $edad,
        'email' => $email,
        'horario' => $horario,
        'team' => $team,
        'trainer' => $trainer,
        'cedula' => $cedula
    );

    $datosTabla = json_encode($datosTabla);
    $cred['http']['content'] = $datosTabla;
    $configuracion = stream_context_create($cred);
    $_DATA = file_get_contents($url, false, $configuracion);
    json_decode($_DATA, true);
};

function obtenerData($url) {
    $datosTabla = file_get_contents($url);
    $users = json_decode($datosTabla, true);
    return $users;
};

function buscarData($url) {
    global $dataUser;
    $dataCedula = $_POST['cedula'];
    $data = file_get_contents($url);
    $users = json_decode($data, true);
    foreach ($users as $x) {
        if ($dataCedula === $x['cedula']) {
            $dataUser = $x;
        }
    };
};
function editarData($url, $id) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $horario = $_POST["horario"];
    $team = $_POST["team"];
    $trainer = $_POST["trainer"];
    $cedula = $_POST["cedula"];

    $cred['http']['method'] = 'PUT';
    $cred['http']['header'] = 'Content-Type: application/json';

    $datosTabla = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'direccion' => $direccion,
        'edad' => $edad,
        'email' => $email,
        'horario' => $horario,
        'team' => $team,
        'trainer' => $trainer,
        'cedula' => $cedula
    );
    $urlId = $url ."/". $id;
    $data = json_encode($datosTabla);
    $cred['http']['content'] = $data;
    $configuracion = stream_context_create($cred);
    $_DATA = file_get_contents($urlId, false, $configuracion);
    json_decode($_DATA,true);

};

function seleccionarUsuario($url) {
    global $dataUser;
    $dataCedula = $_POST['cedulax'];
    $data = file_get_contents($url);
    $users = json_decode($data, true);
    foreach ($users as $x) {
        if ($dataCedula === $x['cedula']) {
            $dataUser = $x;
        }
    };

};
$user = obtenerData($url);
?>
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
                        <input type="text" placeholder="Ingrese su nombre por favor" name="nombre" value="<?php echo isset($dataUser) ? $dataUser["nombre"]: ""; ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Apellido:</label><br>
                        <input type="text" placeholder="Ingrese su apellido por favor" name="apellido" value="<?php echo isset($dataUser) ? $dataUser["apellido"]: ""; ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Dirección:</label><br>
                        <input type="text" placeholder="Ingrese su dirección por favor" name="direccion" value="<?php echo isset($dataUser) ? $dataUser["direccion"]: ""; ?>">
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
                        <input type="number" placeholder="Ingrese su edad por favor" name="edad" value="<?php echo isset($dataUser) ? $dataUser["edad"]: ""; ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Email:</label><br>
                        <input type="text" placeholder="Ingrese su dirección por favor" name="email" value="<?php echo isset($dataUser) ? $dataUser["email"]: ""; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row caja">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <label for="">Horario:</label><br>
                        <input type="time" name="horario" value="<?php echo isset($dataUser) ? $dataUser["horario"]: ""; ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Team:</label><br>
                        <input type="text" placeholder="Ingrese su team por favor" name="team" value="<?php echo isset($dataUser) ? $dataUser["team"]: ""; ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Trainer:</label><br>
                        <input type="text" placeholder="Ingrese su trainer por favor" name="trainer" value="<?php echo isset($dataUser) ? $dataUser["trainer"]: ""; ?>">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row botones1">
                    <div class="col">
                        <input type="submit" value="✔️" class="boton" name="guardar">
                        <input type="hidden" class="boton" name="id" value="<?php echo isset($dataUser) ? $dataUser["id"]: ""; ?>">
                    </div>
                    <div class="col">
                        <input type="submit" value="❌" class="boton" name="eliminar">
                    </div>
                </div>
                <div class="row botones2">
                    <div class="col">
                        <input type="submit" value="✍🏻" class="boton" name="editar">
                    </div>
                    <div class="col">
                        <input type="submit" value="🔍" class="boton" name="buscar">
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
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($user as $x):
                ?>
                <tr>
                    <td><?php echo $x['nombre']?></td>
                    <td><?php echo $x['apellido']?></td>
                    <td><?php echo $x['direccion']?></td>
                    <td><?php echo $x['edad']?></td>
                    <td><?php echo $x['email']?></td>
                    <td><?php echo $x['horario']?></td>
                    <td><?php echo $x['team']?></td>
                    <td><?php echo $x['trainer']?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="text" name="cedulax" value="<?php echo $x['cedula']?>">
                            <input type="submit" value="⬆️" name="flecha">
                        </form>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>