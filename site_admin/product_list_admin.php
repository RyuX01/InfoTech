<?php 

include('layout/header_admin.php');
include ('model/product.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>

    <div class="content">
        
    <?php include('layout/nav_admin.php')?>

        <div class="list">
            <div class="listA">
                
                <div class="lists">
                    <div class="title">
                        <h1>Liste des produits</h1>
                    </div>
                    <div class="column-labels">
                        <label class="product-image" id="image-column">Image</label>
                        <label class="user-name" id="user-column">Nom</label>
                        <label class="user-id">Id</label>
                        <label class="user-salaire">Prix</label>
                        <label class="product-quantity">Quantite</label>
                        <label class="user-modify">Modifier</label>
                        <label class="user-removal">Supprimer</label>
                    </div>

                    <hr>
                    
                    <div class="rows" style="overflow-y: scroll;">
                    <?php foreach ($products as $product){ ?>  
                    <div class="row">
                        <div class="product-image">
                            <img src="uploads/<?php echo $product['product_id'];?>/main.png">
                        </div>

                        <div class="user-name"><?php echo $product['product_name'];?></div>
                        <div class="user-id"><?php echo $product['product_id'];?></div>
                        <div class="user-salaire"><?php echo $product['product_price'];?></div>

                        <div class="product-quantity">
                        <?php echo $product['product_qt'];?>
                        </div>

                        <div class="user-modify">
                            <a href="product_update.php?id_sent=<?php echo $product['product_id'];?>"><button class="modify-user">Modify</button></a>
                        </div>
                        
                        <div class="user-removal">
                        <a href="product_delete.php?id_sent=<?php echo $product['product_id'];?>"><button class="remove-user">Remove</button></a>
                        </div>
                            
                        </div>
                    <?php }?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('layout/footer_admin.php') ?>