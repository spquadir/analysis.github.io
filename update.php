<?php
session_start();
include("connection.php");
$id = $_GET['id'];
$userprofile = $_SESSION['user-name'];
if($userprofile == true)
{

}
else
{
header('location:index.php');
}
$query="SELECT* FROM customer_details WHERE Id='$id'";
$data=mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>
<?php include("connection.php"); ?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Customer</title>
<link rel="stylesheet" href="customer_style.css">
</head>
<body>
<div class="container">
<form action="#" method="POST">
   <div class="title">
    Update Customer Details
   </div>
   <div class="form">
       <div class="input-field">
           <input type="text" class="input" placeholder="First Name" name="fname" value="<?php echo $result['fname']; ?>" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Last Name" name="lname" value="<?php echo $result['lname']; ?>"required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Street" name="Street" value="<?php echo $result['Street']; ?>"required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="Address" name="Address" value="<?php echo $result['Address']; ?>"required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="City" name="City" value="<?php echo $result['City']; ?>" required>
       </div>
       <div class="input-field">
           <input type="text" class="input" placeholder="State" name="State" value="<?php echo $result['State']; ?>" required>
       </div>
       <div class="input-field">
           <input type="email" class="input" placeholder="Email" name="Email" value="<?php echo $result['Email']; ?>">
       </div>
       <div class="input-field">
           <input type="tel" class="input"  placeholder="Phone" name="Contact" value="<?php echo $result['Contact']; ?>" required>
       </div>
       <div class="input-field">
           <input type="submit" class="btn" value="UPDATE" name="register">
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
$query="UPDATE customer_details SET fname='$fname',lname='$lname',Street='$Street',Address='$Address',City='$City',State='$State',Email='$Email',Contact='$Contact' WHERE Id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>alert('Record updated successfully')</script>";
?>
<meta http-equiv="refresh"
content="0; url = http://localhost/dashboard/Assignment/display.php" />

<?php
}
else
{
echo "Failed to update";
}
}
?>