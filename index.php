<?php
require 'functions.php';

$person = new Person();

// Create Data
$person->setName("John");
$person->setBirth("1 January 2000");
$person->setAge(10);

// Get Data
echo $person->getName()."<br>";
echo $person->getBirth()."<br>";
echo $person->getAge()."<br>";

echo "<br>";

// Create or Update
$person->setName("Anne");
$person->setBirth("10 June 1999");
$person->setAge(23);

// Get Data
echo $person->getName()."<br>";
echo $person->getBirth()."<br>";
echo $person->getAge()."<br>";

// Delete Data
echo $person->deleteName();

// Get Data
echo $person->getName();

// Update Data
echo $person->updateName("Foo Bar")."<br>";