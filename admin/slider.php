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
					
                        <h1 class="page-head-line">SLİDER PANELİ</h1>
                        <h1 class="page-subhead-line">Slider kullanımı için burası kullanılır. </h1>

                    </div>
					
					<div class="col-md-12">
					<a href="sliderekle.php"><button class="btn btn-primary" >Slider Ekle</button></a>
					<hr>
					</div>
					
					
					
					
					
					
					<div class="panel panel-default">
					
                        <div class="panel-heading">
                            <h4><b>VAR OLAN SLİDERLER</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Slider Adı</th>
                                            <th>Slider Resmi</th>
											<th>Slider Linki</th>
											<th>Slider Sırası</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php 
									$slidersor=mysqli_query($baglan,"select * from slider order by slider_sira ASC");
									while($slidercek=mysqli_fetch_row($slidersor)){?>
			        
			  
                                        <tr>
                                            <td><?php echo $slidercek['0']; ?></td>
                                            <td><?php echo $slidercek['1']; ?></td>
											
											
											<td><img width="200" src="<?php echo $slidercek['2']; ?>" >	</td>
											
											
											
                                            <td><?php echo $slidercek['3']; ?></td>
                                            <td><?php echo $slidercek['4']; ?></td>
											<td><a href="netting/islem.php?slider_id=<?php echo $slidercek['0']; ?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['2'];?>">
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