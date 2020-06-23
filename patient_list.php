<?php require_once './header.php';?>
<style>
    body{
        background-color: #a2a096;
        font-family: cursive;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<h1 class="head2 btn btn-dark btn-block my-3">Patients List</h1>
<table class="table table-striped">
<tr>
        <th>Patient Name</th>
        <th>Contact No</th>
        <th>Doctor Name</th>
        <th>Action</th>
    </tr>
    <?php
$whr = "";    
if(!empty($_REQUEST["si"])){
    $whr = " where p_name like '%$_REQUEST[si]%'";    
}
$query = "select * from patients $whr order by id desc ";
$res = run_sql($query);
while($row = mysqli_fetch_array($res)){
    echo "    <tr>
        <td>$row[p_name]</td>
        <td>$row[phone_no]</td>
        <td>$row[d_name]</td>
        <td><a class='btn btn-sm btn-dark' href='patient_det.php?id=$row[id]'>Read More</a></td>
    </tr>";
}
?>
</table>
<form class="form-inline text-right">
    <input value="<?=$_REQUEST["si"]?>" class="form-control" type="search" name="si" placeholder="Search"/>
    <input  class="form-control btn btn-dark" type="submit" value="Search"/>
</form>
<?php require_once './footer.php';?>



