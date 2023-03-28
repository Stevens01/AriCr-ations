<?php
if(!empty($_POST)){
            extract($_POST);
            $valide=true;
        
            if(isset($_POST['cnx'])){
        
              $login=htmlentities(trim($login));
              $pwd=htmlentities(trim($pwd));
                 
               if(!empty($login) || !empty($pwd) ){
                $req2=$BD->affiche("SELECT * FROM user,clients WHERE user.login=clients.login AND user.pass=clients.pass "); 
                
               
                    if($req2[0]==""){
                        $valide=false;
                        $msg="";
                        header('location: index.php?control=connectADmin');
                    }
    
                   
                        header('location: index.php?control=Article');
                    
        
               } else
                {
                $valide=false;
                $error="Veuillez remplir tous les champs";
              }
        
               
        
          }
    
        }
        ?>

<form action=" index.php?control=connectAdmin" method="post">

<?php 
    if(isset($erAut)){ ?>
      <div style="color: red;"><?= $erAut ?> </div>
      <?php }
  ?>
<label for="">Pseudo</label>
    <input type="text" name="login" value="<?php if(isset($login)){echo $login;} ?>" id="" class="form-control">
    <label for="">Password</label>
    <input type="password" name="pwd" value="<?php if(isset($pwd)){echo $pwd;} ?>" id="" class="form-control"><br><br>
    
    <!-- <a href="index.php?control=SectADmin"> -->
    <button name="cnx" value="hvh"class="btn btn-primary">Valider </button>