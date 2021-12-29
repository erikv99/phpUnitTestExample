<?php
use PHPUnit\Framework\TestCase;
require_once(__DIR__ . "/calculations.php");

class testCalculations extends TestCase 
{
	/**
	 * Runs before testing
	 */
	public function setUp() : void
	{
		$this->calculations = new Calculations();		
	}

	/** 
	 * Runs after testing
	 */
	public function tearDown() : void
	{
		// Clean up if needed
	}

	/**
	 * Functions tests the Add function 
	 */
	public function testAdd() 
	{
		// Setting the vars we're going to use for testing
		$a = 5;
		$b = 7;

		// Testing the add function of the calculations class with our testing variables. the expected output it 12
		$this->assertEquals(12, $this->calculations->add($a, $b));
	}
}
?>
