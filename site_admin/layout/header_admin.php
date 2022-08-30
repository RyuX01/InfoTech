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
    <link rel="stylesheet" href="public/css/style_admin.css">
    <link rel="stylesheet" href="public/css/style_base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <title>infotech admin</title>
</head>
<body>
    <!-- header section -->
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

            <div class="search-bar">
                <form class="searchbar">
                    <input required type="text" placeholder="Search">
                </form>            
            </div>
        </div>

    </header>