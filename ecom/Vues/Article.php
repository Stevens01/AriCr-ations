

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <article>
    <?php 
    

   $req = $BD->affiche("SELECT * FROM article " );

    if(is_array($req))
    foreach($req as $row){ 
        ?>
        <h2 value="<?= $row['titre'] ?> "><?= $row['titre'] ?></h2>
        <div class="metadata" value="<?= $row['date'] ?> "> <?= $row['date'] ?></div>
        <img src="img/<?= $row['image'] ?>"  style="height:150px;" alt="">
        <p value="<?= $row['contenue'] ?> "><?= $row['contenue'] ?></p>
        <p value="<?= $row['description'] ?> "><?= $row['description'] ?></p>
         <?php 
    }
  ?>
      
    </article>
</body>
</html>