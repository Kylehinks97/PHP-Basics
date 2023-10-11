<?php 

use PHPUnit\Framework\TestCase;

class formatMoneyTest extends TestCase
{
  protected function setUp(): void
    {
        require_once 'functions.php';
    }
    
    public function testBasicCase()
    {
        $result = formatMoney(5.959, '$');
        $this->assertEquals("$5.96", $result);
    }

    public function testLargeNumber()
    {
        $result = formatMoney(1000000.99, '$');
        $this->assertEquals("$1,000,000.99", $result);  // assuming you handle commas
    }

    public function testSmallNumber()
    {
        $result = formatMoney(0.009, '$');
        $this->assertEquals("$0.01", $result); 
    }

    public function testNegativeNumber()
    {
        $result = formatMoney(-5.959, '$');
        $this->assertEquals("-$5.96", $result);
    }

    public function testLargerNegativeNumbers() {
        $result = formatMoney(-12345678.90, "£");
        $this->assertEquals("-£12,345,678.90", $result);
    }
    
}
