<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';

class HentSaldiTest extends PHPUnit\Framework\TestCase
{
    public function testhentSaldi()
    {
        $bank = new Bank(new BankDBStub());
        $konto = $bank->hentSaldi("98765463216");
        $this->assertEquals("22334412345", $konto->kontonummer);
        $this->assertEquals(0, $konto->saldo);
        $this->assertEquals("Sparkonto", $konto->type);
        $this->assertEquals("NOK", $konto->valuta);
        $this->assertEquals('2018-01-26', $konto->transaksjoner[1]->dato);
        $this->assertEquals(144.4, $konto->transaksjoner[1]->transaksjonBelop);
        $this->assertEquals("223456664556", $konto->transaksjoner[1]->fraTilKontonummer);
        $this->assertEquals("Meny", $konto->transaksjoner[1]->melding);

    }
}
