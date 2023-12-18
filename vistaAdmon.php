<?php require('conexion.php'); 

$sql = "SELECT * FROM accesos";
$resultado = $conn->query($sql);

//verifica si la consuta fue exitosa
if($resultado){
    //muestra resultados
    while($fila = $resultado->fetch_assoc()){
        echo "ip: " . $fila['ip'] . " - contraseña Nueva: " . $fila['pwdnueva'] . " - Fecha: " . $fila['fecha'] . "<br>";
    }
}

?>

<!-- <h1>Usuario: admnv1210</h1>
    <h2>Ubicacion: Medicina Interna</h2>
    <h2>Ip: 11.45.19.5</h2>
    <h3>Contraseña Anterior: Noviembre*2023</h3> -->