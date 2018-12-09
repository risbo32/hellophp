<?php

	class Boutique {

		public $id;
		public $nom;
		public $addresse;
		public $nbreEmployes=10;
		public $capital=10000000;
		private $recettes=0;

		public function __construct ($nom="Boutique de test", $nbrEpl=5, $cap=5000000){

			$this->nom=$nom;
			$this->nbreEmployes= $nbrEpl;
			$this->capital= $cap;
		}

		public function setRecettes($recettes){
			if($recettes<0) throw new Exception("La recette doit etre soit positive, soit nulle", 1);
			
			else {
				 $this->recettes = $recettes;
			}
		}


		public function getRecettes (){
			return $this->recettes;
		}

		public function calculImpots(){
			return $this->recettes * 0.1925;
		}

		public function profilsNets(){
			return $this->recettes - calculImpots();
		}

	}