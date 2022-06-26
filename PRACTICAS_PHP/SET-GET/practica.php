<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    $empleado=$_POST['txtEmpleado'];
    $horas=$_POST['txtHoras'];
    $categoria=$_POST['selCategoria'];

    if($categoria == 'Jefe'){
        $selJ='selectd';
    }else{
        $selJ="";
    }if($categoria == 'Administrativo'){
        $selA='selectd';
    }else{
        $selA="";
    }if($categoria == 'Operario'){
        $selO='selectd';
    }else{
        $selJ="";
    }if($categoria == 'Practicante'){
        $selP='selectd';
    }else{
        $selP="";
    }

    ?>
    </div>

    <div class="Formnulario" >
        <h2> SALARIO DEL EMPLEADO</h2>
        <form action="practica.php" method="POST">
            <label for="">EMPLEADO:</label>
            <input type="text" name="txtEmpleado" class="form-control">
            <label for="">HORAS:</label>
            <input type="text" name="txtHoras" class="form-control">
            <label for="">CATEGORÍA:</label>
            <select name="selCategoria" class="form-control" id="">
                <option value="Jefe">Jefe</option>
                <option value="Administrador">Administrador</option>
                <option value="Operario">Operario</option>
                <option value="Practicante">Practicante</option>
            </select>
            <input type="submit" name="submit" value="PROCESAR">
            <table>
                <tr>
                    <td>Salario Bruto:</td>
                    <td><?php echo "S/. number_format"($sBruto,2,'.',''); ?></td>
                    
                </tr>
                <tr>
                    <td>Descuento:</td>
                </tr>
                <tr>
                    <td>Salario Neto:</td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>

