<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
          <div class="form-group">
            <label>Оюутны код</label>
            <input
              type="name"
              class="form-control"
              placeholder="Оюутны код"
              name="username"
            />
            <!--<small id="emailHelp" class="form-text text-muted"
              >look hhh .</small>-->
          </div>
          <div class="form-group">
            <label>Нууц үг</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Нууц үг"
            />
          </div>
        <!--  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember</label>
         </div> -->
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('./config.php');
    // username and password sent from form

    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    $result = $conn->query("SELECT id FROM student WHERE st_code = '".$userName."' AND st_password = '".$passWord."'");
    echo $conn->error;
    // if result matched $userName and $password. 

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['login_user'] = $userName;
        header("location: welcome.php");
    }else {
     echo  "Your Login Name or Password is invalid";
    }
 }
?>