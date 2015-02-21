<?php
if(is_numeric($_POST['zar1']) && is_numeric($_POST['zar2'])){
if(($_POST['zar1'] < 7) && ($_POST['zar2'] < 7)){
if(($_POST['zar1'] > 0) && ($_POST['zar2'] > 0)){
		$sayi1=rand(1,6);
		$sayi2=rand(1,6);
		$tahmin=0;
		if($_POST['zar1']==$sayi1) $tahmin++;
		if($_POST['zar1']==$sayi2) $tahmin++;
		if($_POST['zar2']==$sayi1) $tahmin++;
		if($_POST['zar2']==$sayi2) $tahmin++;
		echo '<p>Bilgisayarın attığı zarlar</p>';
		echo "<img src='$sayi1.jpg' border='0'/>";
		echo "<img src='$sayi2.jpg' border='0'/>";
		echo '<p>Senin tahmin ettiğin zarlar</p>';
		echo "<img src='{$_POST['zar1']}.jpg' border='0'/>";
		echo "<img src='{$_POST['zar2']}.jpg' border='0'/>";
     if($tahmin>0){
		echo "<p>Tebrikler, $tahmin zarı doğru bildiniz</p>";
     }else{
		echo "<p>Tahminler gerçekleşmedi,şansını yeniden dene.</p>";
     }
   }  //üçüncü if sonu
  }  //ikinci if sonu
} //birinci if sonu
?>
<p>1 ila 6 arası iki rakam gir ve zar tahminini yap.</p>
<form action="" method="post">
<input type="text" name="zar1" maxlength="1" size="1">
<input type="text" name="zar2" maxlength="1" size="1">
<input type="submit" value="Başlat">
</form>
