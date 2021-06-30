<?php

include './classes.php';

	$first = $_POST['first'];
	$last = $_POST['last'];	
	$age = $_POST['age'];
	$income = $_POST['income'];
	
$currsub = new subject(); 

$currsub->setFirstname($first);
$currsub->setLastname($last);
$currsub->setAge($age);
$currsub->setIncome($income);
	


?>
