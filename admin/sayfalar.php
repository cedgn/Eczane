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
					
                        <h1 class="page-head-line">SAYFALAR PANELİ</h1>
                        <h1 class="page-subhead-line">Sayfalar kullanımı için burası kullanılır. </h1>

                    </div>
					
					<div class="col-md-12">
					<a href="sayfaekle.php"><button class="btn btn-primary" >Sayfa Ekle</button></a>
					<hr>
					</div>
					
					
					
					
					
					
					<div class="panel panel-default">
					
                        <div class="panel-heading">
                            <h4><b>VAR OLAN SAYFALAR</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Eklendiği Tarih</th>
                                            <th>Sayfa Adı</th>
											<th>Anasayfada Göster</th>

                                            <th style="width:20px;"></th>
											<th style="width:20px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php 
									$sorgu=mysqli_query($baglan,"select * from sayfalar");
									while($sayfacek=mysqli_fetch_row($sorgu)){?>
			        
			  
                                        <tr>
                                            <td><?php echo $sayfacek['0']; ?></td>
                                            <td><?php echo $sayfacek['1']; ?></td>
											<td><?php echo $sayfacek['2']; ?></td>
                                            <td><?php 

                                                if ($sayfacek['5']==0) {


                                                    echo "HAYIR";

                                                } elseif ($sayfacek['5']==1) {

                                                    echo "EVET";

                                                }

                                                ?></td>
											
                                            <td><a href="sayfaduzenle.php?sayfa_id=<?php echo $sayfacek['0']; ?> ">
												<button class="btn btn-sessuce">Düzenle</button></a></td>
											
						
											<td><a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['0']; ?>&sayfasil=ok">
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