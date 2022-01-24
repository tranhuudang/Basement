<?php
session_start();
// this code below is used to vertify users to log in the page
 $emailphone= $_POST["emailphone"];
 $password= $_POST["password"];
 $check= $emailphone.";".$password.";";
 $alluser= file_get_contents('users/user_info.dat',true);
 $alllineuser= explode("\n",$alluser);
 foreach ($alllineuser as $key => $user) {
   if (strpos($user,$check)== 1){
       $_SESSION["wrongpass"]==false;
       $_SESSION["username"]= $emailphone;
       // redirect to home page if the password and user is valid
       header("Location: home.php");
       break;
      } else {
              // admin login will redirect to admin page with a key to vertify login is valid
              $admin_emailphone= $_POST["emailphone"];
              $admin_password= $_POST["password"];
              $admin_check= $admin_emailphone.";".$admin_password.";";
              $admin_alluser= file_get_contents('system/admin/admin_login.dat',true);
              $admin_alllineuser= explode("\n",$admin_alluser);
              foreach ($admin_alllineuser as $key => $admin_user) {
                if (strpos($admin_user,$admin_check)== 1)
                {
                  $_SESSION["admin_wrongpass"]==false;
                  $_SESSION["admin_username"]= $admin_emailphone;
                  // redirect to home page if the password and user is valid
                  header("Location: system/admin/admin_landing_page.php");
                  break;
                }
                $_SESSION["admin_wrongpass"]=true;
                $_SESSION["wrongpass"]=true;
                header("Location: login.php");
           }
 }
 }
 ?>
