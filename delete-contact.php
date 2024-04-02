<?php

include("conexion.php");


if($_POST["action"]=="deleteContact"){

$id = $_POST["id"];

$query = "DELETE from ag_contacto WHERE id_contacto = $id";

$result = mysqli_query($conection, $query);


if($result){
    echo "Contacto eliminado correctamente";
} else{
    echo "Error al eliminar contacto";
}


}




?>