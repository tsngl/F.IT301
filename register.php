<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
              required/>
            <label>Оюутны Нэр</label>
            <input
              type="text"
              class="form-control"
              placeholder="Оюутны нэр"
              name="firstname"
              required/>
            <label for="exampleSelect1">Хүйс</label>
                <select class="form-control" id="exampleSelect1" name="gender" required>
                <option>эр</option>
                <option>эм</option>
                </select>
            <label>Нас</label>
            <input
              type="text"
              class="form-control"
              placeholder="Нас"
              name="age"
              required/>
            <label>Утасны дугаар</label>
            <input
              type="text"
              class="form-control"
              placeholder="Утасны дугаар"
              name="phone_number"
              required/>
            <label>Гэрийн хаяг</label>
            <input
              type="text"
              class="form-control"
              placeholder="Гэрийн хаяг"
              name="address"
              required/>
            <label>Нууц үг</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              required/>
            <label>Нууц үг баталгаажуулах</label>
            <input
              type="password"
              name="password_confirm"
              class="form-control"
              placeholder="Password"
              required/>
           <!-- <small id="emailHelp" class="form-text text-muted"
              >look hhh .</small> -->
              <?php
              // import database config
              include 'config.php';

              if(isset($_POST['student_code']) && isset($_POST['firstname']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['phone_number']) && isset($_POST['address']) && isset($_POST['password']) && isset($_POST['password_confirm'])){

              // sanitize
              $st_code = mysqli_real_escape_string($conn,$_REQUEST['student_code']);
              $st_name =  mysqli_real_escape_string($conn,$_REQUEST['firstname']);
              $st_huis = mysqli_real_escape_string($conn,$_REQUEST['gender']);
              $st_nas = mysqli_real_escape_string($conn,$_REQUEST['age']);
              $st_phone_number = mysqli_real_escape_string($conn,$_REQUEST['phone_number']);
              $st_address = mysqli_real_escape_string($conn,$_REQUEST['address']);
              $st_password = mysqli_real_escape_string($conn,$_REQUEST['password']);
              $st_password_confirm = mysqli_real_escape_string($conn,$_REQUEST['password_confirm']);

              //Password checking
              if($st_password === $st_password_confirm){
              // sql
                $sql = "INSERT INTO student(st_code, st_name, st_huis, st_nas,st_phone_number, st_address, st_password) VALUES ('$st_code','$st_name', '$st_huis', '$st_nas', '$st_phone_number', '$st_address', '$st_password')";
              } 
              if(mysqli_query($conn, $sql)){
                echo "<
                    Record added succesccfully
                </div>";

              }else {
               echo "<div class='alert alert-dark' role='alert'>
                    Could not able to execute". $sql. ".mysqli_error($conn);."."
                </div>";
                
              }

              }
?>
          </div>
          <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
        </form>
      </div>
    </div>

  </body>

    
</body>
</html>