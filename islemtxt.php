<?php
	$dosya = fopen ("metin.txt" , 'a+');
	
	if (isset($_POST['raporla'])){

	$basari=$vize*0.40+$final*0.60 

			if($basari>='75'){
				$not='A';
			}
			else if($basari<='75' && $basari>'50'){
				$not='B';
			}
			else if($basari<='25'){
				$not='D';
			}
			else{
				$not='C';
			}
			$harf=$not 
			$yaz="basarı harf <br />";
		    fwrite($dosya,$yaz);


		if (strpos($dosya,num) {
			Header("Location:../BM302_Final/raporlama.php?raporlandı");
		}
		else{
			Header("Location:../BM302_Final/raporlamab.php?raporlanamadı");
		}
		exit;
	}

	if (isset($_POST['kayit'])){
		
		$yaz="num ad soyad vize final";
		fwrite($dosya,$yaz);

		if(strpos($dosya,num){
			Header("Location:../BM302_Final/kayit.php?kaydedildi");
		}
		else{
			Header("Location:../BM302_Final/kayit.php?kaydedilemedi");
		}
		exit;
	}
	fclose ($dosya);
?>