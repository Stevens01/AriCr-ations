<?php
if(!empty($_POST)){
            extract($_POST);
            $valide=true;
        
            if(isset($_POST['btnS'])){
        
              $nom=htmlentities(trim($nom));
              $prenom=htmlentities(trim($prenom));
              $email=htmlentities(trim($email));
              $pseudo=htmlentities(trim($pseudo));
              $pwd=htmlentities(trim($pwd));
              
        
               }
        
               if(!empty($nom) || !empty($prenom) || !empty($email) || !empty($pseudo) || !empty($pwd)){
                
                $BD-> ajout("INSERT INTO clients(nom, prenom, email, login,pass) VALUES (?,?,?,?,?)", array($nom, $prenom, $email, $pseudo, $pwd));
        
                  $message="Client enregistré avec succès";
        
               } else
                {
                $valide=false;
                $error="Veuillez remplir tous les champs";
              }
        
               
        
          }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <div class="form-group">
  <?php 
    if(isset($error)){ ?>
      <div style="color: red;"><?= $error ?> </div>
      <?php }
  ?>

<?php 
    if(isset($message)){ ?>
      <div class="btn btn-success"><?= $message ?> </div>
      <?php }
  ?><br><br>
    <label for="">Nom</label>
    <input type="text" value="<?php if(isset($nom)){echo $nom;} ?>" class="form-control" name="nom">
    
  </div>
  <div class="form-group">
    <label for="">Prenom</label>
    <input type="text" value="<?php if(isset($prenom)){echo $prenom;} ?>" class="form-control"  name="prenom">
  </div>

  <div class="form-group">
    <label for="">email</label><br>
    <input type="text" value="<?php if(isset($email)){echo $email;} ?>" class="form-control"   name="email">
  </div>

  
  <label for="">Pseudo</label>
  <input type="text" value="<?php if(isset($pseudo)){echo $pseudo;} ?>" name="pseudo" id="" class="form-control" >
  <br>
  <label for="">Password</label>
    <input type="password" name="pwd" value="<?php if(isset($pwd)){echo $pwd;} ?>" id="" class="form-control"><br><br>
    <br>
    <button type="submit" class="btn btn-primary" name="btnS">Sauvegarder</button>
  
    
       
</form>
</body>
</html>