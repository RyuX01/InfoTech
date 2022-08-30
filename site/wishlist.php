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
            <h1>Wishlist</h1>
        </div>
        <div class="products-wishlist">
        <?php foreach ($products as $product){?>
            <div class="product-wishlist">
                <a href="commande.php" style="text-decoration: none; color: black;">

                    <img class="product-wishlist-img" src="../site_admin/uploads/<?php echo $product['product_id'];?>/main.png">
                    <hr>

                    <a href="panier.php">
                        <button class="add-cart-btn">ajouter au panier</button>
                    </a>
                                    
                    <div class="product-wishlist-removal">
                        <button>Remove</button>
                    </div>

                    <div class="wishlist-details">
                        <div class="product-wishlist-title"><?php echo $product['product_name'];?></div>
                        <div class="product-wishlist-price"><?php echo $product['product_price'];?></div>
                    </div>
                </a>
            </div>
            <?php }?>
        </div> 
    </div>

    <!--Recommandés pour vous-->
    <section class="product"> 
        <div class="tp">
            <h3 class="product-category">Recommandés pour vous</h3>
            <a href="product_list.php">
                <button href class="plus">voir plus</button>
            </a>
        </div>

        <button class="pre-btn"><img src="public/img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="public/img/arrow.png" alt=""></button>

        <div class="product-container">
        <?php foreach ($products as $product){?>
            <div class="product-card">
                <a href="commande.php" style="text-decoration: none; color: black;">
                    <div>
                        <span class="card-tag">Top Ventes</span>
                        <div id="heart-container">
                            <input type="checkbox" id="toggle">
                                <div id="twitter-heart"></div>
                            </input>
                        </div>
                    </div>

                    <div class="product-info">
                        <img class="product-thumb" src="../site_admin/uploads/<?php echo $product['product_id'];?>/main.png">

                        <a href="panier.php">
                            <button class="card-btn">ajouter au panier</button>
                        </a>

                        <h3 class="product-brand"><?php echo $product['product_name'];?></h3>

                        <p class="product-short-description"><?php echo $product['product_description'];?></p>

                        <span class="price"><?php echo $product['product_price'];?></span>
                    </div>
                </a>
            </div>
        <?php }?>
        </div>
    </section>
</div>
<!-- content section -->

<!-- footer section -->
<?php include('layout/footer.php')?>
<!-- footer section -->



<script>
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
</script>