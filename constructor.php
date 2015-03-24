<?php 
/**
 * Class Kereta
 *
 * @package default
 * @author haezal musa
 **/
class Kereta
{
	public $jenama;
	public $model;
	public $warna;

	/**
	 * Constructor
	 *
	 * @return void
	 * @author haezal musa
	 **/
	public function __construct($jenama, $model, $warna)
	{
		$this->jenama=$jenama;
		$this->model=$model;
		$this->warna=$warna;
	} // end function __construct()

	/**
	 * Method status
	 *
	 * @return void
	 * @author haezal
	 **/
	public function diskaun()
	{
		if($this->jenama="perodua"){
			$diskaun = "50%";
		}
		else{
			$diskaun = "20%";
		}
		return $diskaun;
	} // end function status
} // END class Kereta
?>