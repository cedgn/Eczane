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
					
                        <h1 class="page-head-line">MENÜLER PANELİ</h1>
                        <h1 class="page-subhead-line">Menü kullanımı için burası kullanılır. </h1>

                    </div>
					
					<div class="col-md-12">
					<a href="menuekle.php"><button class="btn btn-primary" >Menü Ekle</button></a>
					<hr>
					</div>
					
					
					
					
					
					
					<div class="panel panel-default">
					
                        <div class="panel-heading">
                            <h4><b>VAR OLAN MENÜLER</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Menü Adı</th>
                                            <th>Menü Link</th>
                                            <th style="width:20px;"></th>
											<th style="width:20px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php 
									$sorgu=mysqli_query($baglan,"select * from menuler");
									while($menucek=mysqli_fetch_row($sorgu)){?>
			        
			  
                                        <tr>
                                            <td><?php echo $menucek['0']; ?></td>
                                            <td><?php echo $menucek['1']; ?></td>
                                            <td><?php echo $menucek['2']; ?></td>
											
                                            <td><a href="menuduzenle.php?menu_id=<?php echo $menucek['0']; ?> ">
												<button class="btn btn-sessuce">Düzenle</button></a></td>
											
						
											<td><a href="netting/islem.php?menu_id=<?php echo $menucek['0']; ?>&menusil=ok">
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