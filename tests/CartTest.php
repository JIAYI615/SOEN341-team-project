<?php
//require 'php/functions.php';
use PHPUnit\Framework\TestCase;
    class CartTest extends TestCase {

        public function testAddMatch() {
            $this->assertSame(2, CartAdd(2,3));
            $this->assertSame(3, CartAdd(5,3));
        }
        
        public function testCutMatch() {
            $this->assertFalse(CartCut(9));
            $this->assertTrue(CartCut(0));
        }
   }
?>