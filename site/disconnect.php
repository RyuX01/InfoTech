<?php
session_start();
session_destroy();

header('location:form_connect.php');
?>
<!--content-->

<!--footer-->
<?php include('layout/footer.php')?>
<!--footer-->