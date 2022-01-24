<?php


 ?>
<html>
<style media="screen">
  button{
    border-radius: 12px;
    padding: 5px 15px;
  }
</style>
<head>
  <title>Create new account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="style/login.css">
  <link rel="stylesheet" href="style/home.css">
  <link rel="stylesheet" href="style/items.css">
  <script>
  </script>
</head>
<body>
  <div class="titleBackground">
    <a href="home.php" class="title">Basement</a>
  </div>
  <form class="loginform user-info" method="POST" action="vertify.php">
    <input name= "username" type="text" placeholder="User name" autofocus="1" required><br>
    <input name= "emailphone" type="text" placeholder="Email or phone number" autofocus="2" required><br>
    <input name= "passfirst" type="password" placeholder="Your password" autofocus="3" required><br>
    <input name= "passsecond" type="password" placeholder="Type your password again to vertify" autofocus="4" reqired><br>
    <button type="submit">Lưu thông tin</button>
  </form>
</body>
</html>
