<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>

 <?php  
 //phpinfo();  php dosyamız hakkında bilgi veriyor
 /*$ad="hatice";
 echo $ad;           
 echo"$ad";          // "" içerisine giren her şey yine yorumlanır ama '' içerisindeki yorumlanmaz
 echo'$ad';*/

 /*$sayi1="50";
 $sayi2=20;          //php kendi kendine tipe karar verebilir . burda 50'yi string olarak yazsak da o integer alır ve işlem yapar
echo $sayi1+$sayi2;*/

//echo "ben atice "php" çalışıyorum ";   yanlış
//echo "ben hatice \"php\" çalışıyorum"; doğru

/*$array=[
   "1"=>"a",
   "2"=>"b",
];                    //dizi tanımlama ve bir elemanını yazdırma
echo $array[1];*/

/*class kurslar{
    function egitimci(){
        echo"emrah.";
    }                 //nesne üretme
}
$kurs=new kurslar;
$kurs->egitimci();*/

//--------------------------------------------------------------------------------------------------------------//

/*$degisken1=true;
$degisken2=1234;
$degisken3="hatice";
$degisken4=[
    "1"=>"a",
    "2"=>"b",           //var_dump fonksiyou ile değişkenin türünü ve içeriğini öğrenebiliyoruz
];
$degisken5=1.234;

var_dump($degisken1);
var_dump($degisken2);
var_dump($degisken3);*/

//---------------------------------------------------------------------------------------------------------//
/*$sayi1=500;
$sayi2=50;
//sayi2'i sayi1'e referans tanımlıyoruz
$sayi1=&$sayi2;
echo $sayi1;        //50
echo $sayi2;        //50
$sayi1=100;         
echo $sayi1;        //100
echo $sayi2;        //100

unset($sayi1);  //birini silince öbürü kaybolmuyor
echo $sayi2;        //100   */

//-----------------------------------------------------------------------------------------------------------//

/*$dizi[0]='php';
$dizi[1]='js';
$yenidizi=&$dizi;    //bu da dizi adresleme
print_r($yenidizi);
print_r($dizi);*/

//------------------------------------------------------------------------------------------------------------//

/*$ad="hatice";
$soyad="kaymak";       //uzun
echo $ad." ".$soyad; */

/*$ad="hatice";
$ad.=" kaymak";    //kısa yol
echo $ad;

$sonuc=356;
echo "işlem sonucu" .$sonuc;  */

//------------------------------------------------------------------------------------------------------------//

//ARİTMETİK OPERATÖRLER
/*
//toplama
$sayi1=50;
$sayi2=5;
$topla=$sayi1+$sayi2;
echo $topla;
//çıkarma
$cikar=$sayi1-$sayi2;
echo $cikar;
//çarpma
$carp=$sayi1*$sayi2;
echo $carp;
//bölme 
$bol=$sayi1/$sayi2;
echo $bol;
//mod alma
$modAl=$sayi1%$sayi2;
echo $modAl;        */

//-----------------------------------------------------------------------------------------------------------//

//ATAMA OPERATÖRLERİ
/*
$sayi=5; //= operatörü
echo $sayi+=10 ;  //+=  topla ve ata
echo $sayi-=10 ;  //-=   çıkar ve ata
echo $sayi*=10 ;  //*=   çarp ve ata
echo $sayi/=10;   //=   böl ve ata
echo $sayi%=10;   //%=  mod al ve ata
$ad="hatice";       
echo $ad.=" kaymak";  //.= birleştir ve ata  */

//-----------------------------------------------------------------------------------------------------------//

//ARTTIRMA VE AZALTMA OPERATÖRLERİ
/*$deger=4;
$deger++;   //5
echo $deger;
echo "<br/>";
$deger=10 - ++$deger;    //10-6=4
echo $deger;             //4

$deger--;  //3
$deger=10 - --$deger;   //10-2=8
echo $deger;            //8     */

//------------------------------------------------------------------------------------------------------------//

//KARŞILAŞTIRMA OPERATÖRLERİ
/*
$a == $b EŞİTTİR
$a === $b DENKTİR
$a != $b EŞİT DEĞİLDİR
$a !== $b DENK DEĞİLDİR
$a <> $b EŞİT DEĞİLDİR
$a <  $b KÜÇÜKTÜR
$a >  $b BÜYÜKTÜR
$a <= $b KÜÇÜK VE EŞİTTİR
$a >= $b BÜYÜK VE EŞİTTİR   */

//---------------------------------------------------------------------------------------------------------------//

//MANTIKSAL OPERATÖRLER
/* 
$a and $b VE
$a or $b  VEYA
$a xor $b ÖZEL VEYA
! $a DEĞİL
$a && $b  VE
$a || $b  VEYA */

//-----------------------------------------------------------------------------------------------------------//

//TÜR DÖNÜŞÜMLERİ
/* 
$deger= (String) 12; //12
$deger= (String) true;//1
//echo $deger;    //1
$deger= (String) false;  //""
echo $deger;      //sonuç çıkmıyor */
/*
$tutar=10.20;
$sonuc= (int) $tutar;   //floatı inte dönüştürdük
echo $sonuc;  */

//boolean dönüşümünde 0 veya boş("") olmadıkça true

//------------------------------------------------------------------------------------------------------------//

//UNSET 
/*
$a="hatice";
unset($a);  //a değişkeni artık tanımsız
echo $a;  */

//------------------------------------------------------------------------------------------------------------//

//SABİT TANIMLAMA
/*
define("kedi","kodlab");
define("pass","1234");
const kedi1="kodlab";
const pass1="1234";
echo kedi1;   //sabitleri döndürürken $ işareti kullanmıyoruz
echo defined('kedi1');  //kedi sabiti tanımlandı mı kontrolü evetse 1   */

//SİHİRLİ SABİTLER
/*
echo __LINE__;  // geçerli satır numarası
echo __FILE__;  //tam dosya yolu ve ismi 
echo __DIR__;   //dizi yolu  
echo __FUNCTION__; //kullandığı fonk ismi 
echo __METHOD__; //metot ismi Sınıf::Method şeklinde döndürür
echo __CLASS__; //sınıf ismi */

/* echo $_SERVER['...']  Küresel bir değişken */
?>
   

    </body>
</html>