<?php  
class Calculations 
{
	/**
	 * Adds the given integers to eachother and returns the total
	 * 
	 * @param int $a
	 * @param int $b
	 * @return int $total
	 */
	public function add(int $a, int $b) 
	{
		return $a + $b;
	}

	/**
	 * Substract int b from int a and returns the total
	 * 
	 * @param int $a
	 * @param int $b
	 * @return int $total
	 */
	public function substract(int $a, int $b) 
	{
		return $a - $b;
	}
}
?>