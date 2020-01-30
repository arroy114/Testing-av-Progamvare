<?php

include_once '../Model/domeneModell.php';

include_once '../BLL/bankLogikk.php';


class LoginTest extends PHPUnit\Framework\TestCase
{
    public function testsjekkLoggInnFeilPersonnummer() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("5678912", "HeiHei");
        $this->assertEquals("Feil i personnummer",$loggin);
        $this->assertRegExp('/[0-9]{11}/',$loggin);
    }


    public function testsjekkLoggInnFeilPassord() {
        $kunde = new Bank(new BankDBStub());
        $loggin = $kunde->sjekkLoggInn("12345678912", "Hei");
        $this->assertEquals("Feil i passord",$loggin);
        $this->assertRegExp('/.{6,30}/',$loggin);
    }
    public function testsjekkLoggInnOK() {
        $bank = new Bank(new BankDBStub());
        $loggin = $bank->sjekkLoggInn("12345678912", "HeiHei");
        $this->assertEquals("Ok",$loggin);

        $this->assertRegExp('/[0-9]{11}/',$loggin);
    }
}
