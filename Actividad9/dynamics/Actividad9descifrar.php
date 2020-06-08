<?php
//Cabecera
  $txt=$_POST['txt'];
  $key=$_POST['key'];

 //Sacar llave
 $k=substr($key, 0, -1);
 $ky=intval($k);



    for($i=0;$i<strlen($txt);$i++){
        $txt[$i]=chr(ord($txt[$i])-$ky);
    }


    $texts=strlen($txt);
    $m=0;
    $sign=1;

    while($m<$texts){
    $l=$txt[$m];
    //Valida si es signo de puntuacion
    if ($l == ' ') {
    $sign++;
    }
    $m++;
}

if($sign==$ky){
        echo $txt;
}
else{
    echo "<h1>Su llave es incorrecta</h1>"; 
}

