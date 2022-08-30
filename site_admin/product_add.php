<?php 
include('layout/header_admin.php');
include ('model/product.php');
?>

    <div class="content">

<?php include('layout/nav_admin.php')?>

      <div class="list">
        <div class="listA" style="height: 480px">
          <h1 class="m1">Ajouter produit</h1>

          <hr>
          
          <form class="form" action="product_add_save.php" method="post" enctype="multipart/form-data" >
              <label class="label" for="product_name"> Nom :</label>
              <input class="input" type="text" name="product_name" placeholder="Nom">

              <label class="label" for="product_name"> Marque :</label>
              <input class="input" type="text" name="product_brand" placeholder="Marque">

              <label class="label" for="product_name"> Id Catégorie :</label>
              <input class="input" type="text" name="cat_id" placeholder="Id Catégorie">

              <label class="label" for="product_ref"> Quantité :</label>
              <input class="input" type="text" name="product_qt" placeholder="Quantité">

              <label class="label" for="product_nproduct_priceame"> Prix :</label>
              <input class="input" type="text" name="product_price" placeholder="$$$">

              <label class="label" for="product_info1"> Description :</label>
              <input class="input" type="text" name="product_description" placeholder="Description">

              <label class="label" for="product_info1"> Infor 1 :</label>
              <input class="input" type="text" name="product_info1" placeholder="Info">

              <input class="input" type="file" name="mainimg" id="mainimg">

              <input class="input" type="submit" value="Ajouter" name="submit">
          </form>
        </div>
      </div>
    </div>


<?php include('layout/footer_admin.php') ?>
