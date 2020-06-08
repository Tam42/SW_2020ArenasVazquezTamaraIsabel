<?php
//Cabecera
  $txt=$_POST['txt'];
  $key=$_POST['key'];

 //Sacar llave
 $k=substr($key, 0, -1);
 $ky=intval($k);


    //Descifrar mensaje
    for($i=0;$i<strlen($txt);$i++){
        $txt[$i]=chr(ord($txt[$i])-$ky);
    }

    //Longitud de texto
    $texts=strlen($txt);
    $m=0;
    $sign=1;

    //Saber cuantos espacios tiene el texto.
    while($m<$texts){
    $l=$txt[$m];
    //Valida si es signo de puntuacion
    if ($l == ' ') {
    $sign++;
    }
    $m++;
}

//Validar que sea la llave correcta
if($sign==$ky){
        echo $txt;
}
else{
    echo "<h1>Su llave es incorrecta</h1>"; 
}

