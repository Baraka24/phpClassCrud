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
        <form action="insert.php" method="post" class="mt-5">
         <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Noms</span>
           <input type="text" name="noms" class="form-control form-control-sm" placeholder="Noms" aria-label="Noms" aria-describedby="basic-addon1">
         </div>
         <div class="input-group mb-3">
           <span class="input-group-text" id="basic-addon1">Adresse</span>
           <input type="text" name="adresse" class="form-control form-control-sm" placeholder="Adresse" aria-label="Adresse" aria-describedby="basic-addon1">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    
</body>
</html>