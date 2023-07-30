<?php
if(isset($_POST['submit']))
{
    require_once('myClass.php');
    $obj=new myClass();
    $obj->setNoms($_POST['noms']);
    $obj->setAdresse($_POST['adresse']);
    $obj->insertData();
}
?>