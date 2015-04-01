<?php  
class Animal{
 
    private $type = "animal";
 	protected $type2 = "animal";

    public function private_dance() {
        echo $this->type . " dances!\n";
        return true;
    }

    public function protected_dance(){
    	echo $this->type2 . " dances!\n";
        return true;
    }

}

class Penguin extends Animal {
    public $type = "penguin";
 	public $type2 = "penguin";
}

$tux = new Penguin();
 
 echo "<h4>Hak akses</h4>";
// make tux dance
$tux->private_dance();
echo "<br>";
$tux->protected_dance();
?>