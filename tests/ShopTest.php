<?php
//require 'php/functions.php';
use PHPUnit\Framework\TestCase;
    class ShopTest extends TestCase {

        public function testGST() {
            $this->assertSame(1.51, GST(30.1));
            $this->assertSame(3.31, GST(66.1));
        }

        public function testQST() {
            $this->assertSame(3.01, QST(30.111));
            $this->assertSame(6.61, QST(66.11));
        }

        public function testEstimateTotal() {
            $this->assertSame(34.62, EstimateTotal(30.1));
            $this->assertSame(76.02, EstimateTotal(66.1));
        }
        
        
   }
?>