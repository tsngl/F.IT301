<?php
include ('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $edit = $conn->query("SELECT * FROM student WHERE id = $id");
    $data = $edit->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
</head>
<body>
<div class="container mt-4">
      <div class="row">
        <form class="col-md-6" method="POST">
          <div class="form-group ">
          <label>Оюутны Код</label>
            <input
              type="text"
              class="form-control"
              placeholder="Оюутны код"
              name="student_code"
              value="<?= $data['st_code']; ?>"
              required/>
            <label>Оюутны Нэр</label>
            <input
              type="text"
              class="form-control"
              placeholder="Оюутны нэр"
              name="firstname"
              value="<?= $data['st_name']; ?>"
              required/>
            <label for="exampleSelect1">Хүйс</label>
                <select class="form-control" id="exampleSelect1" name="gender" 
                 selected="<?= $data['st_huis']; ?>"
                 required>
                 <option value="1" <?= $data['st_huis'] == 1 ? 'selected' :'' ?>>Эр</option>
                  <option value="0" <?= $data['st_huis'] == 0 ? 'selected' :'' ?>>Эм</option>
                </select>
            <label>Нас</label>
            <input
              type="text"
              class="form-control"
              placeholder="Нас"
              value="<?= $data['st_nas']; ?>"
              name="age"
              required/>
            <label>Утасны дугаар</label>
            <input
              type="text"
              class="form-control"
              placeholder="Утасны дугаар"
              name="phone_number"
              value="<?= $data['st_phone_number']; ?>"
              required/>
            <label>Гэрийн хаяг</label>
            <input
              type="text"
              class="form-control"
              placeholder="Гэрийн хаяг"
              value="<?= $data['st_address']; ?>"
              name="address"
              required/>
           <!-- <small id="emailHelp" class="form-text text-muted"
              >look hhh .</small> -->
              <?php
              // import database config
              if(isset($_POST['student_code']) && isset($_POST['firstname']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['phone_number']) && isset($_POST['address'])){

              // sanitize
              $st_code = mysqli_real_escape_string($conn,$_REQUEST['student_code']);
              $st_name =  mysqli_real_escape_string($conn,$_REQUEST['firstname']);
              $st_huis = mysqli_real_escape_string($conn,$_REQUEST['gender']);
              $st_nas = mysqli_real_escape_string($conn,$_REQUEST['age']);
              $st_phone_number = mysqli_real_escape_string($conn,$_REQUEST['phone_number']);
              $st_address = mysqli_real_escape_string($conn,$_REQUEST['address']);
             $sql = "UPDATE student SET st_code = '$st_code', st_name='$st_name', st_huis='$st_huis', st_nas='$st_nas', st_phone_number='$st_phone_number', st_address='$st_address' WHERE id = '$id'";
            
              if(mysqli_query($conn, $sql)){
                header("Location: welcome.php");
              }
              else {
               echo mysqli_error($conn);
              }
            
        }


        ?>
          </div>
          <button type="submit" class="btn btn-primary">Хадгалах</button>
        </form>
      </div>
    </div>

  </body>

</html>