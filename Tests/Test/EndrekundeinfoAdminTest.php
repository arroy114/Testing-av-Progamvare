<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';


class EndrekundeinfoAdminTest extends  PHPUnit\Framework\TestCase
{
    public function testendreKundeInfoFeil(){
        $bank =new Admin(new AdminDBStub());
        $enKunde = new kunde();
        $enKunde->personnummer = "23432346876";
        $enKunde->navn = null;
        $enKunde->adresse = "Osloveien 82, 0270 Oslo";
        $enKunde->telefonnr = "12345678";

        $kunde = $bank-> endreKundeInfo($enKunde);
        $this-> assertEquals("Feil",$kunde);
    }
    public function testendreKundeInfoOK(){
        $bank =new Admin(new AdminDBStub());
        $enKunde = new kunde();
        $enKunde->personnummer = "23432346876";
        $enKunde->fornavn =  "Per";
        $enKunde->adresse = "Osloveien 82, 0270 Oslo";
        $enKunde->telefonnr = "12345678";

        $kunde = $bank-> endreKundeInfo($enKunde);
        $this-> assertEquals("OK",$kunde);
    }
}
