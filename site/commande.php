<!-- header section -->
<?php include('layout/header.php');

include ('model/product.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>
<!-- header section -->

<!-- content section -->
    <div class="content">
    <!--detail produit-->
    <div class="detail-produits">
        <div class="img-produit">
            <div class="pr">
                <div class="product-pic"></div>
            </div>
        </div>
        <div class="detail-produit">
            <div class="produit-info">
                <div class="titre-produit">
                    <h1>Iphone 11 pro</h1>
                    <span>64 Go - Noir - Débloqué</span>
                </div>
                <div class="prix-produit">
                    <div class="prix">45678.000€</div>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <p class="colors">product colors: </p>
            <div class="product-colors">
                <span class="blue active" data-color="gold" data-pic="url(https://i.postimg.cc/nzkr1vgg/img1.jpg)"></span>
                <span class="green" data-color="black" data-pic="url(https://i.postimg.cc/T3y7b0F7/img2.jpg)"></span>
                <span class="yellow" data-color="#DC143C" data-pic="url(https://i.postimg.cc/dV8CgTyQ/img3.jpg)"></span>
            </div>

            <div>
                <button class="ajouter">Ajouter au wishlist</button>
                <button class="ajouter">Ajouter au panier</button>
            </div>

        </div>
    </div>
    
    <!--Au cas où vous en auriez besoin-->
    <section class="product"> 
        <div class="tp">
            <h3 class="product-category">Au cas où vous en auriez besoin</h3>
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

    <!--Recommandés Pour Vous-->
    <section class="product"> 
        <div class="tp">
            <h3 class="product-category">Recommandés Pour Vous</h3>
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
    
$(".product-colors span").click(function(){
  $(".product-colors span").removeClass("active");
  $(this).addClass("active");
  $(".product-pic").css("background-image",$(this).attr("data-pic"));
});

</script>