<?php
//Cabeza
$txt=$_POST['txt'];

//Texto mayúsculas
$text=strtoupper($txt);
//Longitud de texto
$texts=strlen($text);
$m=0;
$sign=1;

//Saber cuantos espacios tiene el texto.
while($m<$texts){
    $l=$txt[$m];
    //Valida si es espacio
    if ($l == ' ') {
       $sign++;
     }
     $m++;
    }

//Función para cifrar. Se cuentan la cantidad de carecteres que tiene el texto. Se chr devuelve un valor Ascii y el ord convierte en un número del 0-255.
function cifrar($texto,$llave){
    for($i=0;$i<strlen($texto);$i++){
        $texto[$i]=chr(ord($texto[$i])+$llave);
        utf8_encode($texto[$i]);
    }
  return $texto;
}

//Número aleatorio
$random=mt_rand(0,9);


//Variables para la función
$cifrado=cifrar($text, $sign);

//Se imprime cifrado y llave
echo "Su cifrado es:".$cifrado;
echo "<br>";
echo "<br>";
echo "Su llave es:".$sign.$random;

?>