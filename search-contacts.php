<?php

include("conexion.php");

$id = intval($_POST["id"]);

if ($_POST["action"] == "searchContact") {
    if (!empty($id)) {
        $query = "SELECT * FROM ag_contacto WHERE id_contacto = $id";
        $result = mysqli_query($conection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $json = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $json[] = array(
                    "id" => $row["id_contacto"],
                    "nombre" => $row["nombres"],
                    "apellido" => $row["apellidos"],
                    "telefono" => $row["telefono"],
                    "email" => $row["email"],
                );
            }

            $jsonToString = json_encode($json);
            echo $jsonToString;
        } else {
            echo json_encode(array("error" => "ID incorrecto."));
        }
    } else {
        echo json_encode(array("error" => "ID incorrecto."));
    }
}



 //OTRA MANERA DE HACERLO

        //$intId = intval($_POST["id"]);
        //$query_select = mysqli_query($conection, "SELECT * FROM ag_contacto WHERE id = $intId");
        //$num_rows = mysqli_num_rows($query_select);
        //if($num_rows > 0){
            //$arrContact = mysqli_fetch_assoc($query_select);
            //$json = json_encode($arrContact, JSON_UNESCAPED_UNICODE);
            // echo $json;

        //}else{
            //echo "notData";
       // }
        //

?>