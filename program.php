<?php
class Program {

	public function plusone($base)
	{
		return $base + 1;
	}

	public function times($base, $times)
	{
		return $base * $times;
	}

	public function isZero($base)
	{
		return $base == 0;
	}

	public function negative($base)
	{
		return $base * (-1);
	}

}

?>