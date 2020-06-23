<?php require_once './header.php';?>
<?php 
 if(isset($_POST["name"])){
    mail_it(ADMIN_EMAIL, "$_POST[name] Contacted!", "Name: $_POST[name] <br>Phone No: $_POST[phone_no] <br>Message: $_POST[msg]");
    redirect("index.php?msg=1");     
 }
?>

<style>
    body{
        background-color: #c9f9ca;
        background-size: cover;
        background-position: center;
        font-family: cursive;
        font-size: 20px;
    }
</style>
<div class="row">
<div class="col-sm-4">        
<h3><strong>Heart Care</strong></h3><br><br>
<span class="glyphicon  glyphicon-map-marker sm-icon"></span><strong>Address:</strong>  Kabir Nagar, Raipur, Chhattisgarh 492001<br><br>
<span class="glyphicon glyphicon-phone sm-icon"></span><strong>  Phone:</strong>   84351xxx<br><br>
<span class="glyphicon glyphicon-print sm-icon"></span><strong>  Fax:</strong>   0771 401xxxx<br><br>
<span class="glyphicon glyphicon-envelope sm-icon"></span><strong>  EMail:</strong>  info@Hcr.co.in<br><br>
<span class="glyphicon glyphicon-globe sm-icon"></span> http://www.heartcare.co.in</h3><br>

    </div>
    <div class="col-sm-8">        
               <h1 class="text-center header myh2 my-3" >Ask Query</h1>
                <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="offset-sm-1 col-sm-10">
                                <input required id="name" name="name" type="text"  placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-sm-1 col-sm-10">
                                <input required id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-sm-1 col-sm-10">
                                <input required id="phone" pattern="\d{10}" name="phone" type="tel"  placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-sm-1 col-sm-10">
                                <textarea required class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                        <div  class="form-group">
                            <div class="col-sm-10 offset-sm-1">
                           <h4 style="color: red;"></h4>
                            </div>  
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-10 offset-sm-1 text-center">
                                <button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
                            </div>
                        </div>
                </form>        
    </div>
</div>

<?php require_once './footer.php';?>
