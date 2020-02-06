<?php


include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
class endrKundeInfoBankTest extends PHPUnit\Framework\TestCase
{
    public function testendreKundeInfoFeil(){
        $bank =new Bank(new BankDBStub());
        $enKunde = new kunde();
        $enKunde->personnummer = "23432346876";
        $enKunde->navn = null;
        $enKunde->adresse = "Osloveien 82, 0270 Oslo";
        $enKunde->telefonnr = "12345678";

        $kunde = $bank-> endreKundeInfo($enKunde);
        $this-> assertEquals("Feil",$kunde);
    }
    public function testendreKundeInfoOK(){
        $bank =new Bank(new BankDBStub());
        $enKunde = new kunde();
        $enKunde->personnummer = "23432346876";
        $enKunde->fornavn =  "Per";
        $enKunde->adresse = "Osloveien 82, 0270 Oslo";
        $enKunde->telefonnr = "12345678";

        $kunde = $bank-> endreKundeInfo($enKunde);
        $this-> assertEquals("OK",$kunde);
    }
}
