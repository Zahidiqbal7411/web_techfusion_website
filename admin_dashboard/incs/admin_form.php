<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="admin_form" method="post" style="display:none !important">
     <h1 class="d-flex justify-content-center align-items-center fw-bold" >Add  admin</h1>
    <label style="font-weight:bold; font-size:15px;">User name</label>
    <input  type="text" id="username" name="username" class="form-control" required>
    <label style="font-weight:bold; font-size:15px; margin-top:2px;">Password </label>
    <input  type="password" id="username" name="password" class="form-control" required>
    <label style="font-weight:bold; font-size:15px; margin-top:2px;">contact</label>
    <input  type="tel" id="username" name="contact" class="form-control" required>
    <label style="font-weight:bold; font-size:15px; margin-top:2px;">email</label>
    <input  type="email" id="email" name="email" class="form-control" required>
    <div >
  <h1  style="font-size:25px; font-weight:bold; margin-top:10px;"> Permissions for admin</h1>
  <form>
    <div class="form-check mt-2">
      <input class="form-check-input" type="checkbox" value="" id="checkbox1">
      <label class="form-check-label" for="checkbox1" style="font-size:15px;">
        Do you allow admin to add Slider
      </label>
    </div>
    
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkbox2" >
      <label class="form-check-label" for="checkbox2" style="font-size:15px;">
      Do you allow admin to add news 
      </label>
    </div>
    
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkbox3" checked>
      <label class="form-check-label" for="checkbox3" style="font-size:15px;">
      Do you allow admin to add marquee
      </label>
    </div>
  </form>


    <button type="submit" class="btn btn-success mt-3" id="sliderBtn" name="submit" value="sub">Add sub admin</button>
</form>
</div>
<?php 
if(isset($_POST['submit']) && $_POST['submit'] == 'sub' && isset($_POST['username']) && isset($_POST['contact']) && isset($_POST['email'])){

$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$query="INSERT INTO `admin` (admin_username,admin_password,admin_contact,admin_email) VALUES ('$username','$password','$contact','$email') ";
$result=mysqli_query($conn,$query);
If($result){
    echo "sub admin added successfully";
}  
else{
    echo "Error in adding sub admin";
}

}

?>
