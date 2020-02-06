<?php
include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';

class HentEnkundeTest extends PHPUnit\Framework\TestCase
{
    public function testhentEnkunde()
    {
        $kunde = new Admin(new AdminDBStub());
        $enkunde = $kunde->hentAlleKunder();
        $this->assertEquals("01010122344", $enkunde[0]->personnummer);
        $this->assertEquals("Per Olsen", $enkunde[0]->navn);
        $this->assertEquals("Osloveien 82 0270 Oslo", $enkunde[0]->adresse);
        $this->assertEquals("12345678", $enkunde[0]->telefonnr);
    }
}
