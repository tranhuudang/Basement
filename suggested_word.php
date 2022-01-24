<?php
if (isset($_REQUEST['w']))
{
  $suspect= $_REQUEST['w'];
  $temperResultHolder="";
  $result="";
  $contents= file_get_contents("apps/suggestion/suggestion_v1.dat");
  $allLine= explode('#',$contents);
  foreach ($allLine as $key => $value)
  {
    if( strpos($value,$suspect))
    {
        $temperResultHolder .=$value;
    }
  }
  echo $temperResultHolder===""?"null":$temperResultHolder;
}

 ?>
