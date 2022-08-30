<?php include('layout/header_admin.php');

include ('model/product.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>

<!-- content section -->
<div class="content">
    <?php include('layout/nav_admin.php');?>

   <!-- Main -->
   <div class="mainA">
        <h2>Profile</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <img src="public/img/img10.png" width="100px">
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>ImDezCode</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>imdezcode@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>Bali, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Hobbies</td>
                            <td>:</td>
                            <td>Diving, Reading Book</td>
                        </tr>
                        <tr>
                            <td>Job</td>
                            <td>:</td>
                            <td>Web Developer</td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td>PHP, HTML, CSS, Java</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    

<!-- footer section -->
<?php include('layout/footer_admin.php')?>
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