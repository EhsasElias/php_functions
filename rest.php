<?php
$cookie_name = "Student";
$cookie_value = "Ehsas";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo "<h1>$ _COOKIE</h1>";
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
echo "<h1>$ _FILES</h1>";

if ($_FILES["file"] > 0)
  {
  echo "You have selected a file to upload";
  echo "Filename: " . $_FILES['file']['name']."<br>";
echo "Type : " . $_FILES['file']['type'] ."<br>";
echo "Size : " . $_FILES['file']['size'] ."<br>";
echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
echo "Error : " . $_FILES['file']['error'] . "<br>";
  }


  echo "<h1>$ _ENV</h1>";
  echo 'The username is: ' .$_ENV["USER"] . '!';
  
?>

</body>
</html>