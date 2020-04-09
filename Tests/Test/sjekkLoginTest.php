<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';


class sjekkLoginTest extends PHPUnit\Framework\TestCase
{
    public function testsjekkLoggInnFeilPersonnummerMerEnn11Tall() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("123456789011", "HeiHei");
        $this->assertEquals("Feil i personnummer",$loggin);
    }
    
        public function testsjekkLoggInnFeilPersonnummerMindreEnn11Tall() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("5678912", "HeiHei");
        $this->assertEquals("Feil i personnummer",$loggin);
    }


    public function testsjekkLoggInnFeilPassord() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("12345678912", "Hei");
        $this->assertEquals("Feil i passord",$loggin);
    }

    public function testsjekkLoggInnOK() {
        $bank = new Bank(new BankDBStub());
        $loggin = $bank->sjekkLoggInn("12345678912", "HeiHei");

        $this->assertEquals('OK',$loggin);
    }
}
