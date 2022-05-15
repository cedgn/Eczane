<?php 
include 'header.php';
?>
    
	<aside>
     <div class="wrapper">
	  
	  
	<?php 
	$sorgu=mysqli_query($baglan,"select * from sayfalar where sayfa_anasayfa='1' order by sayfa_sira ASC");
	while($sayfacek=mysqli_fetch_row($sorgu)) {?>
	<div style="padding-left:13px; padding-top:10px;" class="column-2">
     
      <div class="box">
        <div class="aligncenter">
		
       <h4> <?php echo $sayfacek['2'];?></h4>
        </div>
        <div class="box-bg maxheight">
          <div class="padding">
            <p><?php echo substr($sayfacek['3'],0,200);?></p>
          </div>
          <div class="aligncenter"> <a class="button" href="sayfadetay.php?sayfa_id=<?php echo $sayfacek['0'];?>">DEVAMI</a> </div>
        </div>
      </div>
   
</div>
<?php } ?>
</div>


</aside>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        
        
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>


<?php include 'footer.php'; ?>