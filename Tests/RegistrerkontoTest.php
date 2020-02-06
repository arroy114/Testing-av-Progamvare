<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';


class RegisterkontoTest extends PHPUnit\Framework\TestCase
{
   public function testregisterKontoOK(){
       $admin = new Admin(new AdminDBStub());
       $konto = new konto();
       $konto ->kontonummer="23434553535";
       $enkonto = $admin->registrerKonto($konto);
       $this->assertEquals("OK",$enkonto);
   }
   public function testrgisterKontoFeil(){
       $admin = new Admin(new AdminDBStub());
       $konto = new konto();
       $konto ->kontonummer=null;
       $enkonto = $admin->registrerKonto($konto);
       $this->assertEquals("Feil",$enkonto);
   }
}
