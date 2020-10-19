<?php
// import database config
include 'config.php';
if()
?>
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
          <label>Овог</label>
            <input
              type="name"
              class="form-control"
              placeholder="Эцэг эхийн нэр"
              name="lastname"
            />
            <label>Нэр</label>
            <input
              type="name"
              class="form-control"
              placeholder="Өөрийн нэр"
              name="username"
            />
            <label>Нэвтрэх нэр</label>
            <input
              type="name"
              class="form-control"
              placeholder="Нэвтрэх нэр"
              name="firstname"
            />
            <label>Төрсөн он сар өдөр</label>
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date" />
                <label for="exampleSelect1">Хүйс</label>
                <select class="form-control" id="exampleSelect1" name="gender">
                <option>эр</option>
                <option>эм</option>
                </select>
                <label for="exampleSelect1">Төрсөн аймаг сум хот</label>
                <select class="form-control" id="exampleSelect1">
                <option>Архангай</option>
                <option>Баян-Хонгор</option>
                <option>Баян-Өлгий</option>
                <option>Булган</option>
                <option>Говь-Алтай</option>
                <option>Говьсүмбэр</option>
                <option>Дархан-Уул</option>
                <option>Дорноговь</option>
                <option>Дорнод</option>
                <option>Дундговь</option>
                <option>Завхан</option>
                <option>Орхон</option>
                <option>Өвөрхангай</option>
                <option>Өмнөговь</option>
                <option>Сүхбаатар</option>
                <option>Сэлэнгэ</option>
                <option>Төв</option>
                <option>Увс</option>
                <option>Ховд</option>
                <option>Хөвсгөл</option>
                <option>Хэнтий</option>
                </select>
                <label for="exampleSelect1">Спортын цол зэрэг</label>
                <select class="form-control" id="exampleSelect1">
                <option>Залуу харваач</option>
                <option>1-р зэрэг</option>
                <option>2-р зэрэг</option>
                <option>3-р зэрэг</option>
                <option>Аймгийн мэргэн</option>
                <option>Спортын дэд мастер</option>
                <option>Спортын мастер</option>
                <option>Монгол улсын гарамгай харваач</option>
                <option>Монгол улсын гоц харваач</option>
                <option>Монгол улсын гарамгай харваач</option>
                <option>Монгол улсын мэргэн</option>
                <option>Монгол улсын хошой мэргэн</option>
                <option>Монгол улсын даян мэргэн</option>
                <option>Монгол улсын дархан мэргэн</option>
                <option>Монгол улсын даяаар дурсах мэргэн</option>
                <option>Монгол улсын даяаар дурсах дархан мэргэн</option>
                </select>
                <label for="exampleTextarea">Тэмцээнүүдэд гаргасан амжилт/Зөвхөн бүс, улс, олон улс/</label>
                <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
            <label>Нууц үг</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
            />
            <label>Нууц үг баталгаажуулах</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
            />
           <!-- <small id="emailHelp" class="form-text text-muted"
              >look hhh .</small> -->
          </div>
          <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
        </form>
      </div>
    </div>

  </body>

    
</body>
</html>