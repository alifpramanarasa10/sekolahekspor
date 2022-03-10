<?php

class Person {

	private $name, $birth, $age;

	// Setter
	public function setName($name)
	{
		$this->name = $name;
	}

	public function setBirth($date)
	{
		$this->birth = $date;
	}

	public function setAge($number)
	{
		$this->age = $number;
	}

	// Getter
	public function getName()
	{
		return $this->name;
	}

	public function getBirth()
	{
		return $this->birth;
	}

	public function getAge()
	{
		return $this->age." Tahun";
	}

	public function deleteName()
	{
		$this->name = null;
	}

	public function updateName($name)
	{
		$this->name = $name;
	}

}