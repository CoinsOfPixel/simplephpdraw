<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
    <title>New Addresses</title>
  </head>
  <body>
    <div class="navigation">
   <ul>
       <li><a id="Home" href="http://127.0.0.1/draw/index.php">🏠 Home</a></li>
   </ul>
</div>

<?php

$str_arr = explode("\n", $_POST['draw']);

echo "<br><br>";

$size_arr = count($str_arr);
echo "■ Size of the draw: " . $size_arr . " users.";

echo "<br><br>";

foreach ($str_arr as $key => $value) {
  echo "■ - " . $value . "<br>";
}



$rnd = rand(0, $size_arr);

echo "<br>";

echo "■ Random number picked: " . $rnd;

echo "<br>";

echo "<br>√ The lucky user is: " . $str_arr[$rnd];

?>


<br>
<br>
<br>
  <div class="navigation">
   <ul>
       <li><a id="Home" href="http://127.0.0.1/draw/index.php">🏠 Home</a></li>
   </ul>
</div>

</body>
</html>
