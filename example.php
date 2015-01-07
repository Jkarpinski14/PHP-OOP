<?php
	class Track{
		public $name = "Sonoma";
		public $turns = "nine";
		public $length = "1.99 miles";
	}

	$track1 = new Track();
	print $track1->name;

	class Speedway{
		public $thename = "Daytona";
		public $location = "Florida";
		public $banking = "high";

		function getName(){
			return "{$this->thename}" . "{$this->location}";
		}
	}

	$speedway1 = new Speedway();
	$speedway1->thename = "Lowe's";
	$speedway1->location = "Charlotte";

	print "The track is" . $speedway1->getName() ;
?>
<!--end of work for 01/06/15-->
