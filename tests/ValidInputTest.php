<?php
//require 'php/functions.php';
use PHPUnit\Framework\TestCase;
    class ValidInputTest extends TestCase {

        public function testLoginInput() {
            $email ="";
            $password ="";
            $email2 = "Email";
            $password2 ="password";
            $this->assertFalse(loginValidInput($email2,$password2));
            $this->assertTrue(loginValidInput($email,$password2));
            $this->assertTrue(loginValidInput($email2,$password));
        }    
        
        public function testCommentInput() {
            $recommend ="";
            $comment ="";
            $recommend2 = "Yes";
            $comment2 ="Ha";
            $this->assertFalse(commentValidInput($recommend2,$comment2));
            $this->assertTrue(commentValidInput($recommend2,$comment));
            $this->assertTrue(commentValidInput($recommend,$comment2));
        }    
    
        public function testCheckOutInput() {
            $ship_address="";
            $Payment="";
            $TotalCost="";
            $orderNum="";
            $ship_address2="haha";
            $Payment2="lala";
            $TotalCost2="pupu";
            $orderNum2="biubiu";
            $this->assertFalse(CheckOutValidInput($ship_address2,$Payment2,$TotalCost2,$orderNum2));
            $this->assertTrue(CheckOutValidInput($ship_address,$Payment2,$TotalCost,$orderNum));
            $this->assertTrue(CheckOutValidInput($ship_address2,$Payment,$TotalCost2,$orderNum));
        }    
    
    
    }


?>
