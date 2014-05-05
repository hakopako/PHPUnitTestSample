<?php
require_once(dirname(__FILE__) . '/../program.php');

class ProgramTest extends PHPUnit_Framework_TestCase
{
	public function setUp() {
	}

	public function tearDown() {
	}

	public function testPlusone()
	{
		$expected = 3;
		$base = 2;

		$target = new Program;
		$result = $target->plusone($base);

		$this->assertEquals($expected, $result);
	}

	public function testTimes()
	{
		$expected = 15;
		$base = 3;
		$times = 5;

		$target = new Program;
		$result = $target->times($base, $times);

		$this->assertEquals($expected, $result);
	}

	public function testIsZero()
	{
		$base = 3;

		$target = new Program;
		$result = $target->isZero($base);

		$this->assertFalse($result);

	}

	// public function testNegative()
	// {
	// 	$expected = -3;
	// 	$base = 3;

	// 	$target = new Program;
	// 	$result = $target->negative($base);

	// 	$this->assertEquals($expected, $result);
	// }


}
?>