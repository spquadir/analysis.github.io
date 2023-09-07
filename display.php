<?php
session_start();
?>
<html>
<head>
<title>Display Records</title>
<style>
body
{
background:#234efd;
}
table
{
background-color:#ffffff;
}
.update, .delete
{
background-color:green;
color:white;
border:0;
outline:none;
border-radius:5px;
width:80px;
height:22px;
font-weight:bold;
cursor:pointer;
}
.delete
{
background-color:red;
}
.btn
{
background-color:white;
color:#123abc;
height:35px;
width:150px;
margin-right:10px;
margin-bottom:10px;
margin-top:6px;
font-size:14px;
border:0;
border-radius:5px;
cursor:pointer;
font-weight:bold;
}

</style>
</head>
<?php
include("connection.php");
$userprofile = $_SESSION['user-name'];
if($userprofile == true)
{

}
else
{
header('location:index.php');
}


$query="SELECT* FROM customer_details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total != 0)
{
   ?>

<a href="logout.php"><input type="submit" value="LOG OUT" class="btn"></a>
<a href="addcustomer.php"><input type="submit" value="ADD CUSTOMER" class="btn"></a>
        
       <h2 align="center"><mark>Customer List</mark></h2>
       <table border="1" cellspacing="7" cellpadding="7" width="100%">
       <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Street</th>
       <th>Address</th>
       <th>City</th>
       <th>State</th>
       <th>Email</th>
       <th>Phone No</th>
       <th>ID</th>
       <th width="15%">Actions</th>
       </tr>
   <?php
 while($result = mysqli_fetch_assoc($data))
  {
     echo "<tr>
           <td>".$result['fname']."</td>
           <td>".$result['lname']."</td>
           <td>".$result['Street']."</td>
           <td>".$result['Address']."</td>
           <td>".$result['City']."</td>
           <td>".$result['State']."</td>
           <td>".$result['Email']."</td>
           <td>".$result['Contact']."</td>
           <td>".$result['Id']."</td>
           <td><a href='update.php?id=$result[Id]'><input type='submit' value='UPDATE' class='update'></a>
               <a href='delete.php?id=$result[Id]'><input type='submit' value='DELETE' class='delete' onclick='return checkdelete()'></a>
           </td>
          </tr>";
  }
}
else
{
echo "<script>alert('No records found')</script>";
}
?>
</table>


<script>
function checkdelete()
{
return confirm('Are you sure you want to delete the record ?');
}
</script>
