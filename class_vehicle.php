<?php

class Vehicle {

	var $currentSpeed;
	var $maxSpeed;
	var $numWheels;
	var $price;
	var $amountFuel;
	var $condition;

}

class Car extends Vehicle {

	var $make;
	var $model;
	var $currentSpeed = 0;
	var $maxSpeed = 120;
	var $numWheels = 4;
	var $price = 20000;
	var $amountFuel = 100;
	var $condition = 'A';
	var $color = 'Black';

	function carName() {
		return $this->make . " " . $this->model;
	}
}