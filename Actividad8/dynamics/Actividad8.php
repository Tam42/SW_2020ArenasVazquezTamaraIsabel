<?php
//Cabecera
$txt=$_POST['txt'];
$key=$_POST['key'];
// Se comvierte el texto a mayúsculas
$text=strtoupper($txt);
        //Función para cifrar. Se cuentan la cantidad de carecteres que tiene el texto. Se chr devuelve un valor Ascii y el ord convierte en un número del 0-255.
        function cifrar($texto,$llave){
            for($i=0;$i<strlen($texto);$i++){
                $texto[$i]=chr(ord($texto[$i])+$llave);
            }
            return $texto;
        }
                //Se guarda la función en una variable y se imprime.
                $cifrado=cifrar($text, $key);
                echo "$cifrado";
?>