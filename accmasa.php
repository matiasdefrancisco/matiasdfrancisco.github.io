<?php

 if(isset($_POST["kg"]) and isset($_POST["m"])){

 $kg=$_POST["kg"];
 $m=$_POST["m"];

 }
 $potencia= $m*$m;
 $cuenta= ceil($kg/$potencia);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Accion Masa</title>
</head>
<body>
    <div class="container-xl">
        <h1 class="titulo-masa">Herramienta de calculo de <br><span>Indice de Masa corporal de un cuerpo</span> </h1>

        <h3 class="h3-masa"><?php echo "como pesaba $kg kg. ";?></h3><br>
        <h3 class="h3-masa"><?php echo "y media $m M.";?></h3><br>

        <h2 class="h2-masa"><?php echo "La persona cuenta con un indice de masa corporal de :  $cuenta IMC.( Entra en el rango de ";

        if($cuenta<=18.5){
            echo "Bajo peso)";
        }
        if($cuenta>18.5 and $cuenta<=24.9){
            echo "Normal)";
        }
        if($cuenta>=25 and $cuenta<=29.9){
            echo "Sobrepeso)";
        }
        if($cuenta>=30){
            echo "Obesidad)";
        }
        
        ?>
        </h2>

        <div class="container-tabla">
            <table border="1" cellspacing="2" bgcolor="white" class="tabla">
    
              <tr>
              <th class="resaltar">IMC</th>
              <th class="resaltar">Nivel de Peso</th>
              </tr>
              <tr>
              <td>Por debajo de 18.5</td>
              <td>Bajo peso</td>
              </tr>
              <tr>
              <td>18.5 - 24.9</td>
              <td>Normal</td>
              </tr>
              <tr>
              <td>25.0 - 29.9</td>
              <td>Sobrepeso</td>
              </tr>
              <tr>
              <td>30.0 o mas</td>
              <td>Obesidad</td>
              </tr>
              
              
              </table>
          </div>

        <h3>
        <a href="index.php#indice" class="boton">Volver a calcular</a>
        </h3>
     
    </div>
    
</body>
</html>