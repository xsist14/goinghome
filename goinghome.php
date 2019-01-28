<?php

include ('classes/book.class.php');
include ('classes/vehicle.class.php');
include ('classes/player.class.php');
include ('classes/game.class.php');
include ('classes/jobs.class.php');
?>

<html>
<head>
<title>Going Home</title>
</head>

<body>

<?php
$newgame = new Game;

if($newgame->game_start == true) {
	echo "What is your name" . "<br />";
	$player = new Player;
?>
<form action="/goinghome.php">
  First name: <input type="text" name="name"><br>
  <input type="submit" value="Submit">
</form>

<?php
    $name = $_GET['name'];
	if($name == '') {
		$player->name = $player->name;
		echo 'The default name is ' . $player->name . "<br />";
	} else {
		$player->name = $name;
		echo 'your name is ' . $player->name . "<br />";
	}

} else {
	echo "Game has not started.";
}

echo "name: " . $player->name . "<br />";
echo "location: " . $player->location . "<br />";
echo "money: " . $player->money . "<br />";

?>


</body>
</html>
