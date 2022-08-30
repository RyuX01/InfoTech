<?php session_start()?>

<?php
    include('model/database.php');
    $db = db_connect();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="infotech">
    <meta name="keyword" content="Game developer, Jeux videos, Gamer, Gaming, Portfolio">
    <meta name="author" content="infotech">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/grille.css">

    <title>Info Tech</title>
</head>

<body>
    
<header>
        <div class="header-top">
            <a class="logo" href="index.php">INFO <span style="color: #5c20e4; display: contents;">TECH</span> </a>

            
            <div class="menu-bar">
                <ul>
                <li>
                    <a href="#">
                    <img src="public/img/img2.png" style="width: 30px;">
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                        <?php if (isset($_SESSION['username'])) { ?>
                        <li><a href="profile.php">
                            
                                <p> <?php echo $_SESSION['username'] ?> </p>
                                <li><a href="disconnect.php">Se deconnecter</a></li>
                        </a></li>
                        <?php } else { ?>
                        <hr style="margin: 0px;">

                        <li><a href="form_connect.php">Se connecter</a></li>

                        <hr style="margin: 0px;">

                        <li><a href="form_connect.php">S'inscrire</a></li>
                        <?php } ?>
                        </ul>

                    </div>
                    </li>
                </ul>
            </div>
            

            <a href="panier.php">
                <img class="icon" src="public/img/img1.png" style="width: 25px;">
            </a>


            <a href="wishlist.php">
            <img class="icon" src="public/img/img3.png" style="width: 25px;">
            </a>

            <div class="search-bar">
                <form class="searchbar" action="product_list.php" method="post">
                    <input class="search" type="text" name="valueToSearch" placeholder="Search">
                    <input type="submit" name="search" value="Filter" style="opacity: 0;"><br><br>
                </form>   
            </div>
            
            <?php
                if(isset($_POST['search']))
                {
                    $valueToSearch = $_POST['valueToSearch'];
                    $query = "SELECT * FROM `product` WHERE CONCAT(`product_name`, `product_id`) LIKE '".$valueToSearch."%'";
                    $search_result = filterTable($query);
                    
                }
                else {
                    $query = "SELECT * FROM `product`";
                    $search_result = filterTable($query);
                }

                // function to connect and execute the query
                function filterTable($query)
                {

                    $connect = mysqli_connect("localhost", "root", "", "infotech_init");
                    $filter_Result = mysqli_query($connect, $query);
                    return $filter_Result;
                }
            ?>
        </div>

        <div class="navbar" >

            <div href="#" class="nav-btn">
                <a href="#">
                    <i class="fa fa-bars white-color" id="menu-btn"></i>
                    <span class="menu-title"> Tous Les Prouduits</span>
                </a>
            </div>

            <div class="categorie">
                <a href="product_list.php" class="nav-options">Bons Plans</a>
                <a href="#" class="nav-options">Offre Étudiant</a>
                <a href="#" class="nav-options">Nouveauté</a>
                <a href="#" class="nav-options">Meilleures Ventes</a>
            </div>

        </div>
</header>