
<?php include('header.php'); 

$ss=$_GET['id'];
if(isset($_GET['search']))
{
    $search=$_GET['search'];
    
    if(isset($_SESSION['client']))
    { 
        $squ=mysqli_query($con,"select * from `search` where user_id='$user_id' AND keyword_search='$search' AND open_question_id='$ss'")or die(mysqli_error());
        $scnt=mysqli_num_rows($squ);
        if($scnt>0)
        {
        
        } 
        else
        {
            $dd=date('d M Y|H:i A');
            $sql = "INSERT INTO search (user_id,keyword_search,open_question_id,date)
        				VALUES ('$user_id','$search','$ss','$dd')";
        	$run = mysqli_query($con,$sql);
        }
    }
}
$cat=mysqli_query($con,"select * from `blog` WHERE sno='$ss' ORDER BY sno DESC");
while($row=mysqli_fetch_array($cat))
{
?>

<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <ul class="breadcrumb-list pb-2">
                <li><a href="#">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><?php echo $row['question']; ?></li>
            </ul>
            <h2 class="section-title"><?php echo $row['question']; ?></h2>
           
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->

<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-item">
                    <div class="card-body">
                        <p class="card-text pb-3"><?php echo $row['sdetail']; ?></p>
                        <h4 class="pb-3 fs-22">Some real life examples</h4>
                        <div class="row">
                            <?php
                            $images = explode('$',$row['image']);
                            foreach($images as $key => $value)
                            {
                            ?>

                            <div class="col-lg-6">
                                <a href="<?php echo "img/".$value ?>">
                                    <img class="lazy" src="<?php echo "img/".$value ?>" data-src="<?php echo "img/".$value ?>" style='width:100%;height:100%;' alt="review image">
                                </a>
                            </div><!-- end col-lg-6 -->
                            <?php
                            }?>
                            
                        </div><!-- end row -->
                        <p class="card-text pb-3"><?php echo $row['detail']; ?></p>
                        <blockquote class="blockquote blockquote-box my-4">
                            <i class="la la-quote-right"></i>
                            <p class="pb-2"><?php echo $row['slogan']; ?></p>
                        </blockquote>
                        <hr class="border-top-gray">
                        <h4 class="pb-3 fs-20 pt-2">Tags:</h4>
                        <div class="tags pb-3">
                            <a href="#" class="tag-link tag-link-md"><?php echo $row['tag']; ?></a>
                        </div>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
                
               
            </div><!-- end col-lg-8 -->
            <div class="col-lg-2"></div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->


<?php } include('footer.php'); ?>

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->



<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>