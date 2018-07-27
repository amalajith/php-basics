<?php

class Vehicle {

	public $make;
	public $color;
	public $is_driving = false;

	public function __construct($make, $color) {
		$this->color = $color;
		$this->make = $make;
	}


	public function drive(){
		$this->is_driving = true;
	}

	public function paint($color){
		if(!$this->is_driving){
			$this->color = $color;
		}
	}

	public function stopDriving(){
		$this->is_driving = false;
	}


}