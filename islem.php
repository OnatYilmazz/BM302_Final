<?php
	require 'baglanti.php';
	$id='1';
	if (isset($_POST['hesapla'])){
		$kaydet=$baglanti->prepare("UPDATE ogrenci SET
		
		vize=:vize, 
		final=:final  
		WHERE ayarid='$id'");

		$update=$kaydet->execute(array(
		'vize'=>$_POST['vize'],
		'final'=>$_POST['final']));

		$kaydet=$baglanti->prepare("UPDATE ogrenci SET

		basari=vize*0.40+final*0.60 
		WHERE ayarid='$id'");

		$update=$kaydet->execute(array(

		'basari'=>$_POST['basari']));

		if ($update) {
			Header("Location:../BM302_Final/hesaplama.php?hesaplandı");
		}
		else{
			Header("Location:../BM302_Final/hesaplama.php?hesaplanamadı");
		}

		exit;
	}

	if (isset($_POST['raporla'])){

	$kaydet=$baglanti->prepare("UPDATE ogrenci SET 

			basari=basari 
			WHERE ayarid='$id'");

			$update=$kaydet->execute(array(
			'basari'=>$_POST['basari'])); 

			if(basari>='75'){
				$not='A';
			}
			else if(basari<='75' && basari>'50'){
				$not='B';
			}
			else if(basari<='25'){
				$not='D';
			}
			else{
				$not='C';
			}

		$kaydet=$baglanti->prepare("UPDATE ogrenci SET 
		harf='$not' 
		WHERE ayarid='$id'");

		$update=$kaydet->execute(array(
		'harf'=>$_POST['harf']));

		if ($update) {
			Header("Location:../BM302_Final/raporlama.php?raporlandı");
		}
		else{
			Header("Location:../BM302_Final/raporlamab.php?raporlanamadı");
		}
		exit;
	}

	if (isset($_POST['kayit'])){
		$kaydet=$baglanti->prepare("UPDATE ogrenci SET
		
		num=:num,
		ad=:ad,
		soyad=:soyad,
		k=k+1 
		WHERE ayarid='$id'");

		$update=$kaydet->execute(array(
		'num'=>$_POST['num'],
		'ad'=>$_POST['ad'],
		'soyad'=>$_POST['soyad'],
		'k'=>$_POST['k']));

		if ($update) {
			Header("Location:../BM302_Final/kayit.php?kaydedildi");
		}
		else{
			Header("Location:../BM302_Final/kayit.php?kaydedilemedi");
		}
		exit;
	}

?>