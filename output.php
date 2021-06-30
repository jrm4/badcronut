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
	
/* now lets print our output */

echo "<h1> form out </h1>";
echo "Hello there, " . $currsub->getFirstname();
echo "<br> Oops I mean " . $currsub->addressSubject();
echo "<br> Your code is " . $currsub->agetocolor() . " " . $currsub->incometofood();


?>
