<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLİDER EKLEME YERİ</h1>
                

                <?php

                if (@$_GET['durum']=='ok') { ?>


                    <h1 style="color:green;" class="page-subhead-line">Slider başarıyla eklendi... </h1>


                    <?php } elseif (@$_GET['durum']=='no') { ?>


                        <h1 style="color:red;" class="page-subhead-line">Slider eklenemedi... </h1>


                        <?php  } else {?>

                            <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz...</h1>

                            <?php   }

                            ?>


                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <form action="netting/islem.php" enctype="multipart/form-data" method="POST">

                        <div class="col-md-12">
                            <div  class="form-group col-md-6">
                                <label>Ürün Başlık</label>
                                <input class="form-control" type="text" name="urun_baslik" placeholder="Ürün Başlık" >
                            </div>
                        </div>




                         <div class="col-md-12">
                            <div  class="form-group col-md-6">
                            <label>Ürün Konu</label>
                            <select name ="urun_konu" class="form-control">
                      
                          <option  value="gida">GIDA</option>
                        
                        <option  value="bakim">BAKIM</option>
                        <option  value="faydali">FAYDALI</option>


                      </select>
                            </div>
                        </div>




					
                        
                          <div class="col-md-12">
                            <div  class="form-group col-md-12">
                                <label>Ürün Yazı</label>
                                <textarea name="urun_yazi" class="ckeditor"></textarea>
                            </div>
                        </div>
                       
					   
					   
					   
					   
					   
					   <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-lg-4"><b><h4>Ürün Resim</b></h4></label>
                    <div class="">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-file btn-default">
                               <span class="btn btn-danger">Resim Seç</span>
                                <span class="fileupload-exists">Değiştir</span>
                                <input type="file" name="urungorsel">
                            </span>
                            <span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
                    </div>
                </div>

            </div>
					   
					   
					   
					   
					   
					   
					   <div class="col-md-12">

                            <div  class="form-group col-md-3">
                              <br> <input style="width:100%" class="btn btn-primary" type="submit" name="urunekle" value="Ürün Kaydet">
                            </div>

                        </div>



                    </form>


                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->



            <?php include 'footer.php'; ?>













