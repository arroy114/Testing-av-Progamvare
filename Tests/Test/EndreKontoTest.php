<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';



class EndreKontoTest extends PHPUnit\Framework\TestCase
{
    public function testendreKontoFeilKonto()
    {
        $admin = new Admin(new AdminDBStub());
        $konto = new konto();
        $konto->kontonummer = -1;
        $enkonto = $admin->endreKonto($konto);
        $this->assertEquals("Feil i kontonummer", $enkonto);
    }

    public function testendreKontoFeilPersonnummer()
    {
        $admin = new Admin(new AdminDBStub());
        $konto = new konto();
        $konto->personnummer = -1;
        $enkonto = $admin->endreKonto($konto);
        $this->assertEquals("Feil i personnummer", $enkonto);
    }
    
    public function testendreKontoOK()
    {
        $admin = new Admin(new AdminDBStub());
        $konto = new konto();
        $konto->kontonummer = "22334412345";
        $konto->personnummer="12345678912";
        $enkonto = $admin->endreKonto($konto);
        $this-> assertEquals("OK",$enkonto);
    }

}
