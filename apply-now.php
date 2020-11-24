<?php include 'header.php' ?>

        <!--Page Title-->
        <section class="page-title pb-0" style="background-image: url(assets/images/background/page-title-2.jpg);">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-35.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title-box centred">
                        <h1>Apply Now</h1>
                        <p>Your Staffing Needs are Unique and Always Evolving</p>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Job Seekers</li>
                        <li>Apply Now</li>
                    </ul>
                    <div class="bg-shape"></div>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- placejob-section -->
        <section class="placejob-section applynow-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Job Opportunities</span>
                    <h2>Apply Now Your Dream Job</h2>
                    <p>We’re committed to fulfilling your unique hiring needs. Fll out the <br />form below & we’ll be in touch shortly</p>
                </div>
                <form action="send-mail.php" method="post" >

                <input type="hidden" name="applyForm" value="Apply" />
                
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-64.png" alt=""></figure>
                                <h2>Basic Infomation</h2>
                                <p>Please fill out your contact person details here.</p>
                            </div>
                            <div class="job-form information-form">
                           
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="fname" placeholder="First Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="lname" placeholder="Last Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="address" placeholder="Address (eg: No,Street,City,State,Zip)" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-65.png" alt=""></figure>
                                <h2>Qualification</h2>
                                <p>Please fill out your qualification details here.</p>
                            </div>
                            <div class="job-form pualification-form">
                            <input type="hidden" name="applyForm" value="Apply" />
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="education" placeholder="Education" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="skills" placeholder="Skills" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="experience" placeholder="Total Experience" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="qualities" placeholder="Personal Qualities" required="">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                        <div class="apply-form">
                        <input type="hidden" name="applyForm" value="Apply" />
                            <div class="row clearfix">
                                
                              
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Additional Information ..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn-one">Apply for Job</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <!-- placejob-section end -->


        <!-- clients-section -->
        <section class="clients-section alternet-2">
            <div class="outer-container">
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="clients-logo-box">
                        <a href="http://geovista.in/"><img src="assets/images/clients/geovista.png" alt=""></a>
                        <span class="logo-title"><a href="http://geovista.in/">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.sonata-software.com/"><img src="assets/images/clients/sonata.png" alt=""></a>
                        <span class="logo-title"><a href="https://www.sonata-software.com/">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.cars24.com/"><img src="assets/images/clients/cars.png" alt=""></a>
                        <span class="logo-title"><a href="https://www.cars24.com/">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="http://www.kprtechno.com/"><img src="assets/images/clients/kpr.png" alt=""></a>
                        <span class="logo-title"><a href="http://www.kprtechno.com/">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="http://geovista.in/"><img src="assets/images/clients/kp.png" alt=""></a>
                        <span class="logo-title"><a href="https://www.kptechnologies.com/">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.sonata-software.com/"><img src="assets/images/clients/sonata.png" alt=""></a>
                        <span class="logo-title"><a href="https://www.sonata-software.com/">Visit Website</a></span>
                    </figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


       <?php include 'footer.php' ?>
</body><!-- End of .page_wrapper -->

<!-- Mirrored from st.ourhtmldemo.com/new/Eazyrecruitz/apply-now.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 10:27:05 GMT -->
</html>
