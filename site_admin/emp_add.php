<?php 
include('layout/header_admin.php');
include ('model/emp.php');
?>

    <div class="content">

<?php include('layout/nav_admin.php')?>

      <div class="list">
        <div class="listA" style="height: 480px">
          <h1 class="m1">Ajouter un employes</h1>

          <hr>
          
          <form class="form" action="emp_add_save.php" method="post" enctype="multipart/form-data" >
              <label class="label" for="product_name"> Prénom :</label>
              <input class="input" type="text" name="emp_name" placeholder="Prenom">

              <label class="label" for="emp_lastname"> Nom :</label>
              <input class="input" type="text" name="emp_lastname" placeholder="Nom">

              <label class="label" for="emp_email"> Email :</label>
              <input class="input" type="text" name="emp_email" placeholder="Email">

              <label class="label" for="emp_phone"> Téléphone :</label>
              <input class="input" type="text" name="emp_phone" placeholder="Telephone">

              <label class="label" for="emp_status"> Status :</label>
              <input class="input" type="text" name="emp_status" placeholder="Status">

              <label class="label" for="emp_username"> Username :</label>
              <input class="input" type="text" name="emp_username" placeholder="Username">

              <label class="label" for="emp_password"> Mot de passe :</label>
              <input class="input" type="text" name="emp_password" placeholder="Mot de passe">

              <label class="label" for="emp_salaire"> salaire :</label>
              <input class="input" type="text" name="emp_salaire" placeholder="Salaire">

              <label class="label" for="role_id"> role :</label>
              <input class="input" type="text" name="role_id" placeholder="Role">

              <input class="input" type="submit" value="Ajouter" name="submit">
          </form>
        </div>
      </div>
    </div>


<?php include('layout/footer_admin.php') ?>