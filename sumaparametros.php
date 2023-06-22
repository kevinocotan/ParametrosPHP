<?php
    
    echo "<h2>Suma de parametros</h2><br>";
    $valor1=$_GET["valor1"] ?? 0;
    
    function sumar($num1, $num2) {
        if (isset($_GET["valor1"])) {
            $valor1=$_GET["valor1"];
            $valor2=10;
            $v3=$valor1+$valor2;
            return $v3;
        }       
    }
    $sum=sumar($valor1,$valor2);
    echo "<h3>El resultado de la suma es: $sum</h3>";

?>