<?php

/* this will define some classes */

class subject {


/* Put all properties here */	
	protected $firstname;
	protected $lastname;
	protected $age;
	protected $income;


	public function setFirstname($thefirstname) {
		$this->firstname = $thefirstname;
	}
	
	 
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}
	
	
	public function setAge($age) {
		$this->age = $age;
	}
	
	public function setIncome($income) {
		$this->income = $income;
	}



		public function getFirstname() {
            return $this->firstname;
		}
		
		public function getLastname() {  /* CAUTION. NEVER USE THIS. USE THE BELOW */
  	        return $this->lastname;
  	    }
        
        public function getAge() {
            return $this->age;
        }
        
        public function getIncome() {
            return $this->income;
        }
        

/* modified getter -- CAUTION, ALWAYS USE THIS FOR PUBLIC DISPLAY */

		public function addressSubject () {
			$drblank = "Dr . " . this->lastname;
			return $drblank;

		}

}


/* age goes in, color goes out.  */

	public function agetocolor() {

		$theage = $this->age;


		if($theage <= 20) {
			$color = "Blue";
			}   
		else if ($theage <= 40) {
			$color = "Red";
			}			
		else if ($theage <= 60) {
			$color = "Green";
			}
		else  {$color="Yellow";}  /* no upper bound to age?*/ 
	   
		return $color;
        }


       /* ditto on income and food - compact style */
		public function incometofood() {
	
				$theincome = $this->income; 
			
				if ($theincome <= 10000) {$food="Biscuit";}
				else if ($theincome <= 50000) {$food="Muffin";}
				else if ($theincome <= 150000) {$food="Toast";}
				else {$food="Cronut";} /* ditto on upper bound to income? */	
				
				return $food;
			   
        }



}
?
