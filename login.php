<?php require_once './header.php';?>
<?php
$msg = "";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){        
        $msg = "Your password has been sent!";
    }
    else if($_REQUEST["msg"]==2){        
        $msg = "Your password has been changed!";
    }
    else if($_REQUEST["msg"]==3){        
        $msg = "Registration Successful!";
    }
}
if(isset($_POST["email"]))
{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_MAGIC_QUOTES);
    $query = "select * from app_users 
    where email = '$email' 
    and pass = '$pass' and status = 'approved'";
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $_SESSION["uname"]=$row["user_name"];
       $_SESSION["email"]=$row["email"];
       $_SESSION["role"]=$row["role"];
       redirect("index.php");
    }
    else {
        $err="Incorrect User Name or Password!!";
    }
}
?>

<style>
    body{
        background-color: #9595e7;
        background-size: cover;
        background-position: center;
    }
</style>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 style="color: red;"><?=$msg?></h3>
<h1 class="head2 text-center">Login</h1>
<hr>
<form method="post">
    <input class="form-control" type="text" name="email" placeholder="EMail"/><br>
    <input class="form-control" type="password" name="pass" placeholder="Password"/><br>
    <?php echo "<p id='error'>$err</p>"?>
    <input class="form-control btn btn-primary btn-block" type="submit" value="Login"/><br>
    <a class="btn btn-danger btn-block" href="login.php">Reset</a><br>
    <a class="btn btn-dark btn-block" href="reg.php">Register Now</a><br>        
            
</form>        
    </div>
</div>
<?php require_once './footer.php';?>



