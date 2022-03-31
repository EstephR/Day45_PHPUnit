<?php
namespace TDD\Test; 
use PHPUnit\Framework\TestCase;
use TDD\Sum;

class SumTest extends TestCase {
    public function sumTest1() {
        $obj = new Sum();
        // $input = [4,2,5,6,1];
        $output = $obj-> sumFunction(2,4);
        $this->assertEquals(6, 5, "The sum should be 6");
    }

}

