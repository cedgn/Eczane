<?php
include 'header.php'; ?>




<aside>
     <div class="wrapper">
<?php
$sorgu=mysqli_query($baglan,"SELECT * FROM urunler where urun_konu='gida' ");
while($uruncek=mysqli_fetch_assoc($sorgu)){ ?>

  <div class="column-1">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $uruncek['urun_baslik']; ?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <figure class="p2"><img width="250" height="150" src="admin/<?php echo $uruncek['urun_resimyol']; ?>" alt=""></figure>
                
                <?php echo substr($uruncek['urun_yazi'],0,200);
                ?>
                
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
        <?php 
        } ?>
 </div>
 </aside>
 
 

    <section id="content">
      <div class="wrapper">
        
        
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
 

<?php include 'footer.php'; ?>