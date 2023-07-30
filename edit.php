<?php

    require_once('myClass.php');
    $obj=new myClass();
   
        $obj->setId($_GET['id']);
        $toEdit=$obj->selectOne();
        $value=$toEdit[0];

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
        <form action="update.php?id=<?=$value["id"]?>" method="post" class="mt-5">
         <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Noms</span>
           <input value="<?=$value["noms"]?>" type="text" name="noms" class="form-control form-control-sm"  aria-label="Noms" aria-describedby="basic-addon1">
         </div>
         <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Adresse</span>
           <input value="<?=$value["adresse"]?>" type="text" name="adresse" class="form-control form-control-sm"  aria-label="Noms" aria-describedby="basic-addon1">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    
</body>
</html>