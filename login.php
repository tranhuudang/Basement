<!--Trang này dùng để người dùng đăng nhập -->
<?php
session_start();
if (isset($_REQUEST["command"]))
if ($_REQUEST["command"]=="logout")
{
  session_unset();
  session_destroy();
}
$report="";
// đăng xuất phiên làm việc của người dùng khi người dùng vào trang này
// yêu cầu đăng nhập lại
// nút đăng xuất sẽ điều hướng tới trang này
if (isset($_SESSION["wrongpass"]))
{
  if ($_SESSION["wrongpass"]==true){
    $report= '<p style="color: red; font-size: 12px;">*Oops, wrong password, please try again.</p>';
  }
  else {
   $report="";
  }
}
 ?>
<html>
<head>
  <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <!--<script src="mainJS.js"></script>-->
  <link rel="stylesheet" href="style/login.css">
  <link rel="stylesheet" href="style/home.css">
  <link rel="stylesheet" href="style/items.css">
</head>

<body>
  <div class="titleBackground">
    <a href="home.php" class="title">Basement</a>
  </div>
  <!-- mục các bài cơ bản -->
  <div class="loginform">
    <div class="formcurve">
      <form method="POST" action="login_security_check.php">
        <p class="namelevel">Sign in / Login</p>
        <div class="forgetpass">
          <input name="emailphone" type="text" placeholder="Email or phone number" autofocus="1" required>
        </div>
        <input name="password" type="password" placeholder="Password" required><br>
        <?php echo $report ?>
        <button id="loginbutton" type="submit">Log in</button><br>
        <div class="breakline"></div>
      </form>
      <form class="" action="create_user.php" method="post">
        <button class="createuser" type="submit">Create new account</button>
      </form>
    </div>
  </div>
</body>

</html>
