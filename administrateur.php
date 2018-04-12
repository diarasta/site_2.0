<?php 
  session_start(); 

 
$bdd= new PDO('mysql:host=127.0.0.1;dbname=blog','diamanka','yayebaye');
$utilisareurs=$bdd->query('SELECT username FROM users ORDER BY username');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Diamanka</title>
<meta name="description" content="">
<meta name="author" content="771348071">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
  
      <a class="navbar-brand"  href="#">Page de l'administrateur</a>

      <ul class="nav navbar-nav">
      <li class="active"><a href="login.php">Deconnexion</a></li>
          </ul>
    </div>
        </div>
            </nav>



   <div>
   	<h2> Liste des utilisareurs actuellement connectes</h2>
   </div>
           <div>
                  <form method="POST">


               <label> les membres du site :</label>
        <select>
 
           <?php while ($d=$utilisareurs->fetch()) {?>

      <option> <?= $d['username'] ?> </option><br>

            <?php   }   ?>
     
      </select>

         <?php 
     $tuer=$_POST['membre'];  
         if (isset($_POST['supprimer']))
              {
  
      $sql="DELETE FROM 'users' WHERE username='$tuer'";
              }
        ?>
    
     enter le nom du membre a supprimer  <input type="text" name="membre" /> <br>
      <input type="submit" name="supprimer" value="supprimer"/> 
        </form>

    
                    </div>

  

</body>
</html>



