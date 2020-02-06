<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/adminDatabaseStub.php';
require __DIR__.'/../BLL/adminLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';

class SlettKundeTest extends PHPUnit\Framework\TestCase
{
    public function testSlettKundeOK(){
        $admin =new Admin(new AdminDBStub());
        $enkunde = $admin->slettKunde("23432346876");
        $this->assertEquals("OK",$enkunde);
    }
    public function testSlettKundeFeil(){
        $admin =new Admin(new AdminDBStub());
        $enkunde = $admin->slettKunde(null);
        $this->assertEquals("Feil",$enkunde);
    }
}
