<?php

include ('class_book.php');
include ('class_vehicle.php');
include ('class_player.php');

$jason = new Player;

?>
 <!DOCTYPE html>
<html>
<head>
<title>Going Home Game</title>
</head>
<body>

<h1>Welcome to Going Home</h1>
<p>You are in the <?php echo strtolower($jason->location) ?></p>

</body>
</html> 
<?php 
if ($jason->location == 'Bedroom') { ?>
	<img src="/images/bedroom.png" style="width:128px;height:128px"> <br />
	<button type="button" name="gotokitchen" value="Bedroom">go to kitchen</button>
<?php 

$jason->location = $_POST['gotokitchen'];

} elseif ($jason->location == 'kitchen') { 
?>
	<img src="/images/kitchen.png" style="width:128px;height:128px"> <br />
	<button type="button" value="Kitchen">go to bedroom</button>
<?php


}


$araba = new Car;
$araba->make = 'Araba';
$araba->model = 'Hizli';
$araba->color = 'Blue';
// echo 'This car has ' . $araba->numWheels . ' wheels' . '<br />';
// echo $araba->carName() . '<br />';
// echo 'The car\'s color is ' . $araba->color . '.' . '<br />';


$robinhood = new Book;
$robinhood->title = 'Robin Hood';

// echo $robinhood->whatTitle() . '<br />';

?>