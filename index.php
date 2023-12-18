<?php require('conexion.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="">

    <div class=" mt-3 container text-center">
    <h1 class="mt-2">H.G.S.Z MF 15</h1>
    <h2 >Sistema de Control / Registro de contraseñas </h2>
        <form method="POST" action="">
            <div class=" row align-items-start">
                <div class="mt-3 col-8">
                    <input class="form-control form-control-lg" name="nvaContra" type="text" minlength="5" placeholder="Ingrese la contraseña de su PC" required />
                </div>
                <div class="mt-3 col-4">
                    <button class="btn btn-success btn-lg" type="submit">Guardar</button>
                </div>
            </div>


        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el valor del input
            $nvaPwd = $_POST['nvaContra'];
            // Defino el valor de las varaibles que voy a asignar en el query. 
            $ip_usuario = $_SERVER["REMOTE_ADDR"];
            $fecha_hora = date("Y-m-d H:i:s");
            $nombreUsuario = getenv('USERNAME');

            // Muestro que se guardo el registro
            echo '<div class="mt-3 card"> <br>La contraseña del usuario  <br>'.' '
                 .'<strong>'.$nombreUsuario.'</strong> <br>'
                 .' Se a registrado en el sistema por: <br>'.' '.'<strong>'. $nvaPwd. '</strong>';
           
            

          

            // Inserta el registro en la base de datos
            $sql = "INSERT INTO accesos (ip,usuario,pwdnueva,fecha) VALUES ('$ip_usuario','$nombreUsuario','$nvaPwd','$fecha_hora')";

            if ($conn->query($sql) === TRUE) {
                echo "<br> Registro Actualizado correctamente  <br>";
                echo $ip_usuario;
                
            } else {
                echo "Error al insertar el registro: " . $conn->error;
            }

            // Cierra la conexión
            $conn->close();
        }
        ?>
         
    </div>
   
</body>
<!-- <div class="row"><footer class="text-end blockquote-footer">Las Varas <cite title="Source Title">Nayarit</cite></footer></div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function aviso() {
        console.log();

    }
</script>

</html>