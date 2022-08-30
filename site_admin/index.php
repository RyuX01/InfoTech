<?php session_start()?>

<?php
   include('model/database.php');
   $db = db_connect();
?>

<link rel="stylesheet" href="../site/public/css/style.css">
<link rel="stylesheet" href="../site/public/css/grille.css">
<!--content-->

   <body style="background-color: #5c20e4; padding: 56px;">

      <div class="wrapper">

         <div class="title-text">

            <div class="title login">
               Login Form
            </div>

         </div>

         <div class="form-container">

            <div class="form-inner">
               <!-- LOGIN FORM -->
               <form action="connect.php" method="post" class="login">

                  <div class="field">
                     <input type="text" name="username" placeholder="Username" required>
                  </div>
                  
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>

                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>

                  <div><?php if (isset($_GET['err'])) echo "<p style= 'color:red'>Identifiant ou mot de passe incorrect</p>"; ?></div>
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="postdata" value="login">
                  </div>
               </form>
               <!-- LOGIN FORM -->             
            </div>
         </div>

      </div>

   </body>
</html>


