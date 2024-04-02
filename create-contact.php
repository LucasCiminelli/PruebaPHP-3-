<?php

include("conexion.php");


if($_POST["action"] == "AddContact"){
    $name = $_POST["userName"];
    $lastName = $_POST["userLastname"];
    $email = $_POST["userEmail"];
    $phone = $_POST["userPhone"];


    $query = "INSERT into ag_contacto(nombres, apellidos, email, telefono) VALUES ('$name', '$lastName', '$email', '$phone')";

    $result = mysqli_query($conection, $query);

    if($result){
        echo "Añadido correctamente a la db";
    } else{
        echo "Error al añadir un usuario a la db";
    }

}


?>