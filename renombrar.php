<?php
    $nuevoNombre ="";
    if($_GET){
        if(isset($_GET["file"])){
            $nombre = base64_decode($_GET["file"]);
            
        }
    }
    if($_POST){
        $nuevoNombre = "./archivos/".$_POST["nuevoNombre"];
        $nombre = "./archivos/".$_POST["nombre"];
       

    if(rename($nombre,$nuevoNombre)){
        echo "Se ah cambiado el nombre exitosamente";
     }
     else{ 
        echo "Fallo";
     }
    }
    
    echo"<title>Renombrar</title>
    <form method=\"post\" action=\"$_SERVER[PHP_SELF]\">
    <input type='hidden' readonly name='nombre' value='$nombre'>
        <table align='center' width='95%'>
            <tr><td align='center'><h1>Edici&oacute;n de Archivos de Texto</h1></td></tr>

            <tr><td align='center'>Nuevo nombre del fichero:
            <input type='text' name='nuevoNombre' id='nuevoNombre' class='caja'></tr>
            <span id='msjnuevoNombre' name='msjnuevoNombre'></span></td>
            
            <td align='center'>
                    <input type=submit value='Aplicar Cambios' class='boton'>
                    <input type=button value='Cancelar' class='boton' onclick=\"location.replace('index.php');\",>
                </td></table></form>";
?>