<?php 
include('layout/header_admin.php');
include ('model/emp.php');

$db = db_connect();
$id = $_GET['id_sent'];

$requete = emp_get_one($db, $id);
$emp = $requete -> fetch(PDO::FETCH_ASSOC);
?>

    <div class="content">

<?php include('layout/nav_admin.php')?>

      <div class="list">
        <div class="listA" style="height: 480px">
          <h1 class="m1">Modifier un employes</h1>

          <hr>
          
          <form class="form" action="emp_add_save.php" method="post" enctype="multipart/form-data" >
              <label class="label" for="product_name"> Prénom :</label>
              <input class="input" type="text" name="emp_name" value="<?php echo $emp['emp_name']?>">

              <label class="label" for="emp_lastname"> Nom :</label>
              <input class="input" type="text" name="emp_lastname"  value="<?php echo $emp['emp_lastname']?>">

              <label class="label" for="emp_email"> Email :</label>
              <input class="input" type="text" name="emp_email" value="<?php echo $emp['emp_email']?>">

              <label class="label" for="emp_phone"> Téléphone :</label>
              <input class="input" type="text" name="emp_phone" value="<?php echo $emp['emp_phone']?>">

              <label class="label" for="emp_status"> Status :</label>
              <input class="input" type="text" name="emp_status" value="<?php echo $emp['emp_status']?>">

              <label class="label" for="emp_username"> Username :</label>
              <input class="input" type="text" name="emp_username" value="<?php echo $emp['emp_username']?>">

              <label class="label" for="emp_password"> Mot de passe :</label>
              <input class="input" type="text" name="emp_password" value="<?php echo $emp['emp_password']?>">

              <label class="label" for="emp_salaire"> salaire :</label>
              <input class="input" type="text" name="emp_salaire" value="<?php echo $emp['emp_salaire']?>">

              <label class="label" for="role_id"> role :</label>
              <input class="input" type="text" name="role_id" value="<?php echo $emp['role_id']?>">

              <input class="input" type="submit" value="Ajouter" name="submit">
          </form>
        </div>
      </div>
    </div>


<?php include('layout/footer_admin.php') ?>