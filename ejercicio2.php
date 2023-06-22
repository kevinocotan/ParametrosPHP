<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 </title>
</head>
<body>

<h1>Calcular el Factorial </h1>
    <form action="ejercicio2.php" method="post">
        Ingrese un numero: <input type="number" name="valor1"><br>

        <?php
            function Factorial() {
                if (isset($_POST["valor1"])) {
                    $valor1=$_POST["valor1"];
                    $factorial=1;
                    $cont=1;
                        if ($valor1<=0) {
                            echo "<h3>El numero tiene que ser mayor que cero.</h3>";
                        } else {
                            do {
                                $factorial*=$cont++;
                            } while ($cont <= $valor1);
                            return $factorial;
                        }
                }
                
            }
            echo "<h3>El factorial de $valor1 es : ".Factorial();
                            
        ?>
        <br><br>
        <input type="submit" value=" ✅ Calcular" >
        <input type="reset" value=" ❎ Borrar" > 
        
        <br><br>
    </form> 



    <h1>Palabra palindroma</h1>
    <form action="ejercicio2.php" method="post">
        Escriba una palabra: <input type="text" name="texto" id="texto"><br>
        <?php
        function palindroma(){
            if (isset($_POST["texto"])) {
                $texto=$_POST["texto"];
                $contador=strlen($texto);
                $invertido="";

                if ($texto==null) {
                    echo "";
                }else {
                    for ($i=0;$i<$contador;$i++) { 
                        $invertido.=$texto[$contador-$i-1];
                    }                
                    if ($texto==$invertido) {
                        echo "<h3>La palabra es palindroma.</h3>";
                    }else {
                        echo "<h3>La palabra no es palindroma.</h3>";
                    }   
                }
            }
        }
        echo palindroma();
        ?>
        <br>
        <input type="submit" value=" ✅ Determinar" >
        <input type="reset" value=" ❎ Borrar" > 
    </form>


    <br><br>
    <h1>Numeros primos</h1>
    <form action="ejercicio2.php" method="post">
        Ingrese un numero: <input type="number" name="primo" id="primo"><br>
        <?php
        function numeroprimo(){
            if (isset($_POST["primo"])) {
                $primo=$_POST["primo"];
                $cont=$primo/2;
                $numero=TRUE;
                for ($i=2;$i<=$cont;$i++){
                    if ( $primo%$i == 0){
                        $numero=false;
                    }           
                }       
                if ($numero==TRUE){
                    echo "<h3>El numero es primo.</h3>";
                }else{
                    echo "<h3>El numero no es primo.</h3>";
                }        
            }
        }
        echo numeroprimo();
        ?>
        <br>
        <input type="submit" value=" ✅ Calcular" >
        <input type="reset" value=" ❎ Borrar" > 
    </form>



    <form action="ejercicio2.php" method="post">
        <br><br>
        <h1>Numero pares o impares</h1>
        Ingrese un numero: <input type="number" name="valor" id="valor"><br>
        <?php
        function pares_impares(){
            if (isset($_POST["valor"])) {
                $valor=$_POST["valor"];

                if ($valor%2==0) {
                   echo "<h3>El numero que ingreso es par.</h3>";
                }else {
                    echo "<h3>El numero que ingreso es impar.</h3>";
                }
            }
        }
        echo pares_impares();
        ?>
        <br>
        <input type="submit" value=" ✅ Calcular" >
        <input type="reset" value=" ❎ Borrar">
    </form>


    <form action="ejercicio2.php" method="post">
    <br><br>
    <h1>Tabla de multiplicar</h1>
    Introduzca el numero de la tabla que desea ver: <input type="float" name="num" id="num">

    <br><br>
    <table border="1">
        <tr>
            <th>Multiplicando</th>
            <th>&nbsp;</th>
            <th>Multiplicador</th>
            <th>&nbsp;</th>
            <th>Total</th>
        </tr>
        <?php
        function tabla(){
            if (isset($_POST["num"])) {
                $num=$_POST["num"];
                $cont=1;
                do {
                    $r=$cont*$num;
                    echo "<td>$cont</td>\n";
                    echo "<td>X</td>\n";
                    echo "<td>$num</td>\n";
                    echo "<td>=</td>\n";
                    echo "<td>$r</td>\n";
                    echo "</tr>\n";
                    $cont++;
                } while ($cont<=10);
            }
        }
        echo tabla();
        ?>
    </table>
    </td>
    <br>
    <input type="submit" value=" ✅ Calcular" >
    <input type="reset" value=" ❎ Borrar">
    </form>
    
</body>
</html>