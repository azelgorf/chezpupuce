<?php
	class personne
	{
		protected $_name;
		protected $_firstname;
		protected $_mail;
		protected $_address;
		protected $_postcode;
		protected $_city;
		protected $_dob;
		protected $_id;


	public function __construct($name,$firstname,$mail,$adresse,$postcode,$city,$dob)
	{
		$this->setname($name);
		$this->setfirstname($firstname);
		$this->setmail($mail);
		$this->setaddress($address);
		$this->setpostcode($postcode);
		$this->setcity($city);
		$this->setdob($dob);
		$this->setid();
	}

	//******************************   Accesseurs   **********************

	public function getname(){
		return $this->_name; 
	}

	public function getfirstname(){
		return $this->_firstname;
	}
	public function getmail(){
		return $this->_mail;
	}
	public function getaddress(){
		return $this->_address;
	}
	public function getpostcode(){
		return $this->_postcode;
	}
	public function getcity(){
		return $this->_city;
	}
	public function getdob(){
		return $this->_dob;
	}
	public function getid(){
		return $this->_id;
	}

	//*****************************   Mutateurs ************************

	public function setname(){
		 $this->_name;
	}
	public function setfirstname(){
		return $this->_firstname;
	}
	public function setmail(){
		return $this->_mail;
	}
	public function setaddress(){
		return $this->_address;
	}
	public function setpostcode(){
		return $this->_postcode;
	}
	public function setcity(){
		return $this->_city;
	}
	public function setdob(){
		return $this->_dob;
	}
	public function setid(){
		return $this->_id;
	}


	//***********************************  Méthode  **************************



	}
?>