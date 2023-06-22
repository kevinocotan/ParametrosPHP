<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
    Inserte el numero de pies: <input type="float" name="pies" id="pies">  
        <?php
            if (isset($_POST["pies"])) {
                $pies=$_POST["pies"];
                $yarda=0.33*$pies;
                $pulgada=12*$pies;
                $centimetros=30.48*$pies;
                $metro=0.30*$pies;
                $millas=0.000189394*$pies;

                echo "<br><br>";
                echo "La conversion de pies en yardas es: $yarda <br>";
                echo "La conversion de pies en en pulgadas es: $pulgada <br>";
                echo "La conversion de pies en en centimetros es: $pulgada <br>";
                echo "La conversion de pies en en metros es: $metro <br>";
                echo "La conversion de pies en en millas es: $millas <br>";
                echo "<br>";

            }
        ?>
        <input type="submit" value=" ✅ Calcular" >
    </form>
</body>
</html>