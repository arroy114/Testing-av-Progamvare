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
    public function testsjekkLoggInnFeilPersonnummer() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("5678912", "HeiHei");
        $this->assertRegExp("/Feil i personnummer/",$loggin);
        $this->assertRegExp('//',$loggin);
    }


    public function testsjekkLoggInnFeilPassord() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("12345678912", "Hei");
        $this->assertRegExp("/Feil i passord/",$loggin);
        $this->assertRegExp('//',$loggin);
    }
   // må rettes
    public function testsjekkLoggInnOK() {
        $bank = new Bank(new BankDBStub());
        $loggin = $bank->sjekkLoggInn("12345678912", "HeiHei");
       // $this->assertRegExp("/HeiHei/",$loggin);

        $this->assertEquals('OK',$loggin);
    }
}
