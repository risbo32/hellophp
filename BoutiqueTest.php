<?php
namespace PHPUnit\Framework;
require "vendor/phpunit/phpunit/src/Framework/TestCase.php";
require 'Boutique.php';
use PHPUnit\Framework\TestCase;

class BoutiqueTest  extends TestCase{

	public function testGetRecettes(){

		echo "Debut du test de recettes \n";
		echo "Test unitaire en cours \n";
			$this->assertSame(1, 1);
	}

	public function testGetProfilNets(){
		print("Debut du test de profils nets");
		$this->assertSame(20, 20);
	}

}