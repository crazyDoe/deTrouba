<?php
    include_once('fonctions.php');
    $id = $_GET['id'];

    deleteAlcool($id);
    header('Location:modifAutre.php');


?>