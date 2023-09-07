<?php include("connection.php"); ?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Customer</title>
<link rel="stylesheet" href="customer_style.css">
</head>
<body>
<a href="display.php"><input type="submit" value="BACK" class="btn1"></a>
<div class="container">
<form action="#" method="POST" autocomplete="off">
   <div class="title">
    Customer Details
   </div>
   <div class="form">
       <div class="input-field">
           <input type="text" class="input" placeholder="First Name" name="fname" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Last Name" name="lname" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Street" name="Street" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Address" name="Address" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="City" name="City" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="State" name="State" required>
       </div>
       <div class="input-field">
           <input type="email" class="input" placeholder="Email" name="Email" >
       </div>
       <div class="input-field">
           <input type="tel" class="input"  placeholder="Phone" name="Contact" required>
       </div>
       <div class="input-field">
           <input type="submit" class="btn" value="SUBMIT"  name="register">
           



       </div>
   </div>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['register']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Street=$_POST['Street'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Email=$_POST['Email'];
$Contact=$_POST['Contact'];
$query="INSERT INTO customer_details (fname,lname,Street,Address,City,State,Email,Contact) VALUES('$fname','$lname','$Street','$Address','$City','$State','$Email','$Contact')";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>alert('Inserted successfully')</script>";
}
else
{
echo "<script>alert('Failed')</script>";
}
}
?>