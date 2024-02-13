<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
    <?php 
    //Değerleri bi kategoride toplamak ya da dinamik değişkenler oluşturmak için diziler idealdir
    //Tanımlama
   /* 
    $kurslar =[
        "js",
        "bootstrap",
        "c"
    ];
     $deger=[1,2,3,"htc"];
    
     //print_r fonksiyonu  
     echo print_r($kurslar);     // indisleriyle beraber tüm elemanları bastırır  */

     /*$kurslar=[
        "1"=>"js",
        "2"=>"c",
        "3"=>"java",
        "4"=>"bootstrap",
     ];
    //echo "<pre>";
    //echo print_r($kurslar);
    //echo "</pre>";
    //echo $kurslar[1]; */
   /* 
    $kurslar=[
        "a"=>"js",
        "b"=>"c",
         "bootstarp",   //bunu[0]=>bootstrap diye bastı
         "c"=>"php",
    ];
    echo print_r($kurslar);  */

    //ÇOK BOYUTLU DİZİLER
 /*
  $kurslar=[
    "PHP"=>["egitmen"=>"emrah","sure"=>"1 saat","puan"=>"5"],
    "BOOTSTRAP"=>["egitmen"=>"emrah","sure"=>"2 saat","puan"=>"4"],
  ];
  echo $kurslar["PHP"]["egitmen"];
  echo $kurslar["BOOTSTRAP"]["sure"];  */

  //DİZİ FONKSİYONLARI

 //COUNT()  İMPLODE() IS_ARRAY() ARRAY_REVERSE()
/*
 $kurslar=[
    "PHP",
    "JS",
    "BOOTSTRAP",
    "C",
 ];
 echo count($kurslar);     // 4
 echo implode(' ',$kurslar);  //aralarına tek tırnakta söylediğimiz şeyleri koyuyor
 echo is_array($kurslar);     //arrayse 1 değilse 0 döndürüyor 
 print_r(array_reverse($kurslar));  //diziyi ters çeviriyor
 
 //EXPLODE()
 $metin="Php,js,bootstrap,c";
 $kurslar2=explode(',',$metin);  //explode() fonksiyonu metin olarak verilen string ifadeleri aralarında tek tırnak içerisinde belirtilen ifade olacak şekilde parçalar ve diziye çevirir
 print_r($kurslar2);
*/
 /*
//ASORT()
$kurslar=[
   "php",
   "bootstrap",
   "js",
   "jquery",
];
asort($kurslar);     //elemanları A'dan Z'ye sıralar
print_r($kurslar);

$kurslar2=[
    "5"=>"php",
    "8"=>"js",
    "4"=>"bootstrap",
    "1"=>"c",
];
arsort($kurslar2);  // elemanları Z'den A'ya ve sıraları bozmadan sıralar
print_r($kurslar2);    
ksort($kurslar2);
print_r($kurslar2);
krsort($kurslar2);
print_r($kurslar2);*/
/*ksort(): Anahtarlar (keys) kullanılarak sıralama yapar. Anahtarlar sıralandıktan sonra, bunlara göre dizinin değerleri yer değiştirmez.
krsort(): Anahtarlara göre ters sıralama yapar
arsort(): Değerlere göre sıralar ve anahtarları korur. Yani, anahtar-değer çiftleri yer değiştirir, ancak anahtarlar sıralamadan etkilenmez.
asort(): Değerlere göre sıralar ve anahtarları korur. Anahtar-değer çiftleri yer değiştirir, ancak anahtarlar sıralamadan etkilenmez.*/
//SORT(),RSORT() aynı işlev ama anahtar değer ilişkisi korunmuyor


//CURRENT()  END()  SHUFFLE()  ARRAY_RAND()  ARRAY_SEARCH()  ARRAY_UNSHİFT()  ARRAY_SHİFT()  ARRAY_PUSH()  ARRAY_POP()  ARRAY_SLİCE()  
/*
$kurslar=[
    "5"=>"php",
    "8"=>"js",
    "4"=>"bootstrap",
    "1"=>"jquery",
];
echo current($kurslar);   //dizinin görülebilen ilk elemanını verir
echo end($kurslar);       //dizinin son elemanını verir
shuffle($kurslar);        //her seferinde indisler de dahil tüm elemanları karar
print_r($kurslar);

$kurs=array_rand($kurslar,2);  //rastgele belli sayıda dizi elemanı döndürür
echo $kurslar[$kurs[0]];       //dönen değerler indis olduğu için bunu kurslar dizisinin içine yazdık
echo $kurslar[$kurs[1]];

$kurs=array_search('bootstrap',$kurslar);  //belirli bir elemanı arar ve bulduğunda indisini döndürür
echo $kurslar[$kurs];
$search=array_search('php',$kurslar);
echo $kurslar[$search];

array_unshift($kurslar,'Python','c');     //dizinin başına bir ya da birden fazla eleman ekler 
print_r($kurslar);                        //python c ...

array_shift($kurslar);             //diziden bir eleman çıkarır
print_r($kurslar);

array_push($kurslar,'python','c');   //dizinin sonuna bir ya da daha fazla eleman ekler
print_r($kurslar);

array_pop($kurslar);
print_r($kurslar);       //dizinin sonundan bir eleman çıkarır

//dizinin ilk elemanı hariç döndür
print_r(array_slice($kurslar,1));  //dizide belli aralıktaki elemanları döndürür
//dizinin 3.elelmanından seçmeye başla ve 1 eleman seç
print_r(array_slice($kurslar,3,1));*/

//ARRAY_SPLICE()  ARRY_SUM()  ARRAY_PRODUCT  NEXT()  PREV() IN_ARRAY()  ARRAY_FLIP()  ARRAY_MERGE()  ARRAY_UNİQUE()  ARRAY_REPLACE()  ARRAY_COUNT_VALUE() 
$kurslar=[
    "php",
    "bootstrap",
    "javascript",
    "jquery",
];

print_r(array_splice($kurslar,3,3,"python"));  //başlangıcı ve bitişi belirtilen elmanları siler ve yerine "" da belirtileni yazar
print_r($kurslar);


$sayilar=[5,8,2,4];
echo array_sum($sayilar);      //dizinin elman toplamını bulur

echo array_product($sayilar);  //elemanların çarpmını bulur

print_r(current($kurslar));
print_r(next($kurslar));
print_r(next($kurslar));    //imleci ilerletir ya da geri çekerler
print_r(prev($kurslar));

echo in_array('php',$kurslar);   //aradığımız değer dizide varsa 1 döndürür

print_r(array_flip($kurslar));   //elemanlar ile anahtarların yerlerini değiştirir

$eskiKurslar=[
    "PHP",
    "BOOTSTRAP",
];
$yeniKurslar=[
    "JAVASCRİPT",
    "JQUERY",
];
print_r(array_merge($eskiKurslar,$yeniKurslar));   //iki diziyi birleştirir

print_r(array_unique($kurslar));      //yinelenen değerleri siler

$kurslar1=[
    "0"=>"jquery",
    "1"=>"python",
];
$kurslar2=[
    "2"=>"C",
    "3"=>"C++",
];
print_r(array_replace($kurslar,$kurslar1,$kurslar2));  // elemanları belirtilen dizilerde günceller
    
print_r(array_count_values($kurslar));  //yinelenen elemanların kaç kez yinelendiğini gösterir  ?>

</body>
</html>