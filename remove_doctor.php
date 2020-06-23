<?php require_once 'header.php';?>
<?php
check_login();
$query = "delete from doctors where id = $_REQUEST[id] ";
$r = run_sql($query);
if(mysqli_affected_rows($con)>0){
    unlink("upload/$_REQUEST[id].jpg");
}
redirect("index.php?msg=6");
?>
<?php require_once 'footer.php';?>
