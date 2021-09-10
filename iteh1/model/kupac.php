<?php

class Kupac {
    public $id;
    public $imePrezime;
    public $korisnickoIme;
    public $sifra;

    public function __construct($id = null, $imePrezime = null, $korisnickoIme = null, $sifra = null)
    {
        $this->id = $id;
        $this->imePrezime = $imePrezime;
        $this->korisnickoIme = $korisnickoIme;
        $this->sifra = $sifra;
    }

    public static function loginKupca($korisnickoIme, $sifra,mysqli $conn)
    {
        $q ="select * from kupci where korisnickoIme='".$korisnickoIme."' and sifra='".$sifra."' limit 1";
        return $conn->query($q);
    }


}