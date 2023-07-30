<?php

    require_once('myClass.php');
    $obj=new myClass();
    $data=$obj->selectData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassCrudByBarakaKinywa</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="mt-6">
        <br><br><br>
        <a href="add.php" class="btn btn-primary">Nouvel enregistrement</a>
        <hr>
    <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Noms</th>
            <th scope="col">Adresse</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
          </thead>
          <tbody>
         <?php
         $i=0;
            foreach ($data  as $key => $value) {
                
                $i++;
                ?>
            
          <tr>
            <th scope="row"><?=$i?></th>
            <td><?=$value["noms"]?></td>
            <td><?=$value["adresse"]?></td>
            <td><a href="edit.php?id=<?=$value["id"]?>" class="btn btn-warning">Modifier</a></td>
            <td><a href="delete.php?id=<?=$value["id"]?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
          <?php
           }
           
         ?>
          </tbody>
        </table>
        </div>
    </div>
</body>
</html>