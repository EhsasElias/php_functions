<?php
session_start();
echo "<h1>$ GLOBALS</h1>";
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "<br>";
}

$foo = "global varible";
test();

echo "<h1>$ _SERVER</h1>";

foreach($_SERVER as $key => $value){
    echo "<b style='color:red'>".$key."</b> : ".$value."<br>";
}

echo '
<form action="index.php" method="get">
        <input type="text" name="name"><br>
        <input type="password" name="pass"><br>
        <input type="checkbox" name="subject[]" value="html">html<br>
        <input type="checkbox" name="subject[]" value="css">css<br>
        <input type="checkbox" name="subject[]" value="js">js<br>
        <input type="submit" value="Submit"><br>
    </form>';
    echo "<h1>$ _REQUEST</h1>";
echo '<h3>';
var_dump($_REQUEST);
echo '</h3>';

echo "<h1>$ _GET</h1>";
echo '<h3>';
var_dump($_GET);
echo '</h3>';

echo '
<form action="index.php" method="post">
        <input type="text" name="name"><br>
        <input type="password" name="pass"><br>
        <input type="checkbox" name="subject[]" value="html">html<br>
        <input type="checkbox" name="subject[]" value="css">css<br>
        <input type="checkbox" name="subject[]" value="js">js<br>
        <input type="submit" value="Submit"><br>
    </form>';
echo "<h1>$ _POST</h1>";
echo '<h3>';
var_dump($_POST);
echo '</h3>';

echo "<h1>$ _SESSION</h1>";

$_SESSION["name"] = "Ehsas";
$_SESSION["sisname"] = "Enas";
echo "My name is " . $_SESSION["name"] . ".<br>";
echo "My sister name is " . $_SESSION["sisname"] . "<br>";


$name = 'Ehsas Elias';
setcookie("Name", $name);
echo $_COOKIE["Name"];

?>