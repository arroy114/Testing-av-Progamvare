<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';


class HentkontiTest extends PHPUnit\Framework\TestCase
{
    public function testhentKonti()
    {
        $bank = new Bank(new BankDBStub());
        $konto = $bank->hentKonti("0121212121211");
        $this->assertEquals("22334412345", $konto->kontonummer);
        $this->assertEquals(0, $konto->saldo);
        $this->assertEquals("Sparkonto", $konto->type);
        $this->assertEquals("NOK", $konto->valuta);
        $this->assertEquals('2015-03-26', $konto->transaksjoner[0]->dato);
        $this->assertEquals(134.4, $konto->transaksjoner[0]->transaksjonBelop);
        $this->assertEquals("22342344556", $konto->transaksjoner[0]->fraTilKontonummer);
        $this->assertEquals("Meny Holtet", $konto->transaksjoner[0]->melding);
    }
}
