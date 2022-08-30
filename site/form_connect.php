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

            <div class="title signup">
               Signup Form
            </div>

         </div>

         <div class="form-container">

            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>

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

                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>

               </form>
               <!-- LOGIN FORM -->

               <!-- SIGN UP FORM -->
               <form action="t.inscription.php" method="post" class="signup">

                  <div class="field">
                     <input type="text" name="username" placeholder="Username" required>
                  </div>

                  <div class="field">
                     <input type="email" name="email" placeholder="Email Address" required>
                  </div>

                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="postdata" value="signup">
                  </div>
               </form>
               <!-- SIGN UP FORM -->               
            </div>
         </div>

      </div>

   </body>
</html>

<script>
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});

</script>