<style>
  .text-on-pannel {
    background: #fff none repeat scroll 0 0;
    height: auto;
    margin-left: 20px;
    padding: 3px 5px;
    position: absolute;
    margin-top: -47px;
    border: 1px solid #337ab7;
    border-radius: 8px;
  }

  .panel {
    /* for text on pannel */
    margin-top: 27px !important;
  }

  .panel-body {
    padding-top: 30px !important;
  }
</style>

<?php


    require('config.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $_SESSION['username'] = $username;
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' 
  and password='" . hash('sha256', $password) . "'";

        $result = mysqli_query($conn, $query) or die(mysql_error());

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['type'] == 'admin') {
                header('location: admin/home.php');
            } else {
                header('location: index.php');
            }
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
?>




echo '
   
   <div class="container">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> Accès gestion</strong></h3>
     
    
   <form id="verif"  name="verif" action="' . $_SERVER['PHP_SELF'] . '" method="POST" >
					
 <p style="text-align:center;"><label style="font-family:Verdana, Geneva, sans-serif" for="identifiant"> email  </label>
 
 <input  class="form-control"  id="identifiant" name="identifiant" value="" type="text"></p>
 
 <p style="text-align:center; "><label  style="font-family:Verdana, Geneva, sans-serif" for="pwd" >Mot de passe : </label>
   <input class="form-control" type="password" id="pwd" name="pwd" value="" /></p>
                        <p style="text-align:center; width:100%">
						<input type="submit" class="btn btn-primary" id="validation" name="validation" value="Valider" style=" text-align:center"  ></p>
                   </form>
				   </div>
  </div>
  <div>';

?>