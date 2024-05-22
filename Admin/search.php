<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
$cat=mysqli_query($con,"select * from `search` ORDER BY sno DESC");

include("header.php");
?>		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage Search</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage Search</span></li>
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
														<th>User</th>
														<th>Search Keyword</th>
														<th>Date</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>User</th>
														<th>Search Keyword</th>
														<th>Date</th>
													</tr>
												</tfoot>
												<tbody>
													<?php
														$i=1;
							                            while($row=mysqli_fetch_array($cat))
														{ 
                                                            $user_id = $row['user_id'];
															$ct=mysqli_query($con,"select * from `user` WHERE sno='$user_id' ORDER BY sno DESC");
															while($ow=mysqli_fetch_array($ct))
															{
													?>
													<tr>
														<td><?php echo $i; ?></td>
                                                        <td>
                                                            <a href='./user?user_id=<?php echo $row['user_id']; ?>'><?php echo $ow['name'];?></a>
                                                        </td>

														<td><?php echo $row['keyword_search'];?></td>
														<td><?php echo $row['date'];?></td>
														
													</tr>
												<?php
														}
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
			