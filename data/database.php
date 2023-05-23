<?php

$prod1 = new Food("Croccantini di Manzo");
$prod1->setImage("img/prod1.jpg");
$prod1->setBrand("Royal Canin");
$prod1->setPrice(20);
$prod1->setTypology(["cane"]);
$prod1->setTaste("carne");
$prod1->setWeight(5);

$prod2 = new Food("Le Ghiottonerie in Gelatina");
$prod2->setImage("img/prod2.jpg");
$prod2->setBrand("Felix");
$prod2->setPrice(35);
$prod2->setTypology(["gatto"]);
$prod2->setTaste("pesce");
$prod2->setWeight(2);

$prod3 = new Food("Mini patè con Agnello");
$prod3->setImage("img/prod3.jpg");
$prod3->setBrand("Migliorcane");
$prod3->setPrice(5);
$prod3->setTypology(["cane", "gatto"]);
$prod3->setTaste("agnello");
$prod3->setWeight(1);

$prod4 = new Food("Bocconi con Pollo e Tacchino");
$prod4->setImage("img/prod4.jpg");
$prod4->setBrand("Migliorcane");
$prod4->setPrice(10);
$prod4->setTypology(["cane"]);
$prod4->setTaste(["Pollo", "Tacchino"]);
$prod4->setWeight(3);

$prod5 = new Toy("Osso Finto");
$prod5->setImage("img/prod5.jpg");
$prod5->setBrand("Royal Canin");
$prod5->setPrice(10);
$prod5->setTypology(["cane"]);
$prod5->setMaterial("plastica");
$prod5->setColor("nero");

$prod6 = new Toy("Pesce Finto");
$prod6->setImage("img/prod6.jpg");
$prod6->setBrand("Felix");
$prod6->setPrice(5);
$prod6->setTypology(["gatto"]);
$prod6->setMaterial("plastica");
$prod6->setColor("rosso");

$prod7 = new Toy("Pallina");
$prod7->setImage("img/prod7.jpg");
$prod7->setBrand("Migliorcane");
$prod7->setPrice(2);
$prod7->setTypology(["cane", "gatto"]);
$prod7->setMaterial("poliuretano");
$prod7->setColor("blu");

$prod8 = new Toy("Topolino peluche");
$prod8->setImage("img/prod8.jpg");
$prod8->setBrand("Migliorcane");
$prod8->setPrice(8);
$prod8->setTypology(["gatto"]);
$prod8->setMaterial("poliuretano");
$prod8->setColor("verde");