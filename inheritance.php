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
			return "A car includes: " . $this->make . "and " . $this->manu;
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

	$truck = new Sedan("Chevy", "Impala", "small", "meh");
	print "Car 1 is a " . $sedan->getName();



	class Dance{
		public $progressive;
		public $trance;
		public $bigroom;
		public $dubstep;

		function __construct($progressive, $trance, $house, $dubstep){
			$this->progressive = $progressive;
			$this->trance = $trance;
			$this->bigroom = $bigroom;
			$this->dubstep = $dubstep;
		}

		function getName(){
			return "Dance includes: " . $this->make . "and " . $this->manu;
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
	print "Dance artists are " . $house->getName();	