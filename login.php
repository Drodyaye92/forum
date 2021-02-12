   <?php 
  require_once('connexion.php');

  if(isset($_POST['submit'])){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdp_conf = $_POST['mdp1'];
    if($lastName !="" && $firstName !="" && $email !="" && $mdp !="" && $mdp_conf !="" && $role !=""){
    $q=$dbd->prepare("INSERT INTO dev ( lastName,firstName,email,mdp,mdp_conf,role ) VALUES(:lastname,:firstName,:email,:mdp,:mdp_conf,:role)");
    $q->bindParam(':lastname',$lastName);
    $q->bindParam(':firstname',$firstName);
    $q->bindParam(':email', $email);
    $q->bindParam(':mdp', $mdp);
    $q->bindParam(':mdp_conf', $mdp_conf);
    $q->bindParam(':pass',password_hash($password,PASSWORD_DEFAULT));
    $q->execute();
 
      if($lastName<= 255 && $firstName <=255){
        
      }
      else{
        echo "Votre nom ou prenom depasse la taille exiger";
      }
    }
    else{
      echo "tout les champs doivent etre remplis";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" media="screen">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    


    
    

    <title>Bienvenue a lacsoftforum</title>
  </head>
  <body> 
  <section class="gauche">
       <div class="cote"> 
           <div>
               <img src="images/lacsoftforum.png" alt="" width="350px">
           </div> 
          
       </div>
  
        
        <form action="" method="POST" class="design">
        <div class="form">
        <div class="tab-tete">
            <div class="active"><h3>LOGIN</h3></div>
            <div><h3>SING UP</h3></div>
          </div>
          <div class="tab-contenu">
            <div class="tab-corp active">
              <div class="form-element">
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
              </div>
              <div class="form-element">
                <button>Connexion</button>
              </div>
            </div>

            <div class="tab-corp">
              <div class="form-element">
                <input type="text" class="form-control" placeholder="Lastname" name="lastName">
              </div>
              <div class="form-element">
                <input type="text" class="form-control" placeholder="firstname" name="firstName">
              </div>
              <div class="form-element">
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Confirmation de mot de passe" name="mdp1">
              </div>
              <div class="form-element">
                <button name="submit">Inscrire</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
</div>
  </section>
    <section class="droite">
       <h1>Lac Soft Forum</h1>
       <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloremque nostrum asperiores aliquam inventore autem odio, ipsum nihil, ipsam ea ipsa earum neque magni quas sapiente velit. Harum, suscipit eius?Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facere neque, animi et vero provident id unde aliquid ad cupiditate sequi nobis autem iure sit facilis excepturi, laborum quas tenetur?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat autem quia inventore cum dolores officia fuga, quam repellendus voluptates neque! Aut libero praesentium illum. Nemo dolores distinctio saepe enim possimus?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur id laboriosam accusamus repellendus reprehenderit provident quidem? Ea a itaque, nostrum assumenda perspiciatis facilis! Natus dolore veniam repellat suscipit quisquam dolores.</h4>
   </section>
    </div>
   
    


    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="styles/app.js"></script>
    <script src="styles/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

  </body>
</html>

<!--
   <section class="gauche">
   <aside class="cote"> 
       <div> 
           <img src="images/lacsoftforum.png" alt="" width="350px">
      </div>
   <div>
       <h3><button type="submit" class="btn btn-primary">log in</button></h3>
       <h3><button type="submit" class="btn btn-primary">sign up</button></h3>
       
   </div>
    <form class="radus">
    <h3>Login now</h3>
  <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">       
  </div>
  <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <small id="emailHelp" class="form-text text-muted">forgot password?</small>
  </div>
  <button type="submit" class="btn btn-primary">login</button>
</form>
   </aside>
   </section> 
   <section class="droite">
       <h1>Lac Soft Forum</h1>
       <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloremque nostrum asperiores aliquam inventore autem odio, ipsum nihil, ipsam ea ipsa earum neque magni quas sapiente velit. Harum, suscipit eius?Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facere neque, animi et vero provident id unde aliquid ad cupiditate sequi nobis autem iure sit facilis excepturi, laborum quas tenetur?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat autem quia inventore cum dolores officia fuga, quam repellendus voluptates neque! Aut libero praesentium illum. Nemo dolores distinctio saepe enim possimus?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur id laboriosam accusamus repellendus reprehenderit provident quidem? Ea a itaque, nostrum assumenda perspiciatis facilis! Natus dolore veniam repellat suscipit quisquam dolores.</h4>
   </section>
   <script src="styles/app.js"></script>-->