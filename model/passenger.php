<?php

	class Passenger
	{
		private $lastname;
		private $firstname;
		private $age;

		public function __construct($lastname, $firstname, $age)
		{
			$this->lastname = $lastname;
			$this->firstname = $firstname;
			$this->age = $age;
		}

		public function GetLastname()
		{
			return $this->lastname;
		}
		public function SetLastname($lastname)
		{
			return $this->lastname = $lastname;
		}

		public function GetFirstname()
		{
			return $this->firstname;
		}
		public function SetFirstname($firstname)
		{
			return $this->firstname = $firstname;
		}

		public function GetAge()
		{
			return $this->age;
		}
		public function SetAge($age)
		{
			return $this->age = $age;
		}
	}

