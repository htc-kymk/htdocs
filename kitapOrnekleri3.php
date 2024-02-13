<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3</title>
</head>
<body>
<?php
// DENETİM YAPILARI
/*$sayi=5;
echo $sayi>5?"sayı 5'ten büyük":"değil";  //kısa if else  

//KULLANICI GİRİŞ SENARYOSU
$isim="kodlab";
$sifre="1234";
if($isim=="kodlab" AND $sifre=="1234"){
    echo"giriş başarılı";
}
else{
    echo "başarısız";
}

//KOŞUL VE HTML
$deger=True;
if($deger==true){?>
<p style="background-color: green;color:white">Doğru</p>
<?php
}

//SWİTCH CASE2
$sayi=2;
switch($sayi){
    case 0:?>
    <p>sayi eşittir 0'a</p>
    <?php  break;
    case 1:?>
    <p>sayi 1'e eşittir</p>
    <?php break;
    case 2:?>
    <p>sayi 2'e eşittir</p>
    <?php break;
    default:?>
    <p>sayi eşitliği sağlanmadı</p>
    <?php
}

$sayi2=15;
switch($sayi2%2){
    case 0:
    echo "sayı 2 e bölünür";
    break;
    case 1:
     echo "sayı 2 e bölünmez";
     break;
}

$gun=4;
switch($gun){
    case 1:
        echo"pazartesi";
        break;
    case 2:
        echo"salı";
        break;
    case 3:
        echo"çarşamba";
        break;   
    case 4:
        echo"perşembe";
        break;
    case 5:
        echo"cuma";
        break;
    case 6:
        echo "cumartesi";
        break;
    case 7:
        echo "pazar";
        break;
    default:
    echo "tanımsız gün";
}*/

//DÖNGÜLER
/*for($sayi=0,$topla=0;$sayi<=10;$topla+=$sayi,$sayi++);
echo $topla;

for($i=1;$i<=100;$i+=2){
    echo $i." ";
}

for($i=1;$i<=20;$i+=2){?>
<b style="background-color:green; color:white"><?php echo $i ?></b>
    <?php
}
for($i=1;$i<3;$i++){
    echo "1.döngü $i<br>";
    for($j=3;$j>1;$j--){
        echo "2.döngü $j<br> $";
    }
}

//çarpım tablosu istenilen sayı
$sayi=3;
for($i=1;$i<10;$i++){
    echo "$sayi x $i = ".$sayi*$i."<br/>";
}
//tüm çarpım tablosu
for($i=1;$i<10;$i++){
    for($j=1;$j<10;$j++){
       echo "$i x $j = ".$i*$j."<br/>";
    }
    echo "<br/>";
}

//dizi elemanlarını yazdırma
$dizi=["java","php","bootstrap","jquery"];
for($i=0;$i<count($dizi);$i++){
    echo $dizi[$i]."<br/>";
}

//WHİLE
//temsili veri çekme
$veri=TRUE;
$i=0;
$satirSayisi=3;

while($veri){

    if($i!=$satirSayisi){
        $i++;
        echo $i.".veri çekildi ";
    }
    else{
        echo" çekme tamamlandı";
        break;
    }
}

//html başlık etiketleri
$i=1;
while($i<=6){
    echo"<h$i>$i.kodlab</h$i>";
    $i++;
}

//DO-WHİLE
$i=0;
do{
    echo$i." ";
$i++;
} while($i<=5);*/


//FOREACH    dizileri yazdırırken ve değiştirirken kolaylık sağlar
/*$dizi=["java","php","bootstrap","jquery"];
foreach($dizi as $key){
    echo $key."<br/>";
}

$dizi2=[1,2,3,4];
foreach($dizi as &$deger){
    echo $deger=$deger *2;
}
echo "<br/>";
print_r($dizi);

foreach($dizi as $key =>$deger2){
    echo "Anahtar $key => Değer $deger2"."<br/>";
}*/

//DOSYALARI DAHİL ETME

include 'header.php';  //include_once da kullanılabilir ama başka bir yerde dahil etmez

echo $isim."<br/>";
echo $soyisim."<br/>";

require 'main.php';    //require_once
echo "require deyimi hatadan sonra indexin yorumlanmasına izin vermiyor";



?>








</body>
</html>