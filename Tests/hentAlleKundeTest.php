<?php
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/adminDatabaseStub.php';
require __DIR__.'/../BLL/adminLogikk.php';
*/
include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';

class hentAlleKundeTest extends PHPUnit\Framework\TestCase
{

    public function testHentAlleKunde()
    {
        $kunde = new Admin(new AdminDBStub());
        $enkunde = $kunde->hentAlleKunder();
        $this->assertEquals("01010122344", $enkunde[0]->personnummer);
        $this->assertEquals("Per Olsen", $enkunde[0]->navn);
        $this->assertEquals("Osloveien 82 0270 Oslo", $enkunde[0]->adresse);
        $this->assertEquals("12345678", $enkunde[0]->telefonnr);
        $this->assertEquals("01012122344",$enkunde[1]->personnummer);
        $this->assertEquals("Line Jensen",$enkunde[1]->navn);
        $this->assertEquals("Askerveien 100, 1379 Asker",$enkunde[1]->adresse);
        $this->assertEquals("92876789",$enkunde[1]->telefonnr);
        $this->assertEquals("02020233455",$enkunde[2]->personnummer);
        $this->assertEquals("Ole Olsen",$enkunde[2]->navn);
        $this->assertEquals("Bærumsveien 23, 1234 Bærum",$enkunde[2]->adresse);
        $this->assertEquals("99889988",$enkunde[2]->telefonnr);

    }
}
