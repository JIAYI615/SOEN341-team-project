<?php
require 'php/functions.php';
use PHPUnit\Framework\TestCase;
    class OrderTest extends TestCase {

        public function testOrderStatusMatch() {
            $this->assertSame('processing', status(0));
            $this->assertSame('shipping', status(1));
            $this->assertSame('delivered', status(2));
            $this->assertSame('error status', status(10));
            $this->assertSame('error status', status('wrong value'));
        }    
       
        public function testCommentStatusMatch() {
            $this->assertSame('No', Recommend(0));
            $this->assertSame('Yes', Recommend(1));
            $this->assertSame('N/A', Recommend(2));
            $this->assertSame('N/A', Recommend('string'));
        }    
    
    
    
    
    }


?>
