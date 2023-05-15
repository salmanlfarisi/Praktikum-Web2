<?php
require_once 'class_account.php';
class AccointBank extends Account{
    public $costumer;
}
{
    function __construct($nomor, $saldo, $costumer) {
    parent ::__construct($nomor, $saldo);
        $this->costumer = $costumer;
    }

    public function transfer($ab_tujuan,$uang) {
        $this->withdraw1($uang);
        $ab_tujuan->deposit($uang);
    }
    public function transfer($obj_account,$uang) {
        $obj_account->deposit($uang);
        $this->withdraw($uang); 
    }
    
    public function cetak() {
        parent::cetak();
        echo ', Costumer : ' .$this->costumer; 
    }
    public function getSaldo() {
        return $this->$saldo();ss
}
}
    ?> 

$mhs1 = new Mahasiswa("0422","Ahmad Zaki");
$mhs1->ipk = 3.45;
$mhs->setNamaWali("Budiman");
echo 'Predikat : ' .$mhs->predikat();
    {
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);
    }

    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}
?>