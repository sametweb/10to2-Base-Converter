
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<title>PHP 10to2 Base Converter</title>
<style>
    body {
        width: 500px;
        margin: 0 auto;
        background: #333;
        color: #FFF;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        background: #222;
        padding: 10px;
        border-radius: 10px;
    }
    label {
        color: #FFF !important;
    }
    .result  {
        font-size: 1.5rem;
    }
</style>
</head>
<body>
<section class="container">
<h1 class="title">PHP 10to2 Base Converter</h2>
<form method="post" class="ui form">
    <p>Çevirmek istediğiniz sayıyı giriniz</p>
    <div class="field">
        <label>Sayı</label><input type="text" name="sayi">
    </div>
    <button class="ui button" type="submit">Hesapla!</button>

<?php 


function taban10to2($sayi) { 
     
    while($sayi>1) { // 2'lik tabana çevirdiğimiz için sayımız 1'den büyük olduğu sürece döngümüzün devam etmesini sağlıyoruz. 
         
        $kalan[] = $sayi%2; // sayımızın 2'ye bölümünden kalanları bir diziye atıyoruz. 
         
        $sayi = $sayi/2; // sonra sayımızdan kalan bölümü tekrar $sayi değişkenine atıyoruz. 
             
    } 
     
    echo "<p  class='result'>Sayının ikilik tabandaki karşılığı:</p><p  class='result'>"; 
    for($a=count($kalan);$a>=0;$a--) { // dizimizin elemanlarını tersten yazdırdık. hatırlarsanız matematikte taban işlemlerini yaparken sayıyı 1 veya 0 olana kadar 2'ye bölüyorduk ve sonra kalanları tersten yazıyorduk. 
         
        echo @$kalan[$a]." "; 
     
    } 
    echo "</p>";
} 
 
if(!($_POST['sayi'])) { // eğer kutucuğa sayı yazılmadan basılırsa... 
     
    echo "<p class='result'>Bir sayı girmelisiniz.</p>"; 
     
} elseif($_POST['sayi'] >= 0 && $_POST['sayi'] < 2) { // eğer kutucuğa basılan sayı 0 ya da 1 ise... 
     
    echo "<p class='result'>Sayının ikilik tabandaki karşılığı: ".$_POST['sayi']."</p>"; 
 
} elseif($_POST['sayi'] == 2) { // eğer kutucuğa girilen sayı 2 ise... 
     
    echo "<p class='result'>Sayının ikilik tabandaki karşılığı: 10</p>"; 
     
} else { // kutucuğa girilen sayı 0 1 ve 2'den farklı ise... 
     
    $sayi = $_POST['sayi']; 
     
    taban10to2($sayi); // fonksiyonumuzu çağırıyoruz.. 
     
}


?>
</form>
</section>
</body>
</html>