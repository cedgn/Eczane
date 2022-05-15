<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>



<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">GENEL AYARLAR</h1>
                        <h1 class="page-subhead-line">Site ayarları için burası kullanılır. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
				
				<form action="netting/islem.php" method="POST">
				
				
				<div class="col-md-12">
					<div class="form-group col-md-3">
						<label>SİTE BAŞLIK</label>
						<input class="form-control" type="text" name="baslik" value="<?php echo $ayarcek['baslik']; ?>">
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="form-group col-md-6">
						<label>ADRES</label>
						<input class="form-control" type="text" name="adres" value="<?php echo $ayarcek['adres']; ?>">
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="form-group col-md-6">
						<label>SİTE FOOTER</label>
						<input class="form-control" type="text" name="footer" value="<?php echo $ayarcek['footer']; ?>">
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="form-group col-md-6">
						<label>TELEFON NUMARASI</label>
						<input class="form-control" type="text" name="telefon" value="<?php echo $ayarcek['telefon']; ?>">
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="form-group col-md-3">
						<input class="btn btn-primary" type="submit" name="ayarkaydet" value="KAYDET">
					</div>
				</div>
				
				
				
				</form>
			
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
































<?php include 'footer.php'; ?>