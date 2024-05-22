
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
if(isset($_POST['submit'])){
    $sno = $_POST['sno'];
    $name = $_POST['name'];
	$cat_name = $_POST['cat_name'];
	$sub_cat_name = $_POST['sub_cat_name'];
	$main_image = $_FILES['main_image']['name'];
	$sdetails = $_POST['sdetails'];
    $details = $_POST['details'];
    $qty = $_POST['qty'];
    $col = $_POST['color'];
	$color = implode(',', $col);
    $shipping = $_POST['shipping'];
    $weight = $_POST['weight'];
    
    $price = $_POST['price'];
	$oprice = $_POST['oprice'];
	$ii = $_FILES['image']['name'];
    $cc = count($ii);
    if($main_image=='')
    {
        if($cc>'0')
        {   
            foreach ($image=$_FILES['image']['name'] as $key => $value) 
              { 
                $file_tmpname = $_FILES['image']['tmp_name'][$key];
                $file_name = $_FILES['image']['name'][$key];
                
              
                if( move_uploaded_file($file_tmpname,"../img/".$file_name)) 
                {
                //   echo "{$file_name} successfully uploaded <br />";
                }
                else 
                {                    
                //   echo "Error uploading {$file_name} <br />";
                }
                $image_upload = implode('$', $image);
              }
              move_uploaded_file($_FILES['main_image']['tmp_name'],'../img/'.$_FILES['main_image']['name']);
              
    	    $sql = "UPDATE product SET 
    	    title='$name',cat_name='$cat_name',sub_cat_name='$sub_cat_name',sdetails='$sdetails',details='$details',qty='$qty',color='$color',shipping='$shipping',
    	    weight='$weight',price='$price',oprice='$oprice',main_image='$main_image',image='$image_upload' WHERE sno ='$sno'";
        }
        else
        {
            move_uploaded_file($_FILES['main_image']['tmp_name'],'../img/'.$_FILES['main_image']['name']);
            $sql = "UPDATE product SET 
    	    title='$name',cat_name='$cat_name',sub_cat_name='$sub_cat_name',sdetails='$sdetails',details='$details',qty='$qty',color='$color',shipping='$shipping',
    	    weight='$weight',price='$price',oprice='$oprice' WHERE sno ='$sno'";
        }
    }
    else 
    {
        if($cc>'0')
        {
            foreach ($image=$_FILES['image']['name'] as $key => $value) 
              { 
                $file_tmpname = $_FILES['image']['tmp_name'][$key];
                $file_name = $_FILES['image']['name'][$key];
                
              
                if( move_uploaded_file($file_tmpname,"../img/".$file_name)) 
                {
                //   echo "{$file_name} successfully uploaded <br />";
                }
                else 
                {                    
                //   echo "Error uploading {$file_name} <br />";
                }
                $image_upload = implode('$', $image);
              }
    	    $sql = "UPDATE product SET 
    	    title='$name',cat_name='$cat_name',sub_cat_name='$sub_cat_name',sdetails='$sdetails',details='$details',qty='$qty',color='$color',shipping='$shipping',
    	    weight='$weight',price='$price',oprice='$oprice',image='$image_upload' WHERE sno ='$sno'";
        }
        else
        {
            $sql = "UPDATE product SET 
    	    title='$name',cat_name='$cat_name',sub_cat_name='$sub_cat_name',sdetails='$sdetails',details='$details',qty='$qty',color='$color',shipping='$shipping',
    	    weight='$weight',price='$price',oprice='$oprice' WHERE sno ='$sno'";
        }
    }
    $run = mysqli_query($con,$sql);

	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Updated');
			window.location.href='productmanage.php';
			</script>");
	}
else 
	{
		echo "Error: record not Added " ;
	}
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
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Product</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
                                                <?php
                                                    $p_id = $_GET['id'];
                                                    $tl = "SELECT * FROM product WHERE sno='$p_id'";
                                                    $gh = mysqli_query($con, $tl);
                                                        $row = mysqli_fetch_assoc($gh);
                                                        { 
                                                ?>
												<div class="form-group">
                                                
                                                    <label for="sel1">Select Categeory From The Dropdown:</label>
                                                    <select name='cat_name' class="form-control" id="category_id" onchange="get_sub_cat()" required>
                                                        
                                                        <option><?php echo $row['cat_name'];?></option>
                                                            <?php
                                                                $sql = "SELECT * FROM categeory";
                                                                $result = mysqli_query($con, $sql);
                                                                    while($uow = mysqli_fetch_assoc($result)) 
                                                                    {
                                                            ?>
                                                                <option><?php echo $uow['name'];?></option>
                                                            <?php } ?>
                                                    </select>
                                                   
												</div>
												<div class="form-group">
                                                
                                                    <label for="sel1">Select Sub Categeory From The Dropdown:</label>
                                                    <select name='sub_cat_name' class="form-control" id="sub_category_id">
                                                        <option><?php echo $row['sub_cat_name'];?></option>
                                                    </select>
                                                   
												</div>
											
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Title <span class="help"></span></label>
													<input type="text" class="form-control" name="name" placeholder="Please Enter Title"  value="<?php echo $row['title'];?>">
												    <input type="hidden" name="sno" value="<?php echo $row['sno'];?>">
												</div>
												
												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Main Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Main Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="main_image">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>

												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Multiple Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Multiple Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="image[]" multiple>
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>
												<div class="form-group">
                                                    <label for="sel1">Select Color From The Dropdown:</label>
                                                    <select name='color[]' class="form-control" multiple>
                                                        <option>Red</option>
														<option>Orange</option>
														<option>Blue</option>
														<option>Black</option>
														<option>Green</option>
														<option>Yellow</option>
														<option>Purple</option>
														<option>White</option>
                                                    </select>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Quantity <span class="help"></span></label>
													<input type="text" class="form-control" name="qty" value="<?php echo $row['qty'];?>" placeholder="Please Enter Quantity" >
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Price <span class="help"></span></label>
													<textarea class="form-control" rows="" name="price" value="<?php echo $row['price'];?>" placeholder="Please Enter Price" required></textarea>
												</div>

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Offer Price <span class="help"></span></label>
													<textarea class="form-control" rows="" name="oprice" value="<?php echo $row['oprice'];?>" placeholder="Please Enter Offer Price" required></textarea>
												</div>

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Short Details <span class="help"></span></label>
													<textarea class="form-control" rows="5" name="sdetails" placeholder="Please Enter Short Details"><?php echo $row['sdetails']; ?></textarea>
												</div>

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Details <span class="help"></span></label>
													<textarea class="form-control" id='long_desc' rows="15" name="details" placeholder="Please Enter Details"><?php echo $row['details']; ?></textarea>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Shipping Weight <span class="help"></span></label>
													<input type="text" class="form-control" name="weight" value="<?php echo $row['weight'];?>" placeholder="Please Enter Shipping Weight" >
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Shipping Price <span class="help"></span></label>
													<input type="text" class="form-control" name="shipping" value="<?php echo $row['shipping'];?>" placeholder="Please Enter Shipping Price" >
												</div>
                                                <?php } ?>
												<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
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
		<script type="text/javascript">
			CKEDITOR.replace('long_desc'); 
		</script>
	</body>
</html>