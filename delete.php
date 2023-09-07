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
$query="DELETE FROM customer_details WHERE Id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>alert('Record Deleted')</script>";
?>
<meta http-equiv="refresh"
content="0; url = http://localhost/dashboard/Assignment/display.php" />

<?php
}
else
{
echo "<script>alert('Failed to delete')</script>";
}
?>