<?php

declare(strict_types=1);

require __DIR__ . '/../src/tracy.php';

use Tracy\Debugger;

// session is required for this functionality
session_start();

// For security reasons, Tracy is visible only on localhost.
// You may force Tracy to run in development mode by passing the Debugger::DEVELOPMENT instead of Debugger::DETECT.
Debugger::enable(Debugger::DETECT, __DIR__ . '/log');
class numbersJiriSlovak{
    //tahle funkce zaokrouhli cislo
    static public function roundJiriSlovak($zaokrouhli) {
        return round($zaokrouhli);
        
    }
    //tahle funkce zaokrouhli cislo nahoru
   static public function ceilJiriSlovak($zaokrouhlinahoru) {
       return ceil($zaokrouhlinahoru);
   }
   //tahle funkce zaokrouhli cislo dolu
   static public function floorJiriSlovak($zaokrouhlidolu) {
       return floor($zaokrouhlidolu);
   }
   //vrátí druhou odmocninu zadaného čísla
   static public function sqrtJiriSlovak($druhaodmocnina) {
       return sqrt($druhaodmocnina);
   }
   // vrátí číslo vzniklé umocněním základu mocniny (první parametr) mocnitelem (druhý parametr).
   static public function powJiriSlovak($mocnina,$mocnitel) {
       return pow($mocnina, $mocnitel);
   }
   // vrati sinus zadaneho uhlu
   static public function sinJiriSlovak($uhel) {
       return sin($uhel);
   }
   //cos(cislo) vrati cosinus zadaneho uhlu
   static public function cosJiriSlovak($uhel) {
       return cos($uhel);
}
    //  vrati tangens zadaneho uhlu
static public function tanJiriSlovak($uhel) {
       return tan($uhel);
}
// inverzní funkce k sinu
static public function asinSJiriSlovak($zcislanauhel) {
       return asin($zcislanauhel);
   }
   //) inverzní funkce k cosinu
   static public function acosJiriSlovak($zcislanauhel) {
       return acos($zcislanauhel);
}
// inverzní funkce k tangens
static public function atanJiriSlovak($zcislanauhel) {
       return atan($zcislanauhel);
}
// vrátí zbytek po dělení dvou čísel, které jsou parametrem funkce
static public function fmodJiriSlovak($zaklad,$delitel) {
    return fmod($zaklad, $delitel);
}
//vrátí maximální hodnotu pole zadaného v parametru
static public function maxJiriSlovak($pole) {
    return max($pole);
}
//vrátí minimální hodnotu pole zadaného v parametru.
static public function minJiriSlovak($pole) {
    return min($pole);
}
// absolutní hodnota zadaného čísla
static public function absJiriSlovak($abscislo) {
    return abs($abscislo);
}
//- odečítíní
static public function odecitaniJiriSlovak($a,$b) {
    return $a-$b;
}
//+ sčítání
static public function scitaniJiriSlovak($a,$b) {
    return $a+$b;
}
// / dělení
static public function deleniJiriSlovak($a,$b) {
    return $a/$b;
}
//* násobení
static public function nasobeniJiriSlovak($a,$b) {
    return $a*$b;
}
// formátije číslo
static public function number_formatJiriSlovak($formatuje) {
    return number_format($formatuje);
}
}
$zaokrouhli = 9.99;
$zaokrouhlinahoru = 9.56;
$zaokrouhlidolu = 7.12;
$druhaodmocnina = 4;
$mocnina = 5;
$mocnitel = 2;
$uhel = 50;
$zcislanauhel = 62;
$zaklad = 15 ;
$delitel = 3;
$pole  = array ('1','2','3','4','5','12','16','25','69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
dump(numbersJiriSlovak::roundJiriSlovak($zaokrouhli)); 
dump(numbersJiriSlovak::ceilJiriSlovak($zaokrouhlinahoru));
dump(numbersJiriSlovak::floorJiriSlovak($zaokrouhlidolu));
dump(numbersJiriSlovak::sqrtJiriSlovak($druhaodmocnina));
dump(numbersJiriSlovak::powJiriSlovak($mocnina, $mocnitel));
dump(numbersJiriSlovak::sinJiriSlovak($uhel));
dump(numbersJiriSlovak::cosJiriSlovak($uhel));
dump(numbersJiriSlovak::tanJiriSlovak($uhel));
//dump(numbersJiriSlovak::asinJiriSlovak($zcislanauhel));
dump(numbersJiriSlovak::acosJiriSlovak($zcislanauhel));
dump(numbersJiriSlovak::atanJiriSlovak($zcislanauhel));
dump(numbersJiriSlovak::fmodJiriSlovak($zaklad, $delitel));
dump(numbersJiriSlovak::maxJiriSlovak($pole));
dump(numbersJiriSlovak::minJiriSlovak($pole));
dump(numbersJiriSlovak::absJiriSlovak($abscislo));
dump(numbersJiriSlovak::odecitaniJiriSlovak($a, $b));
dump(numbersJiriSlovak::scitaniJiriSlovak($a, $b));
dump(numbersJiriSlovak::deleniJiriSlovak($a, $b));
dump(numbersJiriSlovak::nasobeniJiriSlovak($a, $b));
dump(numbersJiriSlovak::number_formatJiriSlovak($formatuje));

// * floor ($mensi)
 //* sqrt(2odmocnina)
 //* pow(cislo, mocnina)
 //* sin(cislo), cos(cislo), tan(cislo)
 //* asin(cislo), acos(cislo), atan(cislo)
// * fmod(základ, dělitel) //vrátí zbytek
// * abs(cislo) //absolutní hodnota zadaného čísla
 //* odečítání
// * sčítání
// * dělení
// * násobení
// * number format



?>
