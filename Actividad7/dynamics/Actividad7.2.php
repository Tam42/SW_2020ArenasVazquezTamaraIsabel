<?php
    if (isset($_POST['enviar'])){
        $rfc=$_POST['rfc'];
        $pass=$_POST['pass'];
        if(preg_match('/^([A-Z]{4}|[A-Z]{5})([0-9]{2})(((0)[1-9])|((1)[0-2]))(((0)[1-9])|([1-2][0-9])|((3)[0-1]))[A-Z\d]{3}?/',$rfc)){
            echo "Dato válido:".$rfc;
        }
        else{
            echo "Dato inválido:".$rfc;
        }
        echo "<br><br>";
        if(preg_match('/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!-.]).{10,25})/',$pass)){
            echo "Su contraseña: ".$pass." es segura.";
        }
        else{
            echo "Su contraseña: ".$pass." es insegura.";
        }
        echo "<br><br>";

    }
    echo"<form action='Actividad7.php' method='post'>
      <fieldset>
       <legend><h3>Ingrese sus datos</h3></legend>
        <p>RFC</p>
        <br>
        <input type='text' name='rfc' placeholder='Ejemplo: PEHC651213' required pattern='^([A-Z]{4}|[A-Z]{5})([0-9]{2})(((0)[1-9])|((1)[0-2]))(((0)[1-9])|([1-2][0-9])|((3)[0-1]))[A-Z\d]{3}?' title='El RFC debe contener las p'>
        <br>
        <br>
        <p>Nombre</p>
        <br>
        <input type='text' name='name' placeholder='Ejemplo: Carlos' pattern='[a-zA-ZÁÉÍÓÚÑáéíóúñ]{3,20}' title='Este no es un nombre' required>
        <br>
        <br>
        <p>Apellido Paterno</p>
        <br>
        <input type='text' name='pat' placeholder='Ejemplo: Perez' pattern='[a-zA-ZÁÉÍÓÚÑáéíóúñ]{3,20}' title='Este no es un apellido' required>
        <br>
        <br>
        <p>Apellido Materno</p>
        <br>
        <input type='text' name='mat' placeholder='Ejemplo: Hernandez' pattern='[a-zA-ZÁÉÍÓÚÑáéíóúñ]{3,20}' title='Este no es un apellido' required>
        <br>
        <br>
        <p>Fecha de Nacimiento</p>
        <br>
        <input type='date' name='date'>
        <br>
        <br>
        <p>Colegio</p>
        <br>
        <select name='college'>
          <optgroup label='I'>
            <option>Física</option>
            <option>Informática</option>
            <option>Matemáticas</option>
          </optgroup>
          <optgroup label='II'>
            <option>Biología</option>
            <option>Educación_Física</option>
            <option>Morfología,Fisiología_y_Salud</option>
            <option>Orientación_Educativa</option>
            <option>Psicologia_e_Higiene_Mental</option>
            <option>Química</option>
          </optgroup>
          <optgroup label='III'>
            <option>Ciencias_Sociales</option>
            <option>Geografía</option>
            <option>Historia</option>
          </optgroup>
          <optgroup label='IV'>
            <option>Alemán</option>
            <option>Artes_Plásticas</option>
            <option>Danza</option>
            <option>Dibujo_y_Modelado</option>
            <option>Filosofía</option>
            <option>Francés</option>
            <option>Inglés</option>
            <option>Italiano</option>
            <option>Letras_Clásicas</option>
            <option>Literatura</option>
            <option>Música</option>
            <option>Teatro</option>
          </optgroup>
          <optgroup label='Otro'>
            <option>ETE</option>
          </optgroup>
        </select>
        <br>
        <br>
        <p>Contraseña</p>
        <br>
        <input type='password' name='pass' pattern='^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!-.]).{10,25})' title='La contraseña debe contener al menos 10 caracteres, usando mayúsculas, minúsculas, números y caracteres especiales, al menos dos de los mencionados.'  required>
        <br>
        <br>
        <input type='submit' value='Enviar' name='enviar'>
       </fieldset>
    </form>";
    ?>