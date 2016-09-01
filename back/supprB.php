<?php
    include_once('fonctions.php');
    $id = $_GET['id'];

    deleteBeer($id);
    header('Location:modifPintes.php');


?>