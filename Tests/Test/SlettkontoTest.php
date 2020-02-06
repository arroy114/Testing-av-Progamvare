<?php
include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';

use PHPUnit\Framework\TestCase;

class SlettkontoTest extends TestCase
{
 public function testslettKontoOK()

 {
     $admin = new Admin(new AdminDBStub());
     $enkonto = $admin->slettKunde("7884564563");
     $this->assertEquals("OK",$enkonto);

 }
    public function testslettKontofeil()

    {
        $admin = new Admin(new AdminDBStub());
        $enkonto = $admin->slettKonto(null);
        $this->assertEquals("Feil kontonummer",$enkonto);

    }
}
