<?php
	class Personas{
	  private $name;
	  private $surname;
	  
	  public function __construct($name='',$surname=''){
	    $this->name=$name;
	    $this->surname=$surname;
	  }
	  public function toString(){
	    return "Nombre:"+$name+$surname;
	  }
	}
?>
