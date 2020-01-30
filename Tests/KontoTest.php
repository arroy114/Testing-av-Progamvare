<?php


include_once '../Model/domeneModell.php';

include_once '../BLL/bankLogikk.php';

class KontoTest extends PHPUnit\Framework\TestCase
{

    public function testhentKonti() {
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
    public function testhentSaldi(){
        $bank =new bank(new BankDBStub());
        $konto = $bank->hentSaldi("98765463216");
        $this->assertEquals ("22334412345", $konto -> kontonummer);
        $this->assertEquals (0, $konto -> saldo);
        $this->assertEquals ("Sparkonto", $konto -> type);
        $this->assertEquals ("NOK", $konto -> valuta);
        $this->assertEquals('2018-01-26', $konto->transaksjoner[1]->dato);
        $this->assertEquals(144.4, $konto->transaksjoner[1]->transaksjonBelop);
        $this->assertEquals("223456664556", $konto->transaksjoner[1]->fraTilKontonummer);
        $this->assertEquals("Meny", $konto->transaksjoner[1]->melding);

    }
    public function  testRegetalingOk(){
        $bank =new bank(new BankDBStub());
        $konto = $bank -> registrerBetaling("2323232323","121212");
        $this -> assertEquals("OK",$konto);

    }

    public function  testRegetalingFeil(){
        $bank =new bank(new BankDBStub());
        $konto = $bank -> registrerBetaling(null,"121212");
        $this -> assertEquals("Feil",$konto);

    }

}
