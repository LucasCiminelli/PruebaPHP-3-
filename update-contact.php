<?php 

include("conexion.php");

if (isset($_POST["action"]) && $_POST["action"] == "updateContact") {
    if (isset($_POST["userId"])) {
        $id = $_POST["userId"];
        $userName = $_POST["userName"];
        $userLastname = $_POST["userLastname"];
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];

        $query = "UPDATE ag_contacto SET nombres = '$userName', apellidos = '$userLastname', telefono = '$userPhone', email = '$userEmail' WHERE id_contacto = '$id'";

        $result = mysqli_query($conection, $query);

        if ($result) {
            echo "Usuario actualizado con éxito";
        } else {
            echo "Error al actualizar el usuario";
        }
    } else {
        echo "No se proporcionó un ID de usuario válido";
    }
} else {
    echo "Solicitud incorrecta";
}

?>