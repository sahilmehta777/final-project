
<?php include('header.php'); ?>
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-dark overflow-hidden section-padding">
    <span class="stroke-shape stroke-shape-1 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-2 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-3 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-4 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-5 stroke-shape-white"></span>
    <span class="stroke-shape stroke-shape-6 stroke-shape-white"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mr-auto">
                <div class="hero-content">
                    <h2 class="section-title fs-50 pb-3 text-white lh-65">Join the world's biggest Q&A network!</h2>
                    <p class="lh-26 text-white">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                    <div class="hero-btn-box pt-30px">
                        <a href="#" class="btn theme-btn mr-2 page-scroll">Text Search <i class="la la-angle-down icon ml-1"></i></a>
                        <a href="#" class="btn theme-btn bg-3 page-scroll">Voice Search <i class="la la-angle-down icon ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="generic-img-box generic-img-box-layout-2">
        <img class="lazy" src="images/img-loading.png" data-src="images/img1.jpg" alt="image">
        <img class="lazy" src="images/img-loading.png" data-src="images/img2.jpg" alt="image">
        <img class="lazy" src="images/img-loading.png" data-src="images/img3.jpg" alt="image">
        <img class="lazy" src="images/img-loading.png" data-src="images/img4.jpg" alt="image">
        <img class="lazy" src="images/img-loading.png" data-src="images/img4.jpg" alt="image">
        <img class="lazy" src="images/img-loading.png" data-src="images/img3.jpg" alt="image">
    </div>
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START FUNFACT AREA
================================= -->
<section class="funfact-area">
    <div class="container">
        <div class="counter-box bg-white shadow-md rounded-rounded px-4">
            <div class="row">
                <div class="col responsive-column-half border-right border-right-gray">
                    <div class="media media-card text-center px-0 py-4 shadow-none rounded-0 bg-transparent counter-item mb-0">
                        <div class="media-body">
                            <h5 class="fw-semi-bold pb-2">80+ million</h5>
                            <p class="lh-20">Monthly visitors to our network</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col responsive-column-half border-right border-right-gray">
                    <div class="media media-card text-center px-0 py-4 shadow-none rounded-0 bg-transparent counter-item mb-0">
                        <div class="media-body">
                            <h5 class="fw-semi-bold pb-2">25+ Million</h5>
                            <p class="lh-20">Questions asked to-date</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col responsive-column-half border-right border-right-gray">
                    <div class="media media-card text-center px-0 py-4 shadow-none rounded-0 bg-transparent counter-item mb-0">
                        <div class="media-body">
                            <h5 class="fw-semi-bold pb-2">14.7 seconds</h5>
                            <p class="lh-20">Average time between new questions</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col responsive-column-half border-right border-right-gray">
                    <div class="media media-card text-center px-0 py-4 shadow-none rounded-0 bg-transparent counter-item mb-0">
                        <div class="media-body">
                            <h5 class="fw-semi-bold pb-2">40+ Billion</h5>
                            <p class="lh-20">Times a developer got help</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col responsive-column-half">
                    <div class="media media-card text-center px-0 py-4 shadow-none rounded-0 bg-transparent counter-item mb-0">
                        <div class="media-body">
                            <h5 class="fw-semi-bold pb-2">10,000+</h5>
                            <p class="lh-20">Customer companies for all products</p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end counter-box -->
    </div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
         END FUNFACT AREA
================================= -->

<!-- ================================
         START GET START AREA
================================= -->
<section class="get-started-area section--padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Questions History</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <?php 
    							if(isset($_SESSION['client']))
    							{ 
    							?>
                                <?php
                                $cat=mysqli_query($con,"select * from `search` GROUP BY open_question_id ORDER BY sno DESC LIMIT 4");
                                while($row=mysqli_fetch_array($cat))
                                {
                                    $gg=$row['open_question_id'];
                                    $ct=mysqli_query($con,"select * from `blog` WHERE sno='$gg' ORDER BY sno DESC");
                                    while($ow=mysqli_fetch_array($ct))
                                    {
                                ?>
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="blog-single.php?id=<?php echo $ow['sno']; ?>"><?php echo $ow['question']; ?></a></h5>
                                        <small class="meta">
                                            <span class="pr-1"><?php echo $row['date']; ?></span>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <?php } } } else { ?>
                                <p><a href="login.php">If you want to store question history, Please login first.</a></p>
                                <?php } ?>
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                   
                    
                </div><!-- end sidebar -->
            </div>
            <div class="col-lg-5 responsive-column-half">
                <div class="media media-card align-items-center">
                     <div class="media-body">
                        <form action='searchresult.php' method='GET'>
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name='search' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group-prepend" >
                            <button class="input-group-text" type='submit' style='margin-top:20px;width:100%;text-align:center;' name='submit' id="stop">Text Search</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="media media-card align-items-center">
                    <div class="icon-element icon-element-lg mr-4 shadow-sm rounded-rounded border border-gray">
                        <button type="button" id="start" class="btn btn-primary"><i class="fa fa-microphone" aria-hidden="true"></i></button>
                    </div>
                    <div class="media-body">
                        <div class="input-group input-group-sm mb-3">
                            <form action='searchresult.php' method='GET'>
                                <textarea  type="text" class="form-control" id="result" name='search' aria-label="Small" aria-describedby="inputGroup-sizing-sm" rows="1" cols="80"></textarea> 
                            <div class="input-group-prepend" >
                                <button class="input-group-text" type='submit' style='margin-top:20px;width:100%;text-align:center;' name='submit' id="stop">Voice Search</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END GET START AREA
================================= -->


<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<?php include('footer.php'); ?>

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    var startButton = document.getElementById('start');
    var stopButton = document.getElementById('stop');
    var resultElement = document.getElementById('result');

    var recognition = new webkitSpeechRecognition();

    recognition.lang = window.navigator.language;
    recognition.interimResults = true;

    startButton.addEventListener('click', () => { recognition.start(); });
    stopButton.addEventListener('click', () => { recognition.stop(); });

    recognition.addEventListener('result', (event) => {
        const result = event.results[event.results.length - 1][0].transcript;
        resultElement.textContent = result;    
        console.log(result);   
        var queryString = "?id=" + result;
        // window.location.href = "index.php" + queryString;
    });
</script>
</body>

</html>