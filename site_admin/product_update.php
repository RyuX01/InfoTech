<?php 
include('layout/header_admin.php');
include ('model/product.php');

$db = db_connect();
$id = $_GET['id_sent'];

$requete = product_get_one($db, $id);
$product = $requete -> fetch(PDO::FETCH_ASSOC);
?>
<div class="content">

<?php include('layout/nav_admin.php')?>

<div class="list">
    <div class="listA" style="height: 480px">
        <h1 class="m1">Modifier un produit</h1>

        <hr>

        <form class="form" action="product_add_save.php" method="post" enctype="multipart/form-data">
            <label class="label" for="product_name"> Nom :</label>
            <input class="input" type="text" name="product_name" value="<?php echo $product['product_name']?>">

            <label class="label" for="product_brand"> Marque :</label>
            <input class="input" type="text" name="product_brand" value="<?php echo $product['product_brand']?>">

            <label class="label" for="product_name"> Id Catégorie :</label>
            <input class="input" type="text" name="cat_id" value="<?php echo $product['cat_id']?>">

            <label class="label" for="product_ref"> Quantité :</label>
            <input class="input" type="text" name="product_qt" value="<?php echo $product['product_qt']?>">

            <label class="label" for="product_price"> Prix :</label>
            <input class="input" type="text" name="product_price" value="<?php echo $product['product_price']?>">

            <label class="label" for="product_info1"> Description :</label>
            <input class="input" type="text" name="product_description" value="<?php echo $product['product_description']?>">

            <label class="label" for="product_info1"> Infor 1 :</label>
            <input class="input" type="text" name="product_info1" value="<?php echo $product['product_info1']?>">

            <input class="input" type="file" name="mainimg" id="mainimg">

            <input class="input" type="submit" value="Ajouter" name="submit">
            </form>
        </div>
    </div>
</div>


<?php include('layout/footer_admin.php') ?>
