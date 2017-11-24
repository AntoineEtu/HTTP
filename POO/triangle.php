<?php

class Triangle {

		protected $cote1,$cote2,$cote3,$hypo;
		protected $isocele,$equilateral,$rectangle;

   public function __construct($c1,$c2,$c3) {
       $this->cote1 = $c1;
       $this->cote2 = $c2;
       $this->cote3 = $c3;
       $this->isocele= false;
       $this->equilateral=false;
       $this->rectangle=false;
   }

   function findTrianlgeType(){
   		if($this->isIsocele()){
   			$this->isocele=true;
   		}
   		if($this->isEquilateral()){
   			$this->equilateral=true;
   		}
   		if($this->isRectangle()){
   			$this->rectangle=true;
   		}

   		if($this->rectangle==true && $this->isocele==true){
   			echo('Le triangle est rectangle isocèle.');
   		}else{
	   		if($this->rectangle==true && $this->isocele==false){
	   			echo('Le triangle est rectangle.');
	   		}else{
		   		if($this->equilateral==true){
		   			echo('Le triangle est équilatéral.');
		   		}else{
			   		if($this->isocele==true){
			   			echo('Le triangle est isocèle.');
			   		}else{
			   			echo('Le triangle est scalène.');
			   		}
			   	}
		   	}
	   	}
   }

   function isIsocele(){
   		$isocele = false;
   		if($this->cote1==$this->cote2 OR $this->cote1==$this->cote3 OR $this->cote3==$this->cote2){
   			$isocele = true;
   		}
   		return $isocele;
   }

   function isEquilateral(){
   		$equilateral = false;
   		if($this->cote1==$this->cote2 AND $this->cote1==$this->cote3){
   			$equilateral = true;
   		}
   		return $equilateral;
   }

   function isRectangle(){
	   	$rectangle = false;
	   	$this->hypo = $this->giveMeMax();
	   	if($this->hypo==1){
	   		if((($this->cote2)**2 + ($this->cote3)**2) == ($this->cote1)**2){
	   			$rectangle=true;
	   		}
	   	}else{
	   		if($this->hypo==2){
		   		if((int)(($this->cote1)**2 + ($this->cote3)**2) == (int)($this->cote2)**2){
		   			$rectangle=true;
		   		}
	   		}else{
	   			$somme=(int)(($this->cote2)**2) + (($this->cote1)**2);
	   			$hypot=(int)($this->cote3)**2;
	   			if( $somme == $hypot){
		   			$rectangle=true;
		   		}
	   		}

	   	}
	   	return $rectangle;
   }

   function giveMeMax(){
   		$cote = 0;
   		$max = 0;
   		if( $this->cote1 > $max){
   			$max=$this->cote1;
   			$cote=1;
   		}
		if( $this->cote2 > $max){
			$max=$this->cote2;
			$cote=2;
		}
		if( $this->cote3 > $max){
			$max=$this->cote3;
			$cote=3;
		}
   		return $cote;
   }
}

?>