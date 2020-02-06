<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';

class hentAllekontiTest extends PHPUnit\Framework\TestCase
{
 public function testHentAllekonti(){
     $admin =new Admin(new AdminDBStub()) ;
     $konto1 =$admin->hentAlleKonti();

     $this->assertEquals("12345678912",$konto1[0]->personnummer);
     $this->assertEquals("22334412345",$konto1[0]->kontonummer);
     $this->assertEquals(0,$konto1[0]->saldo);
     $this->assertEquals("Sparkonto",$konto1[0]->type);
     $this->assertEquals("NOK",$konto1[0]->valuta);

     $this->assertEquals("23423423423",$konto1[1]->personnummer);
     $this->assertEquals("34556577845",$konto1[1]->kontonummer);
     $this->assertEquals(1000,$konto1[1]->saldo);
     $this->assertEquals("Sparkonto",$konto1[1]->type);
     $this->assertEquals("EUR",$konto1[1]->valuta);

     $this->assertEquals("45545645645",$konto1[2]->personnummer);
     $this->assertEquals("7884564563",$konto1[2]->kontonummer);
     $this->assertEquals(100,$konto1[2]->saldo);
     $this->assertEquals("Sparkonto",$konto1[2]->type);
     $this->assertEquals("NOK",$konto1[2]->valuta);

 }
}
