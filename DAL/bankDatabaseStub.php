<?php

include_once '../Model/domeneModell.php';

class BankDBStub {

    function hentEnKunde($personnummer) {
        $enKunde = new kunde();
        $enKunde->personnummer = $personnummer;
        $enKunde->navn = "Per Olsen";
        $enKunde->adresse = "Osloveien 82, 0270 Oslo";
        $enKunde->telefonnr = "12345678";
        return $enKunde;
    }

    function hentAlleKunder() {
        $alleKunder = array();
        $kunde1 = new kunde();
        $kunde1->personnummer = "01010122344";
        $kunde1->navn = "Per Olsen";
        $kunde1->adresse = "Osloveien 82 0270 Oslo";
        $kunde1->telefonnr = "12345678";
        $alleKunder[] = $kunde1;
        $kunde2 = new kunde();
        $kunde2->personnummer = "01010122344";
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

    function hentTransaksjoner($kontoNr, $fraDato, $tilDato) {
        date_default_timezone_set("Europe/Oslo");
        $fraDato = strtotime($fraDato);
        $tilDato = strtotime($tilDato);
        if ($fraDato > $tilDato) {
            return "Fra dato må være større enn tildato";
        }
        $konto = new konto();
        $konto->personnummer = "010101234567";
        $konto->kontonummer = $kontoNr;
        $konto->type = "Sparekonto";
        $konto->saldo = 2300.34;
        $konto->valuta = "NOK";
        if ($tilDato < strtotime('2015-03-26')) {
            return $konto;
        }
        $dato = $fraDato;
        while ($dato <= $tilDato) {
            switch ($dato) {
                case strtotime('2015-03-26') :
                    $transaksjon1 = new transaksjon();
                    $transaksjon1->dato = '2015-03-26';
                    $transaksjon1->transaksjonBelop = 134.4;
                    $transaksjon1->fraTilKontonummer = "22342344556";
                    $transaksjon1->melding = "Meny Holtet";
                    $konto->transaksjoner[] = $transaksjon1;
                    break;
                case strtotime('2015-03-27') :
                    $transaksjon2 = new transaksjon();
                    $transaksjon2->dato = '2015-03-27';
                    $transaksjon2->transaksjonBelop = -2056.45;
                    $transaksjon2->fraTilKontonummer = "114342344556";
                    $transaksjon2->melding = "Husleie";
                    $konto->transaksjoner[] = $transaksjon2;
                    break;
                case strtotime('2015-03-29') :
                    $transaksjon3 = new transaksjon();
                    $transaksjon3->dato = '2015-03-29';
                    $transaksjon3->transaksjonBelop = 1454.45;
                    $transaksjon3->fraTilKontonummer = "114342344511";
                    $transaksjon3->melding = "Lekeland";
                    $konto->transaksjoner[] = $transaksjon3;
                    break;
            }
            $dato += (60 * 60 * 24); // en dag i tillegg i sekunder
        }
        return $konto;
    }

    function sjekkLoggInn($personnummer, $passord) {

        if ($personnummer == "5678912") {
            return "Feil i personnummer";
        } if($passord == "Hei") {
            return "Feil i passord";
        }
        return "OK";
    }

    function hentKonti($personnummer) {

        $konto = array();
        $konto1 = new konto();

        $konto1->personnummer = $personnummer;
        $konto1->kontonummer = "22334412345";
        $konto1->saldo = 0;
        $konto1->type = "Sparkonto";
        $konto1->valuta = "NOK";
        $konto1->transaksjoner = array();

        $transaksjon1 = new transaksjon();
        $transaksjon1->dato = '2015-03-26';
        $transaksjon1->transaksjonBelop = 134.4;
        $transaksjon1->fraTilKontonummer = "22342344556";
        $transaksjon1->melding = "Meny Holtet";
        $konto1->transaksjoner[0] = $transaksjon1;

        $transaksjon2 = new transaksjon();
        $transaksjon2->dato = '2018-01-26';
        $transaksjon2->transaksjonBelop = 144.4;
        $transaksjon2->fraTilKontonummer = "223456664556";
        $transaksjon2->melding = "Meny";
        $konto1->transaksjoner[1] = $transaksjon2;
        return $konto1;
    }

    function hentSaldi($personnummer) {
        $konto = array();
        $konto1 = new konto();
        $trans1 = new transaksjon();
        $konto1->personnummer = $personnummer;
        $konto1->kontonummer = "22334412345";
        $konto1->saldo = 0;
        $konto1->type = "Sparkonto";
        $konto1->valuta = "NOK";
        $konto1->transaksjoner = array();

        $trans1->fraTilKontonummer = "105010123456";
        $trans1->transaksjonBelop = 2500;
        $trans1->belop = 100;
        $trans1->dato = "15-3-2015";
        $trans1->melding = "Husleie";
        $trans1->avventer = 0;

        $transaksjoner1[0] = $trans1;

        $transaksjon2 = new transaksjon();
        $transaksjon2->dato = '2018-01-26';
        $transaksjon2->transaksjonBelop = 144.4;
        $transaksjon2->fraTilKontonummer = "223456664556";
        $transaksjon2->melding = "Meny";
        $konto1->transaksjoner[1] = $transaksjon2;

        return $konto1;
    }

    function registrerBetaling($kontoNr, $transaksjon) {

        if ($kontoNr ==! null) {
            return "OK";
        } else {
            return "Feil";
        }
    }


    function hentBetalinger($personnummer) {

        $betalinger = new transaksjon();
        $betalinger->fraTilKontonummer = $personnummer;
        $betalinger->transaksjonBelop = 2500;
        $betalinger->belop = 100;
        $betalinger->dato = "15-3-2015";
        $betalinger->melding = "Husleie";
        $betalinger->avventer = 0;

        return $betalinger;
    }

    function utforBetaling($TxID) {
        if ($TxID == -1) {
            return "Feil";
        }
        return "OK";
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
        return "Ok";
    }

    function slettKunde($personnummer) {
        if ($personnummer == !null) {
            return "OK";
        }
        return "Feil";
    }

    function hentKundeInfo($personnummer) {
        $kunde = new kunde();

        $kunde->personnummer = $personnummer;
        $kunde->fornavn = "Olav";
        $kunde->etternavn = "Rekson";
        $kunde->adresse = "Storgate 83";
        $kunde->telefonnr = "234234234";

        return $kunde;
    }

}
