<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/bankDatabaseStub.php';
require __DIR__.'/../BLL/bankLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/bankDatabaseStub.php';
include_once '../BLL/bankLogikk.php';

class HentkundeInfoTest extends PHPUnit\Framework\TestCase
{

    public function testhentKundeInfo(){
        $admin =new Bank(new BankDBStub());
        $enkunde = $admin ->hentKundeInfo("23432346876");
        $this->assertEquals("Olav",$enkunde->fornavn);
        $this->assertEquals("Rekson",$enkunde->etternavn);
        $this-> assertEquals("Storgate 83",$enkunde->adresse);
        $this->assertEquals("234234234",$enkunde->telefonnr);
    }
}
