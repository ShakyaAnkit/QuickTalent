<?php include "header.php" ?>


        <!--Page Title-->
        <section class="page-title pb-0" style="background-image: url(assets/images/background/page-title-2.jpg);">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-35.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title-box centred">
                        <h1>Place Your Job</h1>
                        <p>Our Team Moves Faster, Keeping you Current on What's Hot</p>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Employers</li>
                        <li>Place Job Order</li>
                    </ul>
                    <div class="bg-shape"></div>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- placejob-section -->
        <section class="placejob-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-title">Request Needed Talent</span>
                    <h2>Tell Us About Your Hiring Needs</h2>
                    <p>We’re committed to fulfilling your unique hiring needs. Fll out the <br />form below & we’ll be in touch shortly</p>
                </div>
                <form method="post" action="send-mail.php"  class="default-form"> 
                            <input type="hidden" name="Order" value="Place" />    
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-58.png" alt=""></figure>
                                <h2>Company Details</h2>
                                <p>Please fill out your company details here.</p>
                            </div>
                            <div class="job-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Company Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="website" placeholder="Website" required="">
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
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
                                <figure class="icon-box"><img src="assets/images/icons/icon-59.png" alt=""></figure>
                                <h2>Contact Person</h2>
                                <p>Please fill out your contact person details here.</p>
                            </div>
                            <div class="job-form">
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
                                        <input type="text" name="mobiles" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="paddress" placeholder="https://www.facebook.com/person.xxxx " required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                        <div class="form-inner mr-0">
                            <div class="title-inner">
                                <figure class="icon-box"><img src="assets/images/icons/icon-60.png" alt=""></figure>
                                <h2>Request Talent</h2>
                                <p>Here you can leave your job details & Submit your job post.</p>
                            </div>
                            <div class="job-form">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                        <input type="text" name="special" placeholder="Specilization" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Job Location" required="">
                                        </div>
                                        <div class="form-group" >
                                            <input type="text" name="rate" placeholder="Pay Rate Range" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                            <input type="text" name="position" placeholder="Position hiring for" required="">
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select name ="noopen" class="wide">
                                                   <option data-display="Number of Openings">Number of Openings</option>
                                                   <option value="1-10">1-10</option>
                                                   <option value="10-50">10-50</option>
                                                   <option value="50-100">50-100</option>
                                                   <option value="100-500">100-500</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Job Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn-one">Post Your Order</button>
                                        </div>
                                    </div>
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

<!-- Mirrored from st.ourhtmldemo.com/new/Eazyrecruitz/place-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 10:26:07 GMT -->
</html>
