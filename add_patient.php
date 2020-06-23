<?php require_once './header.php';?>
<?php
check_login();
$err ="";
if(isset($_POST["name"])){
   if(check_img()!=null){
        $err = check_img();
    }
     else {
$query = "INSERT INTO patients 
    (p_name, p_addr,phone_no, status, p_desc,d_name) 
    VALUES ('$_POST[name]', '$_POST[addr]','$_POST[phone_no]', 'new', '$_POST[pdesc]','$_POST[dname]');";
    $r =run_sql($query);    
    $lid = mysqli_insert_id($con);
    if(isset($_FILES["at1"]) && empty($_FILES["at1"]["name"])!=true){
        move_uploaded_file($_FILES["at1"]["tmp_name"], "upload/$lid.jpg");
    }
     redirect("index.php?msg=2");    
    }
}
?>
<style>
    body{
        background-color: #5896d8;
        font-family: cursive;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<div class="row">    
    <div class="col-sm-8 offset-sm-2">    
    <h1 class="head2">Add Patient</h1>
    <hr>
    <form method="post" enctype="multipart/form-data">
        <input required class="form-control" type="text" value="<?= $_POST["p_name"]?>" name="name" placeholder="Patient Name"/><br>
      <input required class="form-control" type="text" value="<?= $_POST["d_name"]?>" name="dname" placeholder="Doctor Name"/><br>
      <input required class="form-control" pattern="0?[7-9]{1}\d{9}" type="tel" value="<?= $_POST["phone_no"]?>" name="phone_no" placeholder="Contact No"/><br>
           
      <input required class="form-control" type="text" value="<?= $_POST["p_addr"]?>" name="addr" placeholder=" Patient Address"/><br>     
      <textarea rows="4" class="form-control" name="pdesc" placeholder="Description"><?= $_POST["pdesc"]?></textarea>
      <h4 style="color: red;"><?php echo $err;?></h4>
      <input class="form-control" type="file" name="at1" placeholder="Image"/><br>     
      <button type="submit" class="btn btn-primary btn-block" >Submit</button>
      <a class="btn btn-danger btn-block" href="add_patient.php">Reset</a>
    </form>
        </div>
</div>    
<?php require_once './footer.php';?>

