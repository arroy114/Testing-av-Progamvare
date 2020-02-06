<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';

*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';

class RegistrerBetalingTest extends PHPUnit\Framework\TestCase
{
    public function testRegestrerBetalingOk()
    {
        $bank = new Bank(new BankDBStub());
        $transaksjon1 = new transaksjon();
        $transaksjon1->dato = '2015-03-26';
        $transaksjon1->transaksjonBelop = 134.4;
        $transaksjon1->fraTilKontonummer = "22342344556";
        $transaksjon1->melding = "Meny Holtet";

        $konto = $bank->registrerBetaling("2323232323", $transaksjon1);
        $this->assertEquals("OK", $konto);

    }

    public function testRegestrerBetalingFeil_kontonr()
    {
        $bank = new Bank(new BankDBStub());
        $transaksjon1 = new transaksjon();
        $transaksjon1->dato = '2015-03-26';
        $transaksjon1->transaksjonBelop = 134.4;
        $transaksjon1->fraTilKontonummer = "22342344556";
        $transaksjon1->melding = "Meny Holtet";
        $konto = $bank->registrerBetaling(null, $transaksjon1);
        $this->assertEquals("Feil", $konto);

    }
    public function testRegestrerBetalingFeil_fratilkontonr()
    {
        $bank = new Bank(new BankDBStub());
        $transaksjon1 = new transaksjon();
        $transaksjon1->dato = '2015-03-26';
        $transaksjon1->transaksjonBelop = 134.4;
        $transaksjon1->fraTilKontonummer = null;
        $transaksjon1->melding = "Meny Holtet";
        $konto = $bank->registrerBetaling("2323232323", $transaksjon1);
        $this->assertEquals("Feil", $konto);

    }
}
