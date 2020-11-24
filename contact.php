<?php include 'header.php' ?>


        <!--Page Title-->
        <section class="page-title" style="background-image: url(assets/images/background/page-title-2.jpg);">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-35.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title-box centred">
                        <h1>Get In Touch</h1>
                        <p>Smarter Business Solutions. Better Customer Relations.</p>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- contactinfo-section -->
        <section class="contactinfo-section contact-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div id="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-title">Endless Opportunities</span>
                                    <h2>It’s Your Turn</h2>
                                    <p>Visit our <span>Employer FAQ</span> or <span>Employee FAQ</span> page for answers to common questions.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li>
                                        <figure class="icon-box"><img src="assets/images/icons/icon-39.png" alt=""></figure>
                                        <div class="inner">
                                            <h4>Location</h4>
                                            <p>Bengaluru <br />Thinkatronics,Garden Layout,<br /> Sector 2, HSR Layout,<br/>Karnataka 560102</p>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="icon-box"><img src="assets/images/icons/icon-40.png" alt=""></figure>
                                        <div class="inner">
                                            <h4>Call or Email</h4>
                                            <p>
                                                <a href="tel:8004561234">(+91) 974-057-5254</a><br />
                                                <a href="mailto:info@quicktalent.in">info@quicktalent.in</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="icon-box"><img src="assets/images/icons/icon-41.png" alt=""></figure>
                                        <div class="inner">
                                            <h4>Office Hrs</h4>
                                            <p>Mon - Sat: 9.00am to 5.00pm<br />Sunday: Closed</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <h2>What are you looking for?</h2>
                            <form method="post" action="send-mail.php" name="Contact" id="contact-form" class="default-form"> 
                            <input type="hidden" name="formName" value="Contact" />    
                            <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address *" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone *">
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <div class="select-box">
                                            <select class="wide" name="hiring">
                                               <option data-display="Hiring Employees">Hiring Employees</option>
                                               <option value="Category 01">Category 01</option>
                                               <option value="Category 02">Category 02</option>
                                               <option value="Category 03">Category 03</option>
                                               <option value="Category 04">Category 04</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message ..."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                        <button class="theme-btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contactinfo-section end -->


        <!-- locations-section -->
        <!-- <section class="locations-section bg-color-2">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-50.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <h3>Bengaluru</h3>
                                    <p>Vidhyaranyapura, Lakeshore Garden, Thindlu Road.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <p>Email</p>
                                        <a href="mailto:info@quicktalent.in">info@quicktalent.in</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone-call"></i>
                                        <p>Phone</p>
                                        <a href="tel:9740575254">(+91) 974 057-5254</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <h3>New Orleans</h3>
                                    <p>United States, 102 Wilshire, 3rd Str New Orleans 70032.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <p>Email</p>
                                        <a href="mailto:eazyph@example.com">eazyph@example.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone-call"></i>
                                        <p>Phone</p>
                                        <a href="tel:5044561234">(504) 456-1234</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <h3>Minneapolis</h3>
                                    <p>United States, 405 Wilshire, 2nd Str Minneapolis 55111.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <p>Email</p>
                                        <a href="mailto:eazyph@example.com">eazyph@example.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone-call"></i>
                                        <p>Phone</p>
                                        <a href="tel:6124561234">(612) 456-1234</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- locations-section end -->


        <!-- clients-style-two -->
        <section class="clients-style-two" style="background-image: url(assets/images/background/clients-1.jpg);">
            <div class="auto-container">
                <div class="title-inner centred">
                    <h2>Need of Highly Qualified HR Personnel or Employment Opportunities</h2>
                    <div class="btn-box">
                        <a href="place-job.php" class="btn-one">Hire</a>
                        <a href="apply-now.php" class="btn-two">Apply</a>
                    </div>
                </div>
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="clients-logo-box">
                        <a href="http://geovista.in/"><img src="assets/images/clients/geovista.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.sonata-software.com/"><img src="assets/images/clients/sonata.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.cars24.com/"><img src="assets/images/clients/cars.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="http://www.kprtechno.com/"><img src="assets/images/clients/kpr.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="http://https://www.kptechnologies.com/"><img src="assets/images/clients/kp.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="https://www.sonata-software.com/"><img src="assets/images/clients/sonata.png" alt=""></a>
                    </figure>
                </div>
            </div>
        </section>
        <!-- clients-style-two end -->


<?php include 'footer.php' ?>
</body><!-- End of .page_wrapper -->

<!-- Mirrored from st.ourhtmldemo.com/new/Eazyrecruitz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 10:29:26 GMT -->
</html>
