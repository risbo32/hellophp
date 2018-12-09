<?php


namespace PHPUnit\Framework;
require "vendor/phpunit/phpunit/src/Framework/TestCase.php";
require 'Boutique.php';
use PHPUnit\Framework\TestCase;

class Produit {
	public $prix=4000;
	public $nom;

	public function __construct(){
		$this->prix=4000;
		$this->nom="Calculatrice";
	}

	public function getPrix(){
		return $this->prix;
	}

}

class ProduitTest extends TestCase {

	public function testProduitPrix(){

		$produit = new Produit();
		echo "Debut du test unitaire \n";
		$this->assertSame($produit->getPrix(), 4000);
		echo "Test unitaire terminee \n";

	}
}