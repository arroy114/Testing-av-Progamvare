<?php

include_once '../Model/domeneModell.php';
include_once '../DAL/adminDatabaseStub.php';
include_once '../BLL/adminLogikk.php';
/*
require __DIR__.'/../Model/domeneModell.php';
require __DIR__.'/../DAL/adminDatabaseStub.php';
require __DIR__.'/../BLL/adminLogikk.php';
*/
class RegistrerKundeTest extends PHPUnit\Framework\TestCase
{
    public function testregistrerKundeOK(){
        $admin =new Admin(new AdminDBStub());
        $enKunde = new kunde();
        $enkunde =new kunde();
        $enkunde->fornavn= "Ole";
        $enkunde->etternavn="Olsen";
        $enkunde->adresse = "Osloevein 2";
        $enkunde->telefonnr="4636328";
        $enkunde->personnummer="12345678923";
        $enKunde->telefonnr = "12345678";

        $kunde = $admin->registrerKunde($enKunde);
        $this-> assertEquals("OK",$kunde);
    }
    public function testregistrerKundeFeil(){
        $admin =new Admin(new AdminDBStub());
        $enkunde = new kunde();

        $enkunde->fornavn= "Ole";
        $enkunde->etternavn="Olsen";
        $enkunde->adresse = "Osloevein 2";
        $enkunde->telefonnr="4636328";
        $enkunde->personnummer="12345678923";
        $enkunde->telefonnr = "12345678";
        $enkunde->postnr=-1;
        $kunde = $admin-> registrerKunde($enkunde);
        $this-> assertEquals("Feil",$kunde);
    }
}
