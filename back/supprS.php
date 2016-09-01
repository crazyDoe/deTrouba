<?php
    include_once('fonctions.php');
    $id = $_GET['id'];

    deleteSoft($id);
    header('Location:modifAutre.php');


?>