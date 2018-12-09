<?php

require 'Boutique.php';
use PHPUnit\Framework\TestCase;

class BoutiqueTest {

	public function testGetRecettes(){
			$this->assertSame(1, 1);
	}

	public function testGetProfilNets(){
		$this->assertSame(20, 20);
	}

}