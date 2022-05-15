<?php
include('baglan.php');
$ayarsorgula=mysqli_query($baglan,"select * from ayarlar");
$ayarcek=mysqli_fetch_assoc($ayarsorgula);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ayarcek['baslik']; ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/styless.css" type="text/css" media="screen">

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>

<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
		  
            <img src="<?php echo $ayarcek['logo']; ?>" alt="">
			
            <strong class="support"><?php echo $ayarcek['telefon']; ?></strong> </div>
        </div>
		
		
        <nav>
          <ul class="menu">
		  
		    <li><a class="active" href="index.php">Home</a></li>
			
			<?php 
			        $sorgu=mysqli_query($baglan,"select * from menuler");
					
					$menusay=mysqli_num_rows($sorgu);
					$say=0;
			        while($menucek=mysqli_fetch_row($sorgu)){ $say++;?> 
					 <li class="<?php if ($menusay==$say) {
					echo "last";
					}
					?>"><a href="<?php echo $menucek['2'];?>"><?php echo $menucek['1']; ?></a></li>
            <?php 	
			}
            ?>
					
          </ul>
        </nav>
		
		
      </div>

      <div class="wrapper">
        <div class="slider">
          <ul class="items">
		  
	<?php 
		$slidersor=mysqli_query($baglan,"select * from slider");
		while($slidercek=mysqli_fetch_row($slidersor)){?>
		  
        <li><img src="admin/<?php echo $slidercek['2']; ?>" alt="<?php echo $slidercek['1']; ?>"></li>
          
		
    <?php } ?>
			
		
			
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
		<div class="banner-1"></div>
        </div>
	  
	  
	  
    </header>