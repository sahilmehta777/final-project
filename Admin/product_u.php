
<?php

session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}

include("header.php");
?>		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Update Product</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li><a href="productmanage.php">Back</a></li>
							<li class="active"><span>Update Product</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="clearfix"></div>
									<div class="row">
											<div class="col-sm-4">
											</div>
											<div class="col-sm-4">
												<button class="btn btn-default btn-block" style="margin-bottom:20px;" onclick="export_data()" value="Export">Download Excel Sample</button>
												<table id="data" style='display:none;'>
                                                	
                                                	<?php 
                                                	$cat=mysqli_query($con,"select * from `product` ORDER BY sno DESC");
                                                    	$i=1;
                                                    	while($row=mysqli_fetch_array($cat))
                                                        {  ?> 
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $row['cat_name']; ?></td>
                                                                <td><?php echo $row['sub_cat_name']; ?></td>
                                                                <td><?php echo $row['title']; ?></td>
                                                    			<td><?php echo $row['main_image']; ?></td>
                                                                <td><?php echo $row['image']; ?></td>
                                                    			<td><?php echo $row['qty']; ?></td>
                                                    			<td><?php echo $row['price']; ?></td>
                                                    			<td><?php echo $row['oprice']; ?></td>
                                                    			<td><?php echo $row['color']; ?></td>
                                                    			<td><?php echo $row['shipping']; ?></td>
                                                    			<td><?php echo $row['weight']; ?></td>
                                                                <td><?php echo $row['sdetails']; ?></td>
                                                    			<td><?php echo $row['details']; ?></td>
                                                    			<td><?php echo $row['sno']; ?></td>
                                                            </tr>
                                                        <?php
                                                        $i++;    
                                                        }
                                                	?>
                                                </table>
                                            </div>
											<div class="col-sm-4">
											</div>
										</div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="excelUpload.php" method="POST" enctype="multipart/form-data">
                                                
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Upload Excel File <span class="help"></span></label>
													<input type="file" class="form-control" name="excel" accept="excel" required>
												</div>
											    <div class="form-group">
													<label class="control-label mb-10 text-left">Please Upload Main Image <span class="help"></span></label>
													<input type="file" class="form-control" name="main_image[]" accept="excel" multiple>
												</div>
													<div class="form-group">
													<label class="control-label mb-10 text-left">Please Upload Multiple Image <span class="help"></span></label>
													<input type="file" class="form-control" name="image[]" accept="excel" multiple>
												</div>
                                               
												<button type="submit" name="submitu" class="btn btn-primary btn-block">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2022 &copy; Vy Softwares. Pampered by VY Softwares</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

        <script>
        function export_data(){
        	let data=document.getElementById('data');
        	var fp=XLSX.utils.table_to_book(data,{sheet:'Harshit'});
        	XLSX.write(fp,{
        		bookType:'xlsx',
        		type:'base64'
        	});
        	XLSX.writeFile(fp, 'update.xlsx');
        }
        </script>
	</body>
</html>