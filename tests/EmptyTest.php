<?php
use PHPUnit\Framework\TestCase;

    class EmptyTest extends TestCase {

        public function testThatStringMatch() {
            
            $string1 = 'string1';
            $string2 = 'string1';

            $this->assertSame($string1, $string2);
        }

    
    }
?>
