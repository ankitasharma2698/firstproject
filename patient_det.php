<?php require_once './header.php';?>
<?php
$query = "select * from patients where id = $_REQUEST[id]";
$res = run_sql($query);
$row = mysqli_fetch_array($res);
?>
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg="Thanks for informing!";
    }
}
if(!empty($msg)){
echo "<div class='alert alert-success alert-dismissible fade show'>
    <button class='close' data-dismiss='alert'>&times;</button>
    <strong>Heart Care</strong> $msg
    </div>";    
}
?>

<style>
    body{
        background-color: #7ca3a0;
        font-family: cursive;
        font-size: 18px;
        font-weight: bold;
    }
</style>
<h1 class="head2"><?=$row['p_name']?></h1>
<div class="row">
    <div class="col-sm-6">        
        <p>
            <strong>Patient Name</strong> : <?=$row["p_name"]?><br>
            <strong>Doctor Name</strong> : <?=$row["d_name"]?><br>
            <strong>Contact No</strong> : <?=$row["phone_no"]?><br>
            <strong>Address</strong> : <?=$row["p_addr"]?><br>
            <strong>Description</strong> : <?=$row["p_desc"]?><br>
            
            <br><br>
            <?php
            if(is_admin()){
                echo "<a href='./remove_patient.php?id=$row[id]' class='btn btn-danger text-white my-3 mx-3'>Delete Patient</a>";
            }
            ?>    
        </p>
    </div>
        <div class="col-sm-6">        
        <img class="img img-fluid rounded" src="upload/<?=$row["id"]?>.jpg" />
    </div>
</div>
<a class="btn btn-dark my-3" href='index.php'>Back</a>

<?php require_once './footer.php';?>