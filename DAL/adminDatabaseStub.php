<?php
include_once '../Model/domeneModell.php';



class AdminDBStub {



    function hentAlleKunder() {
        $alleKunder = array();
        $kunde1 = new kunde();
        $kunde1->personnummer = "01010122344";
        $kunde1->navn = "Per Olsen";
        $kunde1->adresse = "Osloveien 82 0270 Oslo";
        $kunde1->telefonnr = "12345678";
        $alleKunder[] = $kunde1;
        $kunde2 = new kunde();
        $kunde2->personnummer = "01012122344";
        $kunde2->navn = "Line Jensen";
        $kunde2->adresse = "Askerveien 100, 1379 Asker";
        $kunde2->telefonnr = "92876789";
        $alleKunder[] = $kunde2;
        $kunde3 = new kunde();
        $kunde3->personnummer = "02020233455";
        $kunde3->navn = "Ole Olsen";
        $kunde3->adresse = "Bærumsveien 23, 1234 Bærum";
        $kunde3->telefonnr = "99889988";
        $alleKunder[] = $kunde3;
        return $alleKunder;
    }

    function endreKundeInfo($kunde) {
        if ($kunde->fornavn == null) {
            return "Feil";
        }
        return "OK";
    }

    function registrerKunde($kunde) {
        if ($kunde->postnr == -1) {
            return "Feil";
        }

        return "OK";
    }

    function slettKunde($personnummer) {

        if ($personnummer ==! null) {
            return "OK";
        } else {
            return "Feil";
        }
    }

    function registerKonto($konto) {

        if ( $konto->kontonummer ==! null) {
            return "OK";
        } else {
            return "Feil";
        }
    }

    function endreKonto($konto) {
        if($konto->personnummer == -1) {
            return "Feil i personnummer";
        }
        else if ( $konto->kontonummer == -1) {
            return "Feil i kontonummer";
        } else {
            return "OK";
        }
    }

    function hentAlleKonti() {
        $konto = array();

        $konto1 = new konto();
        $konto1->personnummer = "12345678912";
        $konto1->kontonummer = "22334412345";
        $konto1->saldo = 0;
        $konto1->type = "Sparkonto";
        $konto1->valuta = "NOK";

        $konto[]=$konto1;
        $konto2 = new konto();

        $konto2->personnummer = "23423423423";
        $konto2->kontonummer = "34556577845";
        $konto2->saldo = 1000;
        $konto2->type = "Sparkonto";
        $konto2->valuta = "EUR";
        $konto[]=$konto2;

        $konto3 = new konto();
        $konto3->personnummer = "45545645645";
        $konto3->kontonummer = "7884564563";
        $konto3->saldo = 100;
        $konto3->type = "Sparkonto";
        $konto3->valuta = "NOK";
        $konto[]=$konto3;

        return $konto;
    }

    function slettKonto($kontonummer) {
    
        if ($kontonummer==! null) {
            return "Ok";
        }
        return "Feil kontonummer";
    }

}
