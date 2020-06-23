<?php require_once './header.php';?>
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg="Thanks for contacting!";
    }
    else if($_REQUEST["msg"]==2){
        $msg="Patient Added Successfully!";
    }
    else if($_REQUEST["msg"]==3){
        $msg="Patient has been deleted!";
    }    
    else if($_REQUEST["msg"]==4){
        $msg="Patient has been updated!";
    }
     else if($_REQUEST["msg"]==5){
        $msg="Doctor Added Successfully!";
    }
     else if($_REQUEST["msg"]==6){
        $msg="Doctor has been deleted!";
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
        font-family: cursive;
        font-weight: bold;
        font-size: 18px;
    }
</style>
<div class="row bg-danger">
    <div class="col-sm-6 text-justify">
        <h1 class="head1">Heart</h1>
        <p>The heart is a muscular organ in most animals, which pumps blood through the blood vessels of the circulatory system. Blood provides the body with oxygen and nutrients, as well as assists in the removal of metabolic wastes. In humans, the heart is located between the lungs, in the middle compartment of the chest.

In humans, other mammals, and birds, the heart is divided into four chambers: upper left and right atria; and lower left and right ventricles.Commonly the right atrium and ventricle are referred together as the right heart and their left counterparts as the left heart.In a healthy heart blood flows one way through the heart due to heart valves, which prevent backflow.</p>
  
  </div>
    <div class="col-sm-6 py-3">
        <img src="pictures/heart.jpg"class="img-fluid" width="560" height="315" alt="heart"/>
        <div class="embed-responsive embed-responsive-16by9 my-3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oHMmtqKgs50" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>            
            </div>
    </div>
 </div>
<style>
    body{
        background-color: #89bde4;
        font-family: cursive;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<?php
if(is_login()){
    echo "<a href='./add_patient.php' class='btn btn-dark text-white my-3'>Add Patient</a><br>";
    echo "<a href='./add_doctor.php' class='btn btn-dark text-white my-3'>Add Doctor</a><br>";
    echo "<a href='./doctor_list.php' class='btn btn-dark text-white my-3'>Doctor list</a><br>";
    echo "<a href='./patient_list.php' class='btn btn-dark text-white my-3'>Patient list</a><br>";
    
}

?>

<?php require_once './footer.php';?>
