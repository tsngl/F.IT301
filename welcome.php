<?php
 require('lock.php');
 include 'config.php';

 $limit = 5;
 $page = isset($_GET['page']) ? $_GET['page'] : 1;
 $start = ($page - 1) * $limit;
 $result = $conn->query("SELECT * FROM student LIMIT $start,$limit");
 $customers = $result->fetch_all(MYSQLI_ASSOC);

  $result1 = $conn->query("SELECT count(id) AS id FROM student");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;
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
  <h5><a href="logout.php">Гарах<?php
echo $_SESSION['login_user'];
?></a></h5>
</nav>
<div class="container mt-2">
<a class="btn btn-primary mb-2 mt-2 float-right" href='register.php'>
Оюутан нэмэх
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
<?php foreach($customers as $customer) : ?>
<tr>
    <td><?= $customer['id']; ?></td>
    <td><?= $customer['st_code']; ?></td>
    <td><?= $customer['st_name']; ?></td>
    <td><?= $customer['st_huis']; ?></td>
    <td><?= $customer['st_nas']; ?></td>
    <td><?= $customer['st_phone_number']; ?></td>
    <td><?= $customer['st_address']; ?></td>
    <td><a class='mr-2'
           style='color:blue' 
           href=edit.php?id=" .$row['id']. ">Edit</a>
        <a style='color:red' 
           href=delete.php?id=" .$row['id']. ">Delete</a></td>
</tr>
<?php endforeach; ?>
  </tbody>
</table>
<div class="col-md-10 container">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="welcome.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Өмнөх</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li  class="page-item"><a class="page-link" href="welcome.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li class="page-item">
				      <a class="page-link" href="welcome.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Дараах &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
<?php
//Tooluur
$num_rows = mysqli_num_rows($result);
echo "Нийт оюутны тоо: $num_rows \n";

?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>