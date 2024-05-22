
<?php include('header.php');

$search=$_GET['search'];
?>
<!--======================================
        START HERO AREA
======================================-->
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
                <li>Designers should always keep their users in mind ?</li>
            </ul>
            <h2 class="section-title">Designers should always keep their users in mind ?</h2>
           
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START BLOG AREA
================================= -->
<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                
                <div class="question-main-bar">
                    <div class="questions-snippet">
                        <?php
                        $cat=mysqli_query($con,"select * from `blog` WHERE question LIKE '%$search%' OR keyword LIKE '%$search%' ORDER BY sno DESC");
                        while($row=mysqli_fetch_array($cat))
                        {
                        ?>
                        <div class="media media-card media--card align-items-center">
                            <div class="media-body">
                                <h5><a href="blog-single.php?id=<?php echo $row['sno']; ?>&search=<?php echo $search; ?>"><?php echo $row['question']; ?></a></h5>
                               
                                <div class="tags" style="margin-top: 15px;">
                                    <a href="#" class="tag-link"><?php echo $row['keyword']; ?></a>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <?php } ?>
                    </div><!-- end questions-snippet -->
                    
                </div>

            </div><!-- end col-lg-8 -->
            <div class="col-lg-2"></div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->



<?php include('footer.php'); ?>

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