<?php

include_once '../Model/domeneModell.php';

class AdminDB {
/*
    function hentAlleKunder() {

        $kunder = array();
        $kunde1 = new kunde();
        $kunde1->fornavn = "Olav";
        $kunde1->etternavn = "Rekson";
        $kunde1->adresse = "Storgate 83 0270 Oslo";
        $kunde1->telefonnr = "234234234";
        $kunde1->epost = "Olav@gmail.com";
        $alleKunder[] = $kunde1;
        $kunde2 = new kunde();
        $kunde2->fornavn = "Toni";
        $kunde2->etternavn = "Sadio";
        $kunde2->adresse = "Asalkveien 10, 1234 Drammen";
        $kunde2->telefonnr = "983663552";
        $kunde2->epost = "Toni@gmail.com";
        $alleKunder[] = $kunde2;
        $kunde3 = new kunde();
        $kunde3->fornavn = "Roxan";
        $kunde3->etternavn = "Salama";
        $kunde3->adresse = "Trimvein 6 , 0372 Oslo";
        $kunde3->telefonnr = "9834234";
        $kunde3->epost = "Roxan@gmail.com";
        $alleKunder[] = $kunde3;

        return $kunder;
    }
*/
    function endreKundeInfo($kunde) {
        if ($kunde->fornavn == null) {
            return "Feil";
        }
        return "OK";
    }

    function registrerKunde($kunde) {
        if ($kunde->fornavn == "Olav") {
            return "OK";
        }
        return "Feil";
    }

    function slettKunde($personnummer) {

        if ($personnummer ==! null) {
            return "OK";
        } else {
            return "Feil";
        }
    }

    function registerKonto($konto) {

        if ($konto->$kontonummer ==! null) {
            return "OK";
        } else {
            return "Feil";
        }
    }

    function endreKonto($konto) {
        if ($konto->$kontonummer == -1) {
            return "feil";
        } else {
            return "OK";
        }
    }

    function hentAlleKonti() {
        $konto = array();
        $konto1 = new konto();
        $trans1=new transaksjon();
        $konto1->personnummer = "12345678912";
        $konto1->kontonummer = "22334412345";
        $konto1->saldo = 0;
        $konto1->type = "Sparkonto";
        $konto1->valuta = "NOK";
        $konto1->transaksjoner = array(); // av transaksjon
      
        $trans1-> fraTilKontonummer="105010123456" ;
        $trans1->  transaksjonBelop=2500;
        $trans1->  belop=100;
        $trans1->  dato="15-3-2015";
        $trans1->  melding="Husleie";
        $trans1->  avventer=0;
        $transaksjoner1[]=$trans1;
        
        
        $konto2 = new konto();
        $trans2=new transaksjon();
        $konto2->personnummer = "23423423423";
        $konto2->kontonummer = "34556577845";
        $konto2->saldo = 1000;
        $konto2->type = "Sparkonto";
        $konto2->valuta = "EUR";
        $konto2->transaksjoner = array(); 
    
          
        $trans2-> fraTilKontonummer="20102012345";
        $trans2->  transaksjonBelop=200;
        $trans2->  belop=100;
        $trans2->  dato="1-2-2018";
        $trans2->  melding="Skatt";
        $trans2->  avventer=1;
        $transaksjoner2[]=$trans2;
        
        $konto3 = new konto();
        $trans3=new transaksjon();
        $konto3->personnummer = 45545645645;
        $konto3->kontonummer = 7884564563;
        $konto3->saldo = 100;
        $konto3->type = "Sparkonto";
        $konto3->valuta = "NOK";
        $konto3->transaksjoner3 = array(); 
        
        $trans3-> fraTilKontonummer=20102012345;
        $trans3->  transaksjonBelop=400;
        $trans3->  belop=1000;
        $trans3->  dato=11/12/2019;
        $trans3->  melding="Leie BIl";
        $trans3->  avventer=1;
        $transaksjoner3[]=$trans3;
        
    }

    function slettKonto($kontonummer) {
    
        if ($kontonummer==! null) {
            return "Ok";
        }
        return "Feil";
    }

}
