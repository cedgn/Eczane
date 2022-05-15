<?php
 include 'header.php'; 
 include 'sidebar.php';
 
 if (!isset($_SESSION['admin_kadi'])) {
	 header ('Location:login.php');
 }

?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
					
                        <h1 class="page-head-line">ÜRÜNLER PANELİ</h1>
                        <h1 class="page-subhead-line">Ürünler kullanımı için burası kullanılır. </h1>

                    </div>
					
					<div class="col-md-12">
					<a href="urunekle.php"><button class="btn btn-primary" >Ürün Ekle</button></a>
					<hr>
					</div>
					
					
					
					
					
					
					<div class="panel panel-default">
					
                        <div class="panel-heading">
                            <h4><b>VAR OLAN ÜRÜNLER</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ürün Başlık</th>
                                            <th>Ürün Resim</th>
											<th>Ürün Konu</th>
											<th>Ürün Yazı</th>

                                            <th style="width:20px;"></th>
											<th style="width:20px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php 
									$sorgu=mysqli_query($baglan,"select * from urunler");
									while($urunlercek=mysqli_fetch_row($sorgu)){?>
			        
			  
                                        <tr>
                                            <td><?php echo $urunlercek['0']; ?></td>
                                            <td><?php echo $urunlercek['1']; ?></td>
										<td><img width="200" src="<?php echo $urunlercek['2']; ?>" >	</td>
										 <td><?php echo $urunlercek['3']; ?></td>
										  <td><?php echo substr($urunlercek['4'],0,200); ?></td>
										
										
                                            <td><a href="$urunlercek.php?sayfa_id=<?php echo $sayfacek['0']; ?> ">
												<button class="btn btn-sessuce">Düzenle</button></a></td>
											
						
											<td><a href="netting/islem.php?sayfa_id=<?php echo $urunlercek['0']; ?>&sayfasil=ok">
											    <button class="btn btn-danger">Sil</button></a></td>
											   
											
                                        </tr>
										
                                        <?php } ?>
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					
					
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->













<?php include 'footer.php'; ?>