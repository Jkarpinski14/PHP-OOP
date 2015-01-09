<?php
/*Answer to question: It outputs because the functions check to determine if the parameters are true or not.*/
	if (is_integer(33)){
		echo "It is an integer";
	}
	else  {
		echo "It is not an integer";
	}
	var_dump(is_integer(45));
	var_dump(is_integer(463.23));
	var_dump(is_integer(1));
	var_dump(is_integer("Pizza"));

	
	if (is_double(25.5555)){
		echo "It is a double";
	}
	else{
		echo "It is not a double";
	}
	var_dump(is_double(45));
	var_dump(is_double(463.23));
	var_dump(is_double(1.9999999999));
	var_dump(is_double("Pizza"));

	
	if (is_array(25.5555)){
		echo "It is an array";
	}
	else{
		echo "It is not an array";
	}
	var_dump(is_array(4));
	var_dump(is_array(463.23));
	var_dump(is_array("bass drop"));
	var_dump(is_array("Pizza"));
?>
