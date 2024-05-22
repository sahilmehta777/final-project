<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
if(isset($_GET['user_id']))
{
	$iid=$_GET['user_id'];
	$cat=mysqli_query($con,"select * from `user` WHERE sno='$iid' ORDER BY sno DESC");
}
else
{
	$cat=mysqli_query($con,"select * from `user` ORDER BY sno DESC");
}

if(isset($_GET['rid']))
{
	$verid = $_GET['rid'];
	date_default_timezone_set("Asia/Calcutta");
	$date= date('Y-m-d-H-i');

	$sql = "UPDATE `user` SET status='1' WHERE sno ='$verid'";
    $run = mysqli_query($con,$sql);

	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.location.href='user.php';
				</script>");
	}
	else 
	{
		echo "Error: record not Added " ;
	}
}
if(isset($_GET['deid']))
{
	$verid = $_GET['deid'];
	date_default_timezone_set("Asia/Calcutta");
	$date= date('Y-m-d-H-i');

	$sql = "UPDATE `user` SET status='0' WHERE sno ='$verid'";
    $run = mysqli_query($con,$sql);

	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.location.href='user.php';
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
						  <h5 class="txt-dark">Manage User's</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage User's</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
										<div class="row">
                        					 	<div class="col-sm-4">
														</div>
														<div class="col-sm-4">
															</div>
										<div class="col-sm-4">
										<!-- <a href="blog_add"><button class="btn btn-default btn-block" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true"></i> Create New Record</button></a> -->
										</div>
										</div>
									<div class="table-wrap" style="margin-top: 20px;">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>S.No</th>
														<th>Action</th>
														<th>Name</th>
														<th>Email </th>
														<th>Password </th>
														<th>Profile Picture</th>
														<th>Location </th>
														<th>Website Link</th>
														<th>Facebook Link </th>
														<th>Instagram Link </th>
														<th>Twitter Link </th>
														<th>Youtube Link </th>
														<th>Vimeo Link </th>
														<th>Github Link </th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>Action</th>
														<th>Name</th>
														<th>Email </th>
														<th>Password </th>
														<th>Profile Picture</th>
														<th>Location </th>
														<th>Website Link</th>
														<th>Facebook Link </th>
														<th>Instagram Link </th>
														<th>Twitter Link </th>
														<th>Youtube Link </th>
														<th>Vimeo Link </th>
														<th>Github Link </th>
													</tr>
												</tfoot>
												<tbody>
													<?php
														$i=1;
							                            while($row=mysqli_fetch_array($cat))
														{$dp = $row['profile_image']; $status = $row['status'];
													?>
													<tr>
														<td><?php echo $i; ?></td>
														<td>
                                                            <?php if($status=='1') { ?> 
                                                                <a class='edit btn btn-sm btn-primary' href='./user?deid=<?php echo $row['sno']; ?>' >Active ?</a>
																<?php } elseif($status=='0') { ?> 
																<a class='edit btn btn-sm btn-danger' href='./user?rid=<?php echo $row['sno']; ?>' >Deactive ?</a>
                                                            <?php } ?>
                                                        </td>
														<td><?php echo $row['name'];?></td>
														<td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['password'];?></td>
															<?php if($dp!='') { ?> 
																<td>
																	<a href='<?php echo "../img/".$row['profile_image']?>' target='blank'><img src='<?php echo "../img/".$row['profile_image']?>'height="50px" width="50px" align=""></a>
																</td>
															<?php } else { ?> 
																<td>No Image</td>
															<?php } ?>
														<td><?php echo $row['location'];?></td>
														<td><?php echo $row['web'];?></td>
														<td><?php echo $row['fb'];?></td>
														<td><?php echo $row['insta'];?></td>
                                                        <td><?php echo $row['twitter'];?></td>
														<td><?php echo $row['youtube'];?></td>
                                                        <td><?php echo $row['vimeo'];?></td>
                                                        <td><?php echo $row['github'];?></td>
                                                        
														
														<!-- <td>
														   <a class='edit btn btn-sm btn-primary' href='./user_delete?id=<?php echo $row['sno']; ?>' onclick='return checkdelete()'>Delete</a>
														</td> -->
													</tr>
												<?php
													$i++;
												}
												?>	
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
					
				</div>
				
				<!-- Footer -->
			<?php include('footer.php'); ?>
			<!-- /Footer -->
			