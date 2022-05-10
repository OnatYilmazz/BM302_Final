<?php
include 'baglanti.php';	

	if (isset($_POST['raporla'])){

		  set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
		  include 'PHPExcel/IOFactory.php';
		  $inputFileName = 'excel.xls';
		  $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		  $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		  foreach ($sheetData as $key => $value) {

		    $vize=echo $value["D"];
		    $final=echo $value["E"];
		  }

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

		if (echo $value["A"]==num) {
			Header("Location:../BM302_Final/raporlama.php?raporlandı");
		}
		else{
			Header("Location:../BM302_Final/raporlamab.php?raporlanamadı");
		}
		exit;
	}

	if (isset($_POST['kayit'])){
		
	  set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
	  include 'PHPExcel/IOFactory.php';
	  $Excel = new PHPExcel();
	  $Excel->getProperties()->setCreator("Tam Liste")
	  setLastModifiedBy("Tam Liste")
	  ->setTitle("Tam Liste")
	  ->setSubject("Tam Liste")
	  ->setDescription("Tam Liste")
	  ->setKeywords("Tam Liste")
	  ->setCategory("Tam Liste");
	  $Excel->getActiveSheet()->setTitle('Sayfa1');
	  $Excel->getActiveSheet()->setCellValue('A1', 'Num');
	  $Excel->getActiveSheet()->setCellValue('B1', 'Ad');
	  $Excel->getActiveSheet()->setCellValue('C1', 'Soyad');
	  $Excel->getActiveSheet()->setCellValue('D1', 'Vize');
	  $Excel->getActiveSheet()->setCellValue('E1', 'Final');
	  $tur = 2;

	  foreach($kullanicilar as $kullanici){
	    $Excel->getActiveSheet()->setCellValue("A$tur", $num);
	    $Excel->getActiveSheet()->setCellValue("B$tur", $ad);
	    $Excel->getActiveSheet()->setCellValue("C$tur", $soyad);
	    $Excel->getActiveSheet()->setCellValue("D$tur", $vize);
	    $Excel->getActiveSheet()->setCellValue("E$tur", $final);
	    $tur++;
	  }
	    $Kaydet = PHPExcel_IOFactory::createWriter($Excel, 'Excel5');
	    $Kaydet->save("excel.xls");

	}
?>