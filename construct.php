<?php
class Dance {
	public $progressive;
	public $dream;
	public $hard;
	public $trance;
	public $tool;
	public $trap;
	public $dubstep;

	function __construct($progressive, $dream, $hard, $trance, $tool, $trap, $dupstep) {
		$this->progressive = $progressive;
		$this->dream = $dream;
		$this->hard = $hard;
		$this->trance = $trance;
		$this->tool = $tool;
		$this->trap = $trap;
		$this->dubstep = $dubstep;
	}

	function getName() {
		return "Divisions of house are " . $this->progressive . "and"  . $this->hard . "and"  . $this->tool . “ .”;
	}
}

class House extends Dance {
	function __construct($progressive, $dream, $hard, $trance, $tool){
		parent::__construct($progressive, $dream, $hard, $trance);
		$this->tool = $tool;
	}
	function greet() {
		return $this->tool;
	}	
}

class Rave extends Dance {
	function __construct($trance, $trap, $dubstep) {
		parent::__construct($trance, $trap);
		$this->dubstep = $dubstep;
	}
	function hello() {
		return $this->dubstep;
	}
}

$house = new House("Tiesto", "Rob Miles", "w&w", "Armin van Buuren");
print "Genre 1 is a " . $house->getName();