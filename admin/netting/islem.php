<?php
    include 'baglan.php';


    if(isset($_POST['ayarkaydet'])){

        $id=1;

        $ayarkaydet= mysqli_query($baglan, "UPDATE ayarlar SET baslik='".$_POST['baslik']."',adres='".$_POST['adres']."'
         ,footer='".$_POST['footer']."', telefon='".$_POST['telefon']."'  WHERE id='$id'");
    }

    if(mysqli_affected_rows($baglan)) {

    header("Location:../ayarlar.php?durum=ok");
	}
	else
	{
    header("Location:../ayarlar.php?durum=no");
    }





if (isset($_POST['loggin'])) {

	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=($_POST['admin_sifre']);
	
	if ($admin_kadi && $admin_sifre) {

		$sorgula=mysqli_query($baglan,"select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysqli_num_rows($sorgula);

		if ($verisay>0) {
			
			$_SESSION['admin_kadi'] = $admin_kadi;

			header('Location:../index.php');
		} 
		else {
			header('Location:../login.php?login=no');

		}
	} 
}




if(isset($_POST['menukaydet'])) { 

	$menuekle=mysqli_query($baglan,"insert into menuler (menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')");

	if(mysqli_affected_rows($baglan)) 
	{ 

		header('Location:../menuekle.php?durum=ok');

	} else {

		header('Location:../menuekle.php?durum=no');


	}

}




if(isset($_POST['sliderekle'])) {

	$uploads_dir = '../uploads';

	@$tmp_name = $_FILES['slidegorsel']["tmp_name"];

	@$name = $_FILES['slidegorsel']["name"];

	$benzersizsayi1=rand(20000,32000);

	$benzersizsayi2=rand(20000,32000);

	$benzersizsayi3=rand(20000,32000);

	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$sliderekle=mysqli_query($baglan,"insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad) 
		VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");


	if(mysqli_affected_rows($baglan)) 

		{ header("Location:../sliderekle.php?durum=ok");}

	else {

		header("Location:../sliderekle.php?durum=no");

	}

}



if($_GET['slidersil']=='ok') {

	
	$slidersil=mysqli_query($baglan,"delete from slider where slider_id='".$_GET['slider_id']."'");

	if(mysqli_affected_rows($baglan)) 


	{ 

		$slider_sil=$_GET['sliderresimsil'];

		unlink("../$resim_sil");



		header('Location:../slider.php?durum=ok');


	} else {


		header('Location:../slider.php?durum=no');
	}

}


if($_GET['menusil']=='ok') { 

	$menusil=mysqli_query($baglan,"delete from menuler where menu_id='".$_GET['menu_id']."'");

	if(mysqli_affected_rows($baglan)) 
	{ 
		header('Location:../menuler.php?durum=ok');

	} else {

		header('Location:../menuler.php?durum=no');

	}

}



if(isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['menu_id'];
	
	$menuduzenle=mysqli_query($baglan,"update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$menu_id'");

	if(mysqli_affected_rows($baglan)) 

	{ 

		header("Location:../menuduzenle.php?durum=ok&menu_id=$menu_id");

	}

	else {

		header("Location:../menuduzenle.php?durum=no&menu_id=$menu_id");

	}

}



if(isset($_POST['sayfakaydet'])) {


	$zaman=date('Y-m-d H:i');

	
	$sayfakekle=mysqli_query($baglan,"insert into sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) VALUES ('".$_POST['sayfa_ad']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_anasayfa']."','".$zaman."')");



	if(mysqli_affected_rows($baglan))


	{ 

		header("Location:../sayfalar.php?durum=ok");

	}

	else {

		header("Location:../sayfalar.php?durum=no");

	}

} 



if(isset($_POST['sayfaduzenle'])) {

	$sayfa_id=$_POST['sayfa_id'];
	
	$sayfaduzenle=mysqli_query($baglan,"update sayfalar set sayfa_ad='".$_POST['sayfa_ad']."',sayfa_icerik='".$_POST['sayfa_icerik']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."' where sayfa_id='$sayfa_id'");

	if(mysqli_affected_rows($baglan)) 

	{ 

		header("Location:../sayfaduzenle.php?durum=ok&sayfa_id=$sayfa_id");

	}

	else {

		header("Location:../sayfaduzenle.php?durum=no&sayfa_id=$sayfa_id");

	}

}

if($_GET['sayfasil']=='ok') { 

	$sayfasil=mysqli_query($baglan,"delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");

	if(mysqli_affected_rows($baglan)) 
	{ 
		header('Location:../sayfalar.php?durum=ok');

	} else {

		header('Location:../sayfalar.php?durum=no');

	}

}




if(isset($_POST['urunekle'])) {

	$uploads_dir = '../uploads';

	@$tmp_name = $_FILES['urungorsel']["tmp_name"];

	@$name = $_FILES['urungorsel']["name"];

	$benzersizsayi1=rand(20000,32000);

	$benzersizsayi2=rand(20000,32000);

	$benzersizsayi3=rand(20000,32000);

	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$sliderekle=mysqli_query($baglan,"insert into urunler (urun_resimyol,urun_baslik,urun_konu,urun_yazi) 
		VALUES ('".$refimgyol."','".$_POST['urun_baslik']."','".$_POST['urun_konu']."','".$_POST['urun_yazi']."')");


	if(mysqli_affected_rows($baglan)) 

		{ header("Location:../urunekle.php?durum=ok");}

	else {

		header("Location:../urunekle.php?durum=no");

	}

}





?>