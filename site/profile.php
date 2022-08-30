<?php include('layout/header.php');

include ('model/product.php');

$requete = product_get_all($db);
$products = $requete-> fetchAll();
?>

<!-- content section -->
<div class="content">
   <!-- Main -->
   <div class="mainA">
        <h2>Profile</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>Manel</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>manelhamici@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>Algiers, Algeria</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


</div>
    

<!-- footer section -->
<?php include('layout/footer.php')?>
<!-- footer section -->