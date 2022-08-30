<?php 
include('layout/header_admin.php');
include ('model/emp.php');

$requete = emp_get_all($db);
$emp = $requete-> fetchAll();
?>
    <div class="content">
        
    <?php include('layout/nav_admin.php')?>
    
        <div class="list">
            <div class="listA">
                
                <div class="lists">
                    <div class="title">
                        <h1>Employes List</h1>
                    </div>
                    <div class="yes">
                        <div class="column-labels">
                            <label class="user-name" id="user-column">Nom</label>
                            <label class="user-role">Role</label>
                            <label class="user-email">Email</label>
                            <label class="user-phone">Phone number</label>
                            <label class="user-status">Status</label>
                            <label class="user-salaire">salaire</label>
                            <label class="user-modify">Modify</label>
                            <label class="user-removal">Remove</label>
                        </div>
                        <hr>

                        <div class="rows">
                        <?php foreach ($emp as $emp){?>
                            <div class="row">
                                <div class="user-name"><?php echo $emp['emp_username'];?></div>

                                <div class="user-role"><?php echo $emp['role_id'];?></div>

                                <div class="user-email"><?php echo $emp['emp_email'];?></div>

                                <div class="user-phone"><?php echo $emp['emp_phone'];?></div>

                                <div class="user-status"><?php echo $emp['emp_status'];?></div>

                                <div class="user-salaire"><?php echo $emp['emp_salaire'];?></div>

                                <div class="user-modify">
                                    <a href="emp_update.php?id_sent=<?php echo $emp['emp_id'];?>">
                                    <button class="remove-user">Update</button></a>
                                </div>
                                
                                <div class="user-removal">
                                    <a href="emp_delete.php?id_sent=<?php echo $emp['emp_id'];?>">
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
<?php include('layout/footer_admin.php')?>

