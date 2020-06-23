<?php require_once './header.php';?>

<?php
if(isset($_POST["name"])){
    if(null!=check_pass($_POST["pass"])){
        $err=check_pass($_POST["pass"]);
    }   
    else if($_POST["pass"]!=$_POST["cpass"]){
        $err="Password does not match!";
    }
    else if(is_exist($_POST["email"])){
        $err=$_POST["email"] . ' already registered!';
    }   
    else {
$query = "INSERT INTO `app_users` 
    (`user_name`, `email`, `pass`, `phone_no`, 
    `sec_q`, `sec_a`, `role`, `status`) 
    VALUES ('$_POST[name]', '$_POST[email]', '$_POST[pass]', '$_POST[phone_no]', 
    '$_POST[sec_q]', '$_POST[sec_a]', '$_POST[role]', 'approved');";
    $r =run_sql($query);    
//    mail_it(ADMIN_EMAIL, "New User Registered!", "Name: $_POST[name], EMail: $_POST[email]");
//    mail_it($_POST["email"], "New User Registered!", "Name: $_POST[name], EMail: $_POST[email]");
    redirect("login.php?msg=3");
    }
}
?>


<style>
    body{
        background-color: #4f6a74;
        background-size: cover;
        background-position: center;
        font-family: cursive;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<div class="row">    
    <div class="col-sm-8 offset-sm-2">    
    <h1 class="head2">Register</h1>
    <hr>
    <form method="post" class="form-horizontal">
      <div class="form-group">
      <label>Name</label>
      <input required class="form-control" type="text" value="<?php echo $_POST['name']?>" name="name"/>
      </div>
      <div class="form-group">
      <label>E Mail</label>
      <input required class="form-control" type="email" value="<?php echo $_POST['email']?>" name="email"/>
      </div>
      <div class="form-group">
      <label>Password</label>
      <input required class="form-control" type="password" name="pass"/>
      </div>
      <div class="form-group">
      <label>Confirm Password</label>
      <input required class="form-control" type="password" name="cpass"/>
      </div>        
        
      <div class="form-group">
      <label>Contact No</label>
      <input required class="form-control" pattern="0?[7-9]{1}\d{9}" type="tel" value="<?php echo $_POST['phone_no']?>" name="phone_no"/>
      </div>
        
      <div class="form-group">
      <label>Security Question</label>
      <input required class="form-control" type="text" value="<?php echo $_POST['sec_q']?>" name="sec_q"/>
      </div>

      <div class="form-group">
      <label>Security Answer</label>
      <input required class="form-control" type="text" value="<?php echo $_POST['sec_a']?>" name="sec_a"/>
      </div>

      <div class="form-group">
      <label>Role</label>
      <select class="form-control" name="role" id="role">
          <option selected="selected">Patient</option>
          <?php 
          $sel = '';
          if($_REQUEST['role']=='Doctor') {
              $sel = "selected = 'selected'";
          }
          ?>
          <option <?=$sel?>>Doctor</option>
      </select>
      </div>       
    <div  class="form-group">
       <h4 style="color: red;"><?php echo $err;?></h4>
    </div>    
  <div class="form-group"> 
      <button type="submit" class="btn btn-primary btn-block" >Submit</button>
  </div>
  <div class="form-group"> 
      <a class="btn btn-danger btn-block" href="reg.php">Reset</a>
  </div>    
</form>
        </div>
</div>    
<?php require_once './footer.php';?>

