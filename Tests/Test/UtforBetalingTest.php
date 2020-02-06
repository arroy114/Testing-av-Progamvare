<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';

class UtforBetalingTest extends PHPUnit\Framework\TestCase
{
    public function testutforBetalingFeil()
    {
        $bank = new Bank(new BankDBStub());
        $konto = $bank->utforBetaling(-1);
        $this->assertEquals("Feil", $konto);
    }

    public function testutforBetalingOK()
    {
        $bank = new Bank(new BankDBStub());
        $konto = $bank->utforBetaling(1);
        $this->assertEquals("OK", $konto);
    }


}
