<?php 
include('layout/header.php');
include ('model/product.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>

<!-- content section -->
<div class="content">
    <div class="wishlist">

        <div class="cart-title">
            <h1>Products</h1>
        </div>

        <div class="products-wishlist">
            <?php foreach ($products as $products){?>
                <?php while($product = mysqli_fetch_array($search_result)):?>

                    <div class="product-wishlist">
                        <a href="commande.php" style="text-decoration: none; color: black;">
                            <div id="heart-container">
                                <input type="checkbox" id="toggle">
                                <div id="twitter-heart" style="height: 40px; width: 55px;"></div>
                                </input>
                            </div>

                            <img class="product-wishlist-img" src="../site_admin/uploads/<?php echo $product['product_id'];?>/main.png">

                            <hr>

                            <a href="panier.php?id_sent=<?php echo $cart['cart_id'];?>">
                                <button class="add-cart-btn" action="cart_add_save.php">ajouter au panier</button>
                            </a>                

                            <h3 class="product-brand"><?php echo $product['product_name'];?></h3>
                            <p class="product-short-description"><?php echo $product['product_description'];?></p>
                            <span class="price"><?php echo $product['product_price'];?></span>
                        </a>
                    </div>
                <?php endwhile;?>
            <?php }?>
        </div> 
    </div>
</div>
    

<!-- footer section -->
<?php include('layout/footer.php')?>
<!-- footer section -->


<!-- <script>
    /* Set rates + misc */
    var fadeTime = 1000;

    $('.product-wishlist-removal button').click( function() {
    removeItem(this);
    });

    /* Remove item from cart */
    function removeItem(removeButton)
    {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton).parent().parent();
    productRow.slideUp(fadeTime, function() {
        productRow.remove();
        recalculateCart();
    });
    }
</script> -->