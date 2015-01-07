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
<?php
	class Car {
		public $make;
		public $manu;
		public $year;

		function__construct($make, $manu, $year){
			$this->make = $make;
			$this->manu = $manu;
			$this->year = $year;
		}

		function getName(){
			return "{$this->make}" . "{$this->manu}";
		}
	}

	$car1 = new Car("Impala", "Chevy", "1967");
	print "Car1: " . $car1->getName() ;

	class Song {
		public $title;
		public $artist;
		public $genre;

		function__construct($title, $artist, $genre){
			$this->make = $title;
			$this->manu = $artist;
			$this->year = $genre;
		}

		function getName(){
			return "{$this->title}" . "{$this->artist}";
		}
	}

	$song1 = new Song("Earthquake", "Mike Hawkins", "Rave");
	print "Song1: " . $song1->getName() ;

	class EDMGenres {
		public $house;
		public $dubstep;
		public $trance;

		function__construct($house, $dubstep, $trance){
			$this->house = $house;
			$this->dubstep = $dubstep;
			$this->trance = $trance;
		}

		function getName(){
			return "{$this->house}" . "{$this->dubstep}";
		}
	}

	$edmgenres1 = new EDMGenres("Tritonal", "Knife Party", "Armin Van Buuren");
	print "EDMGenres1: " . $edmgenres1->getName() ;
?>
<!--end of 01/07/15 (Wednesday) work-->