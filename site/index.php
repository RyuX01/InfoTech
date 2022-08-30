<?php 
include('layout/header.php');
include ('model/product.php');
include ('model/cart.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>

<!-- content section -->

<div class="content">

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="carousel-img1"></div>
        </div>

        <div class="mySlides fade">
            <div class="carousel-img2"></div>
        </div>

        <div class="mySlides fade">
            <div class="carousel-img3"></div>
        </div>

        <!-- Next and previous buttons -->
        <div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- Next and previous buttons -->

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!-- The dots/circles -->

    </div>
    <!-- Slideshow container -->

    <!--nos meilleurs ventes-->
    <section class="product"> 
        <div class="tp">
            <h3 class="product-category">nos meilleurs ventes</h3>
            <a href="product_list.php">
                <button href class="plus">voir plus</button>
            </a>
        </div>

        <button class="pre-btn"><img src="public/img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="public/img/arrow.png" alt=""></button>

        <div class="product-container">
        <?php foreach ($products as $product){?>
            <form class="form" action="cart_add_save.php" method="post" enctype="multipart/form-data" >

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

                            <form action="cart_add_save.php?id_sent=<?php echo $product['product_id'];?>" method="post">
                            <input class="card-btn" class="input" type="submit" value="Ajouter au panier" name="submit">
                            </form>

                            <h3 class="product-brand"><?php echo $product['product_name'];?></h3>

                            <p class="product-short-description"><?php echo $product['product_description'];?></p>

                            <span class="price"><?php echo $product['product_price'];?></span>
                        </div>
                    </a>
                </div>
            </form>
            <?php }?>
        </div>
    </section>
    <!--nos meilleurs ventes-->

    <!-- offre etudiant -->
    <div class="categories">
        <h3 class="categories-title">offre etudiant</h3>

        <ul class="product-cards1">  
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img14.png" alt="">
                    <h4 class="categories-name">AIRPODS</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img12.png" alt="">
                    <h4 class="categories-name">Télephone</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
        </ul>
        <ul class="product-cards">
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img10.png" alt="">
                    <h4 class="categories-name">PC</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img19.png" alt="">
                    <h4 class="categories-name">MICROSOFT</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img20.png" alt="">
                    <h4 class="categories-name">ADOBE</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- offre etudiant -->

    <!--information-->
    <div class="website-detail">
        <ul class="detail-grid">
            <li class="detail-categories">
                <i class="fa fa-truck" style="font-size: 40px;"></i>
                <h4 class="categories-name">Livraison Rapide</h4>
                <p class="detail-p">Service de livraison rapide avec garantie de remboursement.</p>
            </li>
            
            <li class="detail-categories">
                <i class="fa fa-certificate" style="font-size: 40px;"></i>
                <h4 class="categories-name">Meilleur offre</h4>
                <p class="detail-p">Sélectionnée par notre algorithme qualité-prix.</p>
            </li>

            <li class="detail-categories">
                <i class="fa fa-lock" style="font-size: 40px;"></i>
                <h4 class="categories-name">service securise</h4>
                <p class="detail-p">Expérience d’achat sécurisée. SAV aux petits soins.</p>
            </li>
        </ul>
    </div>
    <!--information-->

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

    <!--Autres catégories-->
    <div class="categories">
        <h3 class="categories-title">Autres catégories</h3>

        <ul class="product-cards1">  
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img14.png" alt="">
                    <h4 class="categories-name">AIRPODS</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img12.png" alt="">
                    <h4 class="categories-name">Télephone</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
        </ul>
        <ul class="product-cards">
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img10.png" alt="">
                    <h4 class="categories-name">PC</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img19.png" alt="">
                    <h4 class="categories-name">MICROSOFT</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
            <li class="categories-cards">
                <a href="product_list.php" style="text-decoration: none;">
                    <img class="categorie-img" src="public/img/img20.png" alt="">
                    <h4 class="categories-name">ADOBE</h4>
                    <p style="color: black; text-align:center; opacity: 0.5;">Plus forts que McGregor, plus design que Mac Lesggy.</p>
                </a>
            </li>
        </ul>
        
    </div>
    <!--Autres catégories-->

</div>
<!-- content section -->

<!-- footer section -->
<?php include('layout/footer.php')?>
<!-- footer section -->
