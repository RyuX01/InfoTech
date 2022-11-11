<!-- header section -->
<?php 

include('layout/header.php');
include ('model/product.php');
include ('model/cart.php');

$requete = cart_get_all($db);
$carts = $requete-> fetchAll();?>
<!-- header section -->


<!-- content section -->
<div class="content">

    <div class="panierA">
        <div class="panier">
            
            <div class="shopping-cart">
                <div class="cart-title">
                    <h1>Shopping Cart</h1>
                </div>

                <div class="column-labels">
                    <label class="product-image" id="image-column">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>

                <hr>
                
                <div class="products-panier">
                <?php foreach ($carts as $cart){?>
                    <div class="product-panier">
                        <div class="product-image">
                            <img src="../site/uploads/<?php echo $cart['product_id'];?>/main.png">
                        </div>

                        <div class="product-details">
                            <div class="product-title"><?php echo $cart['product_name'];?></div>
                        </div>

                        <div class="product-price"><?php echo $cart['product_price'];?></div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-removal">
                            <a href="cart_delete.php?id_sent=<?php echo $cart['cart_id'];?>">
                            <button class="remove-product">
                            Remove
                            </button>
                        </div>

                        <div class="product-line-price"><?php echo $cart['product_price'];?></div>
                    </div>
                <?php }?>
                </div>
            </div>
        </div>

        <div class="totals">
            <div class="cart-title">
                <h1>Cart Totals</h1>
            </div>

            <div class="column-labels">
                <label class="product-image" id="subtotal-column">Subtotal</label>
            </div>

            <hr>

            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">00,00</div>
            </div>

            <hr>

            <div class="totals-item">
                <label>Tax <span>(5%)</span> </label>
                <div class="totals-value" id="cart-tax">00,00</div>
            </div>

            <hr>

            <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping">15.00</div>
            </div>

            <hr>
            
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">00,00</div>
            </div>
            
            <button class="checkout">Checkout</button>
        </div>
    </div>
    
</div>
<!-- content section -->



<!-- footer section -->
<?php include('layout/footer.php')?>
<!-- footer section -->
