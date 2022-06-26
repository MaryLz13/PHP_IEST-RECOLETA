<?php
    if(isset($_POST['btnAgregar'])){
        $fila0 = $_POST['fila0'];
        $fila1 = $_POST['fila1'];

        $usuarios = array('$fila0' , '$fila1');

        foreach ($usuarios as $fila => $valor){
           //foreach ($fila as $columna => $valor){
               echo $fila . $valor . " ";
            }
           echo "</br>";
        
    }

    //hola mundo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays.php" methot="POST">
        <h3>Usuario 1</h3>
        Nombre: <input type="text" name="fila0[nombre]">
        Apellidos: <input type="text" name="fila0[apellido]">
        Edad: <input type="text" name="fila0[edad]">
        <h3>Usuario 2</h3>
        Nombre: <input type="text" name="fila1[nombre]">
        Apellido: <input type="text" name="fila1[apellido]">
        Edad: <input type="text" name="fila1[edad]"></br>
        <input type="submit" name="btnAgregar" value="Agregar">
        <input type="reset" name="btnLimpiar" value="Limpiar">
    </form>
</body>
</html>