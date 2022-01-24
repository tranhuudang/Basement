<?php
if (isset($_REQUEST['w'])){
$rawWord =$_REQUEST['w'];
$wordArray= explode("-",$rawWord);

$servername="localhost";
$username="root";
$pass="";
$dbname="basement_items";
$conn= new mysqli($servername,$username,$pass,$dbname);
$searchQuery="";
$searchQuery_b="";
$searchQuery_b="SELECT * FROM MyItems WHERE apptags LIKE '%%'";
if($conn->connect_error){
  die("<br>Connection failed: " . $conn->connect_error.'<br>Maybe your database haven\'t create yet, please <a href="create_database_basement_items.php">click here</a> to create new database');
}
foreach ($wordArray as $key => $value) {
  $searchQuery_b.=" AND apptags LIKE '%".$value."%'";
}
$searchQuery= $searchQuery_b.";";
$result= $conn -> query($searchQuery, MYSQLI_USE_RESULT);
$printOut="";
  while ($row= mysqli_fetch_assoc($result)) {
    $printOut.= '<div class="resultItems">
          <div class="Logo_Name_Votes">
            <img class="resultLogo" src='.$row["logo"].' alt="">
            <p>'.$row["name"].'</p>
            <br>
          </div>
          <p></p>
          <p>'.$row["shortdescribe"].'</p>
          <div class="resultFunction">
              <a href="company_details.php?name='.$row["company"].'" class="basicButtonLink downloadButton brandButton">'.$row["company"].'</a>
              <a href="item_details.php?name='.$row["name"].'" class="basicButtonLink downloadButton">Download</a>
              <a href="item_details.php?name='.$row["name"].'" class="basicButtonLink downloadButton">Details</a>
              <a class="basicButtonLink downloadButton far fa-heart"> '.$row["favourite"].'</a>
          </div>
          </div>';
  }
  echo $printOut===""?"null":$printOut;
}
 ?>
