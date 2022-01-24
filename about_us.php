<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>About Us</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/items.css">
    <style media="screen">
      #frame2{
        display: none;
      }
    </style>
    <script>
          var shortInfo;
          var olderVersion;
          var review;
          window.onload = function(){
            frame1= document.getElementById("frame1").style;
            frame2=document.getElementById("frame2").style;
          }
          function onSubmit(token){
          document.getElementById("demo-form").submit();

          }
          function openFrame1(){
            frame1.display= "block";
            frame2.display="none";
          }
          function openFrame2(){
            frame1.display= "none";
            frame2.display="block";
          }
  </script>
  </head>
  <body>
    <div class="titleBackground">
      <a href="home.php" class="title">Basement</a>
    </div>
    <div id="toolBar" class="">
      <div class="toolBarItems" onclick="openFrame1()">About us</div>
      <div class="toolBarItems" onclick="openFrame2()">Other products</div>
    </div>
    <div class="itemBody">
      <div id="frame1">
      <div class="shortDescribeFrame">
        <p class="shortDescribe">
          I'm Zero, student at Yersin University. I create this website to elevate the way we search our apps.
          I hope that everyone enjoy this project and hopely help you in some ways.
          I know that there are still a lot of room for improvements in my website so I'm glad to hear what you think of my work.
          Thank you very much. Have a good day guy!
        </p>
      </div>
      <div class="shortDescribeFrame">
        <div class="shortDescribe">
          You can find me at
          <ul>
            <li>Email: tranhuudang127@gmail</li>
          </ul>
        </div>

      </div>
    </div>
    <div id="frame2">
      <div class="shortDescribeFrame">
        <p class="shortDescribe">
          We offer many difference kinds of application, mostly popping out my mind, somethings old, somethings new.
          But one thing I know so well that I always try to keep my application growing to a helpful tool to everyone.
          Hope that you can find some apps that fit with your need.
        </p>
      </div>

    </div>
    </div>
  </body>
</html>
