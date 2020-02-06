<?php

/*require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';


class HentBetalingTest extends PHPUnit\Framework\TestCase
{
    public function testhentBetaling()
    {
        $bank = new Bank(new BankDBStub());
        $personnummer = "2322212343";
        $konto = $bank->hentBetalinger($personnummer);
        $this->assertEquals(2500, $konto->transaksjonBelop);
        $this->assertEquals(100, $konto->belop);
        $this->assertEquals("15-3-2015", $konto->dato);
        $this->assertEquals("Husleie", $konto->melding);
        $this->assertEquals(0, $konto->avventer);
    }
}
