<?php  
class persegiPanjang {
    public $panjang, $lebar; 




    function __construct($panjang, $lebar) {
        $this->$panjang = $panjang;
        $this->$lebar = $lebar;
    }
    function panjang() {
        return $this->panjang;
    }
    function lebar() {
        return $this->lebar;
    }
    
}
?>