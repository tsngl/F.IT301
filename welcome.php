<?php
 require('lock.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    HOME
  </a>
  <h5><a href="logout.php">Sign Out <?php
echo $_SESSION['login_user'];
?></a></h5>
</nav>
<div class="container mt-2">
<a class="btn btn-primary mb-2 mt-2 float-right" href='register.php'>
Add Stuident
</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Оюутны код</th>
      <th scope="col">Оюутны нэр</th>
      <th scope="col">Хүйс</th>
      <th scope="col">Нас</th>
      <th scope="col">Утасны дугаар</th>
      <th scope="col">Хаяг</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php

   
$result = mysqli_query($conn,"SELECT * FROM student");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['st_code'] . "</td>";
echo "<td>" . $row['st_name'] . "</td>";
echo "<td>" . $row['st_huis'] . "</td>";
echo "<td>" . $row['st_nas'] . "</td>";
echo "<td>" . $row['st_phone_number'] . "</td>";
echo "<td>" . $row['st_address'] . "</td>";
echo "<td>
<a class='mr-2' style='color:blue' href=edit.php?id=" .$row['id']. ">Edit</a>
<a style='color:red' href=delete.php?id=" .$row['id']. ">Delete</a>
</td>";
echo "</tr>";
}
mysqli_close($conn);
?>
  </tbody>
</table>
<?php
$num_rows = mysqli_num_rows($result);

echo "$num_rows Rows\n";
?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>