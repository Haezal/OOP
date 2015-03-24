<?php  
/**
 * class Kalkulator
 *
 * @package default
 * @author haezal
 **/
class Kalkulator
{
	private $x; 
	private $y;

	public function tambah($x, $y){
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x + $this->y;
		return $hasil;
	}
	public function tolak($x, $y){
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x - $this->y;
		return $hasil;
	}
	public function darab($x, $y){
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x * $this->y;
		return $hasil;
	}
	public function bahagi($x, $y){
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x / $this->y;
		return $hasil;
	}

	public function form(){
		echo '<form method="POST">';
	    echo '<input type="text" name="x"> &nbsp;';
	    echo '<select name="operasi">
		      <option value="tambah">+</option>
		      <option value="darab">x</option>
		      <option value="tolak">-</option>
		      <option value="bahagi">/</option>
	    </select> &nbsp;';
	    echo '<input type="text" name="y"> &nbsp;';
	    echo '<label>=</label> &nbsp;';
	    echo '<input type="submit" value="Kira">';
	    echo '</form>';
	}
} // END class Matematik

// create object
$data = new Kalkulator();
$data->form(); // show form

if ($_POST) {
	$x = $_POST['x'];
	$y = $_POST['y'];
	if ($_POST['operasi'] == "tambah") {
		echo "Hasil ".$x." + ".$y." = ".$data->tambah($x, $y);
	} elseif ($_POST['operasi'] == "darab") {
		echo "Hasil ".$x." x ".$y." = ".$data->darab($x, $y);
	} elseif ($_POST['operasi'] == "tolak") {
		echo "Hasil ".$x." - ".$y." = ".$data->tolak($x, $y);
	} elseif ($_POST['operasi'] == "bahagi") {
		echo "Hasil ".$x." / ".$y." = ".$data->bahagi($x, $y);
	}
}
?>