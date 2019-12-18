<?php

#Ova funkcija ispisuje nesto
function nekiNazivFunkcije(){
    echo "Pozdrav iz funkcije";
}

#Ova funkcija vraca nesto
function drugaFunkcija(){
    return "Pozdrav iz funkcije <br> ";
}
#pozdrav funkcija
nekiNazivFunkcije(); #ovo nemoze
echo $rezultat = drugaFunkcija(); #ovo moze ali sa echom 

function trecaFunkcija($ime){
    echo "Ja se zovem " . $ime . "<br>";
}

trecaFunkcija ("Amar");
trecaFunkcija("Pera Djetlic");
trecaFunkcija("John");
trecaFunkcija("Dusko Dugousko");

function cetvrta_funkcija($ime = "Johnny English"){
    echo "Hi, " . $ime . ". Welcome to MI7.<br>";
    echo Date("d-m-Y");
    return; 
    echo "Bla bla bla";
}
    cetvrta_funkcija("His buddy"); #samo kada ne postoji vrijednost funkicje


?>