<?php
       if (isset($_REQUEST["name"]))
       {
         $appName= strtolower($_REQUEST["name"]);
       }
       if (isset($_GET["userComment"])){
       $content= $_GET["userComment"];
       $myfile = fopen("apps/data/comments/".$appName.".cmt", "a") or die("Unable to open file! Possibly related to permission to access folder!");
       fwrite($myfile, "#".$content."\n");
       fclose($myfile);
     }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>App Details</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/items.css">
    <script src="script/items.js"></script>
  </head>
  <body>
    <div class="titleBackground">
      <a href="home.php" class="title">Basement</a>
    </div>
    <div id="toolBar" class="">
      <div class="toolBarItems" onclick="openShortInfo()">Short info</div>
      <div class="toolBarItems" onclick="openReview()">Reviews</div>
      <div class="toolBarItems" onclick="openOlderVersion()">Older versions</div>
    </div>
    <div class="itemBody">
      <div id="product_introAndCurrentLink">
      <div class="shortDescribeFrame">

        <div class="shortDescribe">
          <?php echo '<div id="fatherOfAppName"><span id="appName">'.$appName.' </span><span id="friendOfAppName">& other information</span></div>' ?>

          <div id="output">
          <!--this one hold describe of a application-->
        </div>

        <div class="saparator">
          <a id="downloadButton" class="basicButtonLink" href="http://localhost/AppFinderWeb/item_details.html">(Recommend) Download</a><br>
        </div>
        <div class="saparator">
          <a class="basicButtonLink" href="http://localhost/AppFinderWeb/item_details.html">Backup Copy</a>
        </div>
      </div>
      </div>
    </div>
    <div id="product_olderVersion">
          <p class="publishYear">2021</p>
          <div class="shortDescribeFrame">
             <div class="saparator">
              <a href="http://localhost/AppFinderWeb/item_details.html" class="olderVersion">10.23.2020.133 | Backup Copy</a>
             </div>
          </div>
          <p class="publishYear">2019</p>
          <div class="shortDescribeFrame">
             <div class="saparator">
              <a href="http://localhost/AppFinderWeb/item_details.html" class="olderVersion">10.23.2020.133 | Backup Copy</a>
             </div>
          </div>
          <div class="shortDescribeFrame">
             <div class="saparator">
              <a href="http://localhost/AppFinderWeb/item_details.html" class="olderVersion">10.23.2020.133 | Backup Copy</a>
             </div>
          </div>
    </div>
    <div id="product_reviews">
      <br>
        <ul id="feedbackBox">
              <?php
                $fileName= strtolower($_REQUEST["name"]);
                $allFeedBacks= file_get_contents("apps/data/comments/".$fileName.".cmt") ;
                $arrayFeedBacks= explode("#",$allFeedBacks);
                foreach ($arrayFeedBacks as $key => $value) {
                  if ($value!="")
                  echo '<li class="feedbacks">'.$value.'</li>';
                }
               ?>
        </ul>
        <form class="reviewBox" action="item_details.php?name=xampp" method="get">
           <textarea class="fitTextarea" name="userComment" rows="8" cols="80" placeholder="Type your comments here"></textarea>
           <br>
           Name*: <input type="text" name="" value="" required><br><br>
           Email*: <input type="text" name="" value="" required><br><br>
           <?php echo '<input type="hidden" name="name" value='.$appName.'>'; ?>
           <input type="submit" class="basicButtonLink darkerButton" value="Post your comments">
        </form>
    </div>
    </div>
  </body>
</html>
