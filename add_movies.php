 <?php
    include 'header.php';   
 ?>
 
 <!-- =============== START OF MAIN =============== -->
 <main class="contact-page ptb100">
            <div class="container">
                <div class="row">


                    <!-- Start of Contact Details -->
                    <div class="col-md-4 col-sm-12">
                        <h3 class="title">Info</h3>

                        <div class="details-wrapper">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                            <ul class="contact-details">
                                <li>
                                    <i class="icon-phone"></i>
                                    <strong>Phone:</strong>
                                    <span>(123) 123-456 </span>
                                </li>
                                <li>
                                    <i class="icon-printer"></i>
                                    <strong>Fax:</strong>
                                    <span>(123) 123-456 </span>
                                </li>
                                <li>
                                    <i class="icon-globe"></i>
                                    <strong>Web:</strong>
                                    <span><a href="#">www.movify.com</a></span>
                                </li>
                                <li>
                                    <i class="icon-paper-plane"></i>
                                    <strong>E-Mail:</strong>
                                    <span><a href="#"><span class="__cf_email__" data-cfemail="0d64636b624d60627b646b74236e6260">[email&#160;protected]</span></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start of Contact Details -->


                    <!-- Start of Contact Form -->
                    <div class="col-md-8 col-sm-12">
                        <h3 class="title">Add Movies</h3>

                        <!-- Start of Contact Form -->
                        <form action="add_movies_action.php"
                        method="POST">

                            <!-- contact result -->
                            <div id="contact-result"></div>
                            <!-- end of contact result -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <input class="form-control input-box" type="text" name="title" placeholder="Movie title" autocomplete="off">
                            </div>


                            <!-- Form Group -->
                            <div class="form-group">
                                <input class="form-control input-box" type="text" name="rating" placeholder="movie rating" autocomplete="off">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group mb20">
                                <textarea class="form-control textarea-box" rows="8" name="description" placeholder="Describe your movie..."></textarea>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group text-center">
                                <button class="btn btn-main btn-effect" >Send movie details</button>
                            </div>
                        </form>
                        <!-- End of Contact Form -->
                    </div>
                    <!-- Start of Contact Form -->

                </div>
            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->