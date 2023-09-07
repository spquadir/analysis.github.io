<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Portal</title>
<link rel="stylesheet" href="login-style.css">
</head>
<body>
   <div class="center">
      <h1>Login</h1>
       <form action="#" method="POST" autocomplete="off">
           <div class="form">
             <input type="text" name="username" class="textfiled" placeholder="Login Id" required> 
             <input type="password"  name="password" class="textfiled" placeholder="Password" required>  
             <input type="submit" name="login" value="SUBMIT" class="btn">   
           </div>
   </div>
   </form>
</body>
</html>


<?php
include("connection.php");
if(isset($_POST['login']))
{
$username=$_POST['username'];
$pwd=$_POST['password'];
$query= "SELECT* FROM login_details WHERE username='$username' && password='$pwd' ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total==1)
{
 $_SESSION['user-name'] = $username;
 header('location:display.php');
}
else
{
 echo "<script>alert('Login failed')</script>" ;
}
}

?>