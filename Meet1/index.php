<?php 

class mobil{
    public $merek;
    public $warna;
    public $bahanbakar;
    public $cc;

    public function Tampilkan(){
         echo "Mobil saya adalah $this->merek, berwarna $this->warna, bahan bakar $this->bahanbakar, dan bercc $this->cc";
    }

    public function setBahanBakar($bahanbakar){
        $this->bahanbakar = $bahanbakar;
    }

    public function setMerek($merek){
        $this->merek = $merek;
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }

    public function setCC($cc){
        $this->cc = $cc;
    }

}

$avanza = new mobil();
$avanza->merek = "Toyota";
$avanza->warna = "Hitam";
$avanza->bahanbakar = "Pertamax";
$avanza->cc = "1300";
$avanza->Tampilkan();

?>