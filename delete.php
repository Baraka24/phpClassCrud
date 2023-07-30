<?php

    require_once('myClass.php');
    $obj=new myClass();
    if(isset($_GET['id']))
    {
        $obj->setId($_GET['id']);
        $obj->deleteData();
        echo "<script>alert('Données supprimées avec succès!');document.location='index.php'</script>";
    }

?>