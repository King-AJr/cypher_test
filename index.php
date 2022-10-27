<?php
include 'header.php';

$movies = "SELECT * FROM  movies ORDER BY id DESC ";

$get_movies = $conn->query($movies);

?>
        <!-- =============== END OF HEADER NAVIGATION =============== -->




        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
        <section id="slider" class="full-slider">
            <div class="rev-slider-wrapper fullscreen-container overlay-gradient">
                <div id="fullscreen-slider" class="rev_slider fullscreenbanner" style="display:none" data-version="5.4.1">
                    <ul>

                        <!-- ===== SLIDE NR. 1 ===== -->
                        <li data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slider/slider1.jpg"
                                 alt="Image"
                                 title="slider-bg"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">START STREAMING NOW
                            </div>
                        </li>

                        <!-- ===== SLIDE NR. 2 ===== -->
                        <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slider/slider2.jpg"
                                 alt="Image"
                                 title="slider-bg"
                                 data-bgposition="center top"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">ULTRA HD RESOLUTION
                            </div>
                        </li>

                        <!-- ===== SLIDE NR. 3 ===== -->
                        <li data-transition="fade"
                            data-slotamount="7"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slider/slider3.jpg"
                                 alt="Image"
                                 data-bgposition="center top"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="3"
                                 class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">LATEST MOVIES & SERIES
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ===== END OF REV SLIDER WRAPPER ===== -->


            <!-- ===== START OF SEARCH FORM WRAPPER ===== -->
            <div class="search-form-wrapper search-form-rev">
                <div class="container">

                    <!-- ===== START OF SEARCH FORM ===== -->
                    <form id="search-form-1">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-10 col-12">
                                <div class="form-group">
                                    <input name="search-keyword" type="text" id="search-keyword" value="" class="form-control" placeholder="Enter Movies or Series Title">
                                    <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- ===== END OF SEARCH FORM ===== -->

                </div>
            </div>
            <!-- ===== END OF SEARCH FORM WRAPPER ===== -->
        </section>
        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->




        <!-- =============== START OF LATEST MOVIES SECTION =============== -->
        <section class="latest-movies ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="title">Latest Movies</h2>
                    </div>


                    <div class="col-md-4 align-self-center text-right">
                        <a href="#" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-movies-slider mt20">
                    <?php
                        while($movies = $get_movies->fetch_assoc()){
                           
                            
                        
                    ?>

                    <!-- === Start of Sliding Item 1 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-1.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-details.php?id=<?php echo $movies['id'] ?>"><?php echo $movies['title'] ?></a>
                                </h4>
                                <span class="released">14 Dec 2017</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span><?php echo $movies['rating'] ?></span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 1 === -->              
                    <?php } ?>

                    
                </div>
                <!-- End of Latest Movies Slider -->


            </div>
        </section>
        <!-- =============== END OF LATEST MOVIES SECTION =============== -->




        <!-- =============== START OF UPCOMING MOVIES SECTION =============== -->
        <section class="upcoming-movies parallax ptb100" data-background="assets/images/posters/movie-collection.jpg" data-color="#3e4555" data-color-opacity="0.95" >
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title text-white">Upcoming Movies & TV Shows</h2>
                    </div>
                </div>
                <!-- End of row -->



                <!-- Start of row -->
                <div class="row mt50">

                    <!-- === Start of Upcoming Featured Movies & TV Shows === -->
                    <div class="col-md-8">

                        <!-- Start of Upcoming Featured Item -->
                        <div class="movie-box-1 upcoming-featured-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-featured-item.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Tomb Raider</a>
                                </h4>
                                <span class="released">Release Date: 15 Mar 2018</span>
                            </div>
                            <!-- End of Movie Details -->
                        </div>
                        <!-- End of Upcoming Featured Item -->

                    </div>
                    <!-- === End of Upcoming Featured Movies & TV Shows === -->


                    <!-- === Start of Upcoming Movies & TV Shows === -->
                    <div class="col-md-4">

                        <!-- Start of Upcoming Item 1 -->
                        <div class="movie-box-1 upcoming-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-item-1.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">The Jungle</a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 1 -->

                        <!-- Start of Upcoming Item 2 -->
                        <div class="movie-box-1 upcoming-item mt20">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/movies/upcoming-item-2.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Fast and Furious</a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 2 -->

                    </div>
                    <!-- === End of Upcoming Movies & TV Shows === -->

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF UPCOMING MOVIES SECTION =============== -->




        <!-- =============== START OF LATEST TV SHOW SECTION =============== -->
        <section class="latest-tvshows ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="title">Latest TV Shows</h2>
                    </div>


                    <div class="col-md-4 col-sm-12 align-self-center text-right">
                        <a href="#" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-tvshows-slider mt20">

                    <!-- === Start of Sliding Item 1 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Daredevil</a>
                                </h4>
                                <span class="released">19 Apr 2015</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>8.7 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 1 === -->


                    <!-- === Start of Sliding Item 2 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Stranger Things</a>
                                </h4>
                                <span class="released">15 Jul 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>9 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 2 === -->


                    <!-- === Start of Sliding Item 3 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-7.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Luke Cage</a>
                                </h4>
                                <span class="released">30 Sep 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>7.6 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 3 === -->


                    <!-- === Start of Sliding Item 4 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-8.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">The Flash</a>
                                </h4>
                                <span class="released">7 Oct 2014</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>8 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 4 === -->


                    <!-- === Start of Sliding Item 5 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Daredevil</a>
                                </h4>
                                <span class="released">19 Apr 2015</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>8.7 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 5 === -->


                    <!-- === Start of Sliding Item 6 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Stranger Things</a>
                                </h4>
                                <span class="released">15 Jul 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>9 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 6 === -->

                </div>
                <!-- End of Latest Movies Slider -->

            </div>
        </section>
        <!-- =============== END OF LATEST TV SHOW SECTION =============== -->




        <!-- =============== START OF HOW IT WORKS SECTION =============== -->
        <section class="how-it-works bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">How it works?</h2>
                        <h6 class="subtitle">We will show you step by step how to start watching your favorite movies & tv shows starting now!</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Timeline -->
                <div class="timeline">

                    <span class="main-line"></span>

                    <!-- === Start of Timeline Step 1 === -->
                    <div class="timeline-step row">
                        <span class="timeline-step-btn">Step 1</span>

                        <!-- Start of Timeline Text -->
                        <div class="col-md-6 col-sm-12 timeline-text-wrapper">
                            <div class="timeline-text">
                                <h3>Create an account</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- End of Timeline Text -->

                        <!-- Start of Timeline Image -->
                        <div class="col-md-6 col-sm-12 timeline-image-wrapper">
                            <div class="timeline-image">
                                <img src="assets/images/other/signup.png" alt="">
                            </div>
                        </div>
                        <!-- End of Timeline Image -->

                    </div>
                    <!-- === End of Timeline Step 1 === -->


                    <!-- === Start of Timeline Step 2 === -->
                    <div class="timeline-step row">
                        <span class="timeline-step-btn" style="color: #2a7bc2; background: #c1ddf5;">Step 2</span>

                        <!-- Start of Timeline Image -->
                        <div class="col-md-6 col-sm-12 timeline-image-wrapper">
                            <div class="timeline-image">
                                <img src="assets/images/other/pricing.png" alt="">
                            </div>
                        </div>
                        <!-- End of Timeline Image -->

                        <!-- Start of Timeline Text -->
                        <div class="col-md-6 col-sm-12 timeline-text-wrapper">
                            <div class="timeline-text-right">
                                <h3>Choose your Plan</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- End of Timeline Text -->

                    </div>
                    <!-- === End of Timeline Step 2 === -->


                    <!-- === Start of Timeline Step 3 === -->
                    <div class="timeline-step row">
                        <span class="timeline-step-btn" style="color: #eb305f; background: #f9c8d4;">Step 3</span>

                        <!-- Start of Timeline Text -->
                        <div class="col-md-6 col-sm-12 timeline-text-wrapper">
                            <div class="timeline-text">
                                <h3>Enjoy Movify</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- End of Timeline Text -->

                        <!-- Start of Timeline Image -->
                        <div class="col-md-6 col-sm-12 timeline-image-wrapper">
                            <div class="timeline-image">
                                <img src="assets/images/other/enjoy-movify.png" alt="">
                            </div>
                        </div>
                        <!-- End of Timeline Image -->

                    </div>
                    <!-- === End of Timeline Step 3 === -->

                </div>
                <!-- End of Timeline -->

            </div>
        </section>
        <!-- =============== END OF HOW IT WORKS SECTION =============== -->




        <!-- =============== END OF COUNTER SECTION =============== -->
        <section class="counter bg-main-gradient ptb50 text-center">
            <div class="container">
                <div class="row">

                    <!-- 1st Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="964">0</span>
                        <h4>Movies</h4>
                    </div>

                    <!-- 2nd Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="743">0</span>
                        <h4>TV Shows</h4>
                    </div>

                    <!-- 3rd Count up item -->
                    <div class="col-md-4 col-sm-12">
                        <span class="counter-item" data-from="0" data-to="1207">0</span>
                        <h4>Users</h4>
                    </div>

                </div>
            </div>
        </section>
        <!-- =============== END OF COUNTER SECTION =============== -->




        <!-- =============== END OF BECOME PREMIUM SECTION =============== -->
        <section class="become-premium ptb100">
            <div class="container">
                <div class="row">


                    <div class="col-md-5 col-sm-12 mb50">
                        <h3 class="title">Become a Premium Member</h3>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</h6>
                    </div>


                    <div class="col-md-7 col-sm-12">

                        <!-- Start of Pricing Table -->
                        <div class="pricing-table-1">

                            <!-- ===== Start of Featured Holder ===== -->
                            <div class="features-holder">
                                <div class="features-title">
                                    <h5>What You Get</h5>
                                </div>

                                <!-- Start of Features List -->
                                <div class="features-list-wrapper">
                                    <ul class="features-list">

                                        <!-- List Item -->
                                        <li>
                                            <h6>HD available</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>Ultra HD available</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>Unlimited Movies and TV shows</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>Watch on your phone & tablet</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>Download and watch offline</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>Screens you can watch</h6>
                                        </li>

                                        <!-- List Item -->
                                        <li>
                                            <h6>First Month Free</h6>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Start of Features List -->

                            </div>
                            <!-- ===== End of Featured Holder ===== -->


                            <!-- ===== Start of Price Table Featured ===== -->
                            <div class="price-table price-table-featured">

                                <!-- Start of Table Header -->
                                <div class="table-header">
                                    <h5>Premium</h5>
                                </div>
                                <!-- End of Table Header -->

                                <!-- Start Table Content -->
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-check"></i></li>
                                        <li>5</li>
                                        <li><i class="fa fa-check"></i></li>
                                    </ul>
                                </div>
                                <!-- End Table Content -->

                                <!-- Start Table Footer -->
                                <div class="table-footer">
                                    <div class="price-holder">
                                        <span class="currency">$</span>
                                        <span class="price">19.99</span>
                                        <span class="time">/ mon</span>
                                    </div>
                                    <a href="#" target="_self" class="btn btn-main btn-effect"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <!-- End Table Footer -->

                            </div>
                            <!-- ===== End of Price Table Featured ===== -->


                            <!-- ===== Start of Price Table ===== -->
                            <div class="price-table">

                                <!-- Start of Table Header -->
                                <div class="table-header">
                                    <h5>Basic</h5>
                                </div>
                                <!-- End of Table Header -->

                                <!-- Start Table Content -->
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-times"></i></li>
                                        <li><i class="fa fa-check"></i></li>
                                        <li><i class="fa fa-times"></i></li>
                                        <li><i class="fa fa-times"></i></li>
                                        <li>1</li>
                                        <li><i class="fa fa-check"></i></li>
                                    </ul>
                                </div>
                                <!-- End Table Content -->

                                <!-- Start Table Footer -->
                                <div class="table-footer">
                                    <div class="price-holder">
                                        <span class="currency">$</span>
                                        <span class="price">9.99</span>
                                        <span class="time">/ mon</span>
                                    </div>
                                    <a href="#" target="_self" class="btn btn-main btn-effect"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <!-- End Table Footer -->

                            </div>
                            <!-- ===== End of Price Table ===== -->

                        </div>
                        <!-- End of Pricing Table -->

                    </div>

                </div>
            </div>
        </section>
        <!-- =============== END OF BECOME PREMIUM SECTION =============== -->




        <!-- =============== END OF BLOG SECTION =============== -->
        <section class="blog bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Latest News</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row mt50">

                    <!-- 1st Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-1.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Top 10 Action Movies</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- 2nd Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-2.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Oscar Awards</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- 3rd Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog-post-detail.html" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url(assets/images/blog/bloglist-3.jpg)"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="assets/images/user.png" width="50" height="50" alt="author img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog-post-detail.html">Top Upcoming Movies</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> 01/02/2018
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis...</p>
                                    <a href="#" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF BLOG SECTION =============== -->





        <!-- =============== END OF SUBSCRIBE SECTION =============== -->
        <section class="subscribe bg-light2 ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Join Movify Now!</h2>
                        <h6 class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy consectetuer adipiscing.</h6>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10 col-12">

                        <!-- Subscribe Form -->
                        <form action="#" class="mailchimp mt50" novalidate>

                            <!-- Form -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" class="form-control" id="mc-email" placeholder="Your Email" autocomplete="off">
                                    <label for="mc-email"></label>
                                    <button type="submit" class="btn btn-main btn-effect">Subscribe</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End of row -->


            </div>
        </section>
        <!-- =============== END OF SUBSCRIBE SECTION =============== -->


<?php

include 'footer.php';

?>
        