<?php

	class Booking
	{
		private $destination;
		private $places;
		private $insurance;
		private $price;
		private $passengers = array();

		public function __construct($destination, $places, $insurance, $price, $passengers)
		{
			$this->destination = $destination;
			$this->places = $places;
			$this->insurance = $insurance;
			$this->price = $price;
			$this->passengers = $passengers;
		}

		public function GetDestination()
		{
			return $this->destination;
		}
		public function SetDestination($destination)
		{
			return $this->destination = $destination;
		}

		public function GetPlaces()
		{
			return $this->places;
		}
		public function SetPlaces($places)
		{
			return $this->places = $places;
		}

		public function GetInsurance()
		{
			return $this->insurance;
		}
		public function SetInsurance($insurance)
		{
			return $this->insurance = $insurance;
		}

		public function GetPrice()
		{
			$price = 0;
			
			if(isset($this->passengers))
			{
				foreach ($this->passengers as $passengers)
				{
					if($passengers->GetAge() > 12)
					{
						$price += 15;
					}
					else
					{
						$price += 10;
					}
				}
			}
			if($this->insurance == "Yes")
			{
				$price += 20;
			}
			
			return $price;
		}
		public function SetPrice($price)
		{
			return $this->price = $price;
		}

		public function GetPassengers()
		{
			return $this->passengers;
		}
		public function SetPassengers($passengers)
		{
			array_push($this->passengers, $passengers);
		}

		public function Cancel()
		{
			$this->destination = "";
			$this->places = 0;
			$this->insurance = "";
			$this->price = 0;
			$this->passengers = array ();
		}
	}

