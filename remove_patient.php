<?php require_once 'header.php';?>
<?php
check_login();
$query = "delete from patients where id = $_REQUEST[id] ";
$r = run_sql($query);
if(mysqli_affected_rows($con)>0){
    unlink("upload/$_REQUEST[id].jpg");
}
redirect("index.php?msg=3");
?>
<?php require_once 'footer.php';?>
