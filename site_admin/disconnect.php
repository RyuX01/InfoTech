<?php
session_start();
session_destroy();

header('location:index.php');
?>
<!--content-->

<!--footer-->
<?php include('layout/footer.php')?>
<!--footer-->