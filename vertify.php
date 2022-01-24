<?php
 // Sử dụng trang này để ghi người dùng mới vào bản ghi và kiểm tra các điều kiện để tạo hoặc xóa hoặc thay đổi thông tin người dùng

  $username= $_POST["username"];
  $emailphone= $_POST["emailphone"];
  $password= $_POST["passfirst"];
  $info= "#".$emailphone.";".$password.";".$username."\n";
  $myfile = fopen("users/user_info.dat", "a");
  fwrite($myfile, $info);
  fclose($myfile);
$report="Your account was created successfully, click here to log in";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <title>Create Account</title>
     <style media="screen">
       .backhome{
          display: block;
          text-decoration: navajowhite;
          background-color: navy;
          color: white;
          border: 2px solid black;
          border-radius: 10px;
          margin: 20px 60px 10px 60px;
       }
       .smaller{
         width: 300px;
       }
       .content{
         margin: 0px 200px 0px 200px;
       }
       .grayit{
        background-color: gray;
        display: inline-block;
        border: 0px;
        padding: 2px 25px 2px 25px;
       }
       .greeting{
         font-size: 25px;
       }
       .backhome:hover{
         background-color: #344feb;
       }
     </style>
   </head>
   <body style="text-align: center; padding-top: 50px;">
     <div class="content">
       <p class="greeting">Congratulation! You've created the best account ever!</p>
       <img class="smaller" src="https://statics.teams.cdn.office.net/hashedassets/freDownloadThanks-900a6e0.svg" alt="">
       <a class="backhome" href="login.php"><?php echo $report ?></a>
       <a class="backhome grayit" href="about_us.php">Find out more about our product</a>
     </div>

   </body>
 </html>
