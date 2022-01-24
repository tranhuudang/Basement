<?php
session_start();
if (isset($_SESSION["username"])){
  $sessionUserName= $_SESSION["username"];
  $cutOutName= substr($sessionUserName, 0, strpos($sessionUserName,"@"));
  $userName= '<a href="user.php?id='.$sessionUserName.'"><li class="first-menu-item">'.$cutOutName.'</li></a>';
  $updateInformation= '<a href="#"><li>Update Information</li></a>';
  $addOrRemoveApp='<a href="users/add_remove_app.php"><li>Add/ Remove Apps</li></a>';
  $logOut= '<a href="login.php?command=logout"><li class="last-menu-item">Log out</li></a>';
}
else {
  $userName= '<a href="login.php"><li>Log in</li></a>';
  $updateInformation= "";
  $addOrRemoveApp="";
  $logOut="";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basement</title>
    <link rel="stylesheet" href="style/home.css">
    <script src="https://kit.fontawesome.com/1e3eae0b73.js" crossorigin="anonymous"></script>
    <script src="script/home.js">
    </script>
  </head>
  <body>
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span><span></span><span></span>
        <ul id="menu">
          <?php echo $userName ?>
          <a href="about_us.php"><li>Technews</li></a>
          <?php echo $updateInformation ?>
          <?php echo $addOrRemoveApp ?>
          <a href="about_us.php"><li>About Us</li></a>
          <?php echo $logOut ?>
        </ul>
      </div>
    </nav>
    <div id="searchArea">
    <div class="searchBar">
        <a href=" " class="title titleForHome">Basement</a>
        <input id="searchBox" onkeyup="performSearch()" type="text" name="" value="" placeholder="Type here to search" autofocus="1">
        <!--this one hold search value which added after space or removed when delete-->
        <p style="display: none" id="textSearchHolder"></p>
    </div>
    <div id="upPocket"><!-- used to show search hashtag of a application --></div>
    <div id="marketWords"><!--   used to show suggested word for user    --></div>
  </div>
  <div id="toolBar" class="">
    <div class="toolBarItems">Z-A</div>
    <div class="toolBarItems">Trending</div>
    <div class="toolBarItems">Newest</div>
  </div>
    <div id="boxResults"><!--this one hold results gotten from suggested_app--></div>
    <footer></footer>
  </body>
</html> 
