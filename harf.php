<?php
$c =
    [
        "0" => "",
        "1" => "bir",
        "2" => "iki",
        "3" => "üç",
        "4" => "dört",
        "5" => "beş",
        "6" => "altı",
        "7" => "yedi",
        "8" => "sekiz",
        "9" => "dokuz"
    ];
$o = [
    "0" => "",
    "1" => "on",
    "2" => "yirmi",
    "3" => "otuz",
    "4" => "kırk",
    "5" => "elli",
    "6" => "altmış",
    "7" => "yetmiş",
    "8" => "seksen",
    "9" => "doksan"
];

$y = [
    "0" => "",
    "1" => "yüz",
    "2" => "ikiyüz",
    "3" => "üçyüz",
    "4" => "dörtyüz",
    "5" => "beşyüz",
    "6" => "altıyüz",
    "7" => "yediyüz",
    "8" => "sekizyüz",
    "9" => "dokuzyüz"
];

for ($i = 100; $i <= 999; $i++) {
    $a = $i / 3;
    if (is_int($a) & strlen($a) == 3) {
        $get = "$a";
        $orj = "$i";
        $yaz = $y["$get[0]"] . $o["$get[1]"] . $c["$get[2]"];
        $yaz2 = $y["$orj[0]"] . $o["$orj[1]"] . $c["$orj[2]"];

        if (mb_strlen($yaz, "UTF-8") == mb_strlen($yaz2, "UTF-8")) {
            echo $yaz . " : " . $yaz2 . "<br> Toplam Karakter her ikisinde de:" . mb_strlen($yaz2, "UTF-8") . "<hr>";
        }
    }
}
