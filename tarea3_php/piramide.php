<?php 

$cadena = 'AQUI CUALQUIER CADENA'; // LA CADENA
$lonngitud_cadena = strlen ($cadena); // $lonngitud_cadena tendra la longitud de la cadena
if(($lonngitud_cadena%2) != 0){ // verificamos si la longitud de la cadena es impar
    echo "<label style='color: blue'>longitud de la cadena es Impar ¡CORRECTO!</lable>";
}else{
    echo "<label style='color: red'>¡La longitud de la cadena no es impar!<br>¡INCORRECTO!</lable>";
}
$caracteres = array(); // creamos un arreglo

$caracteres = generarArray($cadena); // asignamos al arreglo los caracteres de la cadena

//generarPiramide($caracteres, $lonngitud_cadena); // generamos la piramide

function generarArray($cadena_){ // metodo que separa la los caracteres de la cadena en arreglos
    $r = array();
    for($i=0; $i<strlen($cadena_); $i++) 
         $r[$i] = $cadena_[$i];
    return $r;
}

imprimirPiramide($caracteres, $lonngitud_cadena); // llamamos a imprimir la cadena

function imprimirPiramide($array_, $long_cadena){
    echo "<br>";
    $mitad = (($long_cadena+1)/2); // toma el valor medio de la cadena incrementando en 1 por q es numero impar
    for ($i=$long_cadena; $i>=1; $i--) {     // recorremos la cadena de mayor a menor
        $auxi = $i%2; // si el numero no es divisible entre 2
        if($auxi != 0){
            for($cont=0; $cont<=$i; $cont++) {// imprimimos espacios
                 echo '&nbsp;';    
            }  
            $cont--; 
            $cantidad = $long_cadena-$cont;
            //echo $posicion;
            $auxi2 = $mitad; // el contador del for decrementa su valor 
            for ($k=0; $k<=$cantidad; $k++) { // cantidad de digitos que se imprimira 
                echo $array_[$auxi2-1]; // imprimimos los datos
                $auxi2++; //cada interaccion incrementa el valor
            }
            $mitad--; // el valor mitad del array disminuye en 1
            echo "<br>";
        }    
    }  
}
?>