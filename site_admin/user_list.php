<?php 
include('layout/header_admin.php');
include ('model/user.php');

$requete = user_get_all($db);
$user = $requete-> fetchAll();
?>

    <div class="content">

    <?php include('layout/nav_admin.php')?>

        <div class="list">
            <div class="listA">
                
                <div class="lists">
                    <div class="title">
                        <h1>User List</h1>
                    </div>
                    <div class="yes">
                        <div class="column-labels">
                            <label class="user-name" id="user-column">Nom</label>
                            <label class="user-username">Username</label>
                            <label class="user-email">Email</label>
                            <label class="user-removal">Remove</label>
                        </div>
                        <hr>
                        <div class="rows">
                        <?php foreach ($user as $user){ ?>
                            <div class="row">
                                <div class="user-name"><?php echo $user['user_username'];?></div>

                                <div class="user-username"><?php echo $user['user_username'];?></div>

                                <div class="user-email"><?php echo $user['user_email'];?></div>
                                
                                <div class="user-removal">
                                    <a href="user_delete.php?id_sent=<?php echo $user['user_id'];?>">
                                    <button class="remove-user">Remove</button></a>
                                </div>
                            </div>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('layout/footer_admin.php') ?>
