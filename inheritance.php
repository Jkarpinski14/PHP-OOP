<?php
	class Cars{
		public $make;
		public $manu;
		public $size;
		public $power;

		function __construct($make, $manu, $size, $power){
			$this->make = $make;
			$this->manu = $manu;
			$this->size = $size;
			$this->make = $make;
		}

		function getName(){
			return " " . $this->make . " " . $this->manu;
		}
	}

	class Sedan extends Cars{
		function greet(){
			return $this->size;
		}
	}
	class Truck extends Cars{
		function hello(){
			return $this->power;
		}
	}

	$sedan = new Sedan("Chevy", "Impala", "small", "meh");
	print "Car 1 is a " . $sedan->getName();



	class Dance{
		public $progressive;
		public $trance;
		public $bigroom;
		public $dubstep;

		function __construct($progressive, $trance, $bigroom, $dubstep){
			$this->progressive = $progressive;
			$this->trance = $trance;
			$this->bigroom = $bigroom;
			$this->dubstep = $dubstep;
		}

		function getName(){
			return " " . $this->progressive . " and " . $this->bigroom;
		}
	}

	class House extends Dance{
		function greet(){
			return $this->progressive;
		}
	}
	class Rave extends Dance{
		function hello(){
			return $this->power;
		}
	}

	$house = new House("Tritonal", "Armin Van Buuren", "DVBBS", "Skrillex");
	print " House artists include " . $house->getName();	