@include('layout.head')

@include('layout.header')





    <!-- ==================== Start about ==================== -->

    <div class="hero-sec section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont">
                        <div class="sub-title">
                            <h6>About Me</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="main-title wow" data-splitting>My mission is design develop the best Websites around.</h3>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Hello! I’m Anthony Uche. Web developer from Nigeria. I have rich
                            experience in web site design and development, also I am good at wordpress. I love to talk with
                            you about our unique.</p>
                        <a href="{{ asset('assets/img/port/UCHECHUKWU CV.pdf') }}" class="simple-btn mt-40" download>Download C.V</a>
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="skills-box full-width">
                        <div class="skill-item">
                            <h6 class="custom-font">HTML/CSS/JS</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6 class="custom-font">PHP</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="87%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6 class="custom-font">Laravel</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6 class="custom-font">Wordpress</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    {{-- <section class="services" id="services">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">What I Do</h6>
                <h3 class="wow" data-splitting>Services.</h3>
                <span class="tbg">Services</span>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                        <span class="icon pe-7s-anchor"></span>
                        <h6>Web Developer</h6>
                        <p>One of the service.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                        <span class="icon pe-7s-phone"></span>
                        <h6>Web & App Development</h6>
                        <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item wow fadeInUp" data-wow-delay=".5s">
                        <span class="icon pe-7s-camera"></span>
                        <h6>Photography</h6>
                        <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="half-bg bottom"></div>
    </section> --}}

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start numbers ==================== -->

    {{-- <section class="number-sec section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item no-bord">
                        <span class="icon pe-7s-smile"></span>
                        <h3 class="custom-font"><span class="count">2400</span></h3>
                        <p class="wow txt" data-splitting>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <span class="icon pe-7s-portfolio"></span>
                        <h3 class="custom-font"><span class="count">133</span></h3>
                        <p class="wow txt" data-splitting>Compleate Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <span class="icon pe-7s-cloud-download"></span>
                        <h3 class="custom-font"><span class="count">254</span> k</h3>
                        <p class="wow txt" data-splitting>Files Downloaded</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <span class="icon pe-7s-medal"></span>
                        <h3 class="custom-font"><span class="count">46</span></h3>
                        <p class="wow txt" data-splitting>Award Win</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==================== End numbers ==================== -->



    <!-- ==================== Start Works ==================== -->

    <section class="portfolio section-padding pb-70 sub-bg" id="portfolio">
        <div class="container">
            <div class="sec-head custom-font">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Portfolio 📁</h6>
                <h3 class="wow" data-splitting>My Works.</h3>
                <span class="tbg text-right">Portfolio</span>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering col-12">
                    <div class="filter wow fadeIn" data-wow-delay=".5s">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Php/Laravel</span>
                        <span data-filter='.web'>Wordpress</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="col-md-6 items brand lg-mr wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="https://lightgates.app" class="imago wow">
                                <img src="{{ asset('assets/img/port/lightgates-project.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <span class="tags"><a href="#0">Laravel</a>, <a href="#0">HTML, BOOTSTRAP, CSS, JS</a></span>
                            <h6>School Management System</h6>
                            <a href="https://lightgates.app" class="simple-btn mt-40">Visit the website</a>
                        </div>
                    </div>
                     <!-- gallery item -->
                     <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="https://www.bitnetrade.com/" class="imago wow">
                                <img src="{{ asset('assets/img/port/bitnet.PNG') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <span class="tags"><a href="#0">Php</a>, <a href="#0">HTML, BOOTSTRAP, CSS, JS</a></span>
                            <h6>Investment Website</h6>
                            <a href="https://www.bitnetrade.com/" class="simple-btn mt-40">Visit the website</a>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="http://www.nescotravel.com/" class="imago wow">
                                <img src="{{ asset('assets/img/port/nesco-travel-tour-ltd-banner.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <span class="tags"><a href="#0">Laravel</a>, <a href="#0">HTML, BOOTSTRAP, CSS, JS</a></span>
                            <h6>Travel Website</h6>
                            <a href="http://www.nescotravel.com/" class="simple-btn mt-40">Visit the website</a>
                        </div>
                    </div>

                   
                    <!-- gallery item -->
                    <div class="col-md-6 items web graphic wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="https://amebo9ja.com/" class="imago wow">
                                <img src="{{ asset('assets/img/port/blog.PNG') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <span class="tags"><a href="#0">Design</a>, <a href="#0">WordPress</a></span>
                            <h6>Blog</h6>
                            <a href="https://amebo9ja.com/" class="simple-btn mt-40">Visit the website</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->



    <!-- ==================== Start testimonials ==================== -->

    <section class="testimonials section-padding sub-bg lftstl bg-img parallaxie" data-background="img/slid/3.jpg" data-overlay-dark="9">
        <div class="container position-re">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">What People Says?</h6>
                <h3 class="wow" data-splitting>Testimonials.</h3>
                <span class="tbg">Testimonials</span>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-8">
                    <div class="slic-item">
                        <div class="item">
                            <p>Anthony is an amazing web developer, his skills both in his work and commununication is amazing. I really enjoyed working with him.</p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                        <div class="lxleft">
                                            {{-- <div class="img">
                                                <img src="img/clients/1.jpg" alt="">
                                            </div> --}}
                                        </div>
                                        <div class="fxright">
                                            <h6 class="author-name custom-font">Chris</h6>
                                            <span class="author-details">Co-founder, Techocraft.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p>Anthony started out managing our Website,  his scientific approach to our solving problem
                                and the results he achieved made it easy for us to make decision to
                                the management.</p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                        <div class="lxleft">
                                            {{-- <div class="img">
                                                <img src="img/clients/2.jpg" alt="">
                                            </div> --}}
                                        </div>
                                        <div class="fxright">
                                            <h6 class="author-name custom-font">Eze Victor</h6>
                                            <span class="author-details">Co-founder, Vicmax & Co</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p>I would highly recommend Anthony Uche. I worked with the him on an animation for our
                                company service. His agency is different from any other agency I have worked
                                with in the past.</p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                        <div class="lxleft">
                                            {{-- <div class="img">
                                                <img src="img/clients/3.jpg" alt="">
                                            </div> --}}
                                        </div>
                                        <div class="fxright">
                                            <h6 class="author-name custom-font">Chinonso Precious</h6>
                                            <span class="author-details">CEO, PHS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="arrows">
                <div class="next cursor-pointer">
                    <span class="pe-7s-angle-right"></span>
                </div>
                <div class="prev cursor-pointer">
                    <span class="pe-7s-angle-left"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End testimonials ==================== -->



    <!-- ==================== Start Blog ==================== -->

    {{-- <section class="blog-grid section-padding">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="fadeIn" data-wow-delay=".5s">Latest News</h6>
                <h3 class="wow" data-splitting>Our Blogs.</h3>
                <span class="tbg">Blogs</span>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img">
                            <img src="img/blog/1.jpg" alt="">
                        </div>
                        <div class="cont">
                            <a href="#0" class="date custom-font">
                                <span><i>06</i> August</span>
                            </a>
                            <div class="info custom-font">
                                <a href="#0" class="author">
                                    <span>by / Admin</span>
                                </a>
                                <a href="#0" class="tag">
                                    <span>WordPress</span>
                                </a>
                            </div>
                            <h6>
                                <a href="#0">The Start-Up Ultimate Guide to Make Your WordPress
                                    Journal.</a>
                            </h6>
                            <div class="btn-more custom-font">
                                <a href="#0" class="simple-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".5s">
                        <div class="img">
                            <img src="img/blog/2.jpg" alt="">
                        </div>
                        <div class="cont">
                            <a href="#0" class="date custom-font">
                                <span><i>06</i> August</span>
                            </a>
                            <div class="info custom-font">
                                <a href="#0" class="author">
                                    <span>by / Admin</span>
                                </a>
                                <a href="#0" class="tag">
                                    <span>WordPress</span>
                                </a>
                            </div>
                            <h6>
                                <a href="#0">The Start-Up Ultimate Guide to Make Your WordPress
                                    Journal.</a>
                            </h6>
                            <div class="btn-more custom-font">
                                <a href="#0" class="simple-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item list wow fadeInUp" data-wow-delay=".8s">
                        <div class="img">
                            <img src="img/blog/3.jpg" alt="">
                        </div>
                        <div class="cont">
                            <a href="#0" class="date custom-font">
                                <span><i>06</i> August</span>
                            </a>
                            <div class="info custom-font">
                                <a href="#0" class="author">
                                    <span>by / Admin</span>
                                </a>
                                <a href="#0" class="tag">
                                    <span>WordPress</span>
                                </a>
                            </div>
                            <h6>
                                <a href="#0">The Start-Up Ultimate Guide to Make Your WordPress
                                    Journal.</a>
                            </h6>
                            <div class="btn-more custom-font">
                                <a href="#0" class="simple-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==================== End Blog ==================== -->



    <!-- ==================== Start clients Brands ==================== -->

    {{-- <section class="clients-brand section-padding sub-bg">
        <div class="container">
            <div class="brands-crs">
                <div class="brands">
                    <div class="item" data-wow-delay=".3s">
                        <div class="img">
                            <img src="img/clients/brands/01.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".6s">
                        <div class="img">
                            <img src="img/clients/brands/02.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".8s">
                        <div class="img">
                            <img src="img/clients/brands/03.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".3s">
                        <div class="img">
                            <img src="img/clients/brands/04.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".4s">
                        <div class="img">
                            <img src="img/clients/brands/05.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".7s">
                        <div class="img">
                            <img src="img/clients/brands/06.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".5s">
                        <div class="img">
                            <img src="img/clients/brands/07.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
                <div class="brands">
                    <div class="item" data-wow-delay=".3s">
                        <div class="img">
                            <img src="img/clients/brands/08.png" alt="">
                        </div>
                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==================== End clients Brands ==================== -->



    <!-- ==================== Start Blog ==================== -->


    <section class="contact-sec section-padding" id="contact">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Get In Touch</h6>
                <h3 class="wow" data-splitting>Contact Us.</h3>
                <span class="tbg">Contact</span>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-10">
                    <div class="form">
                        <form id="contact-form" method="post" action="http://innovationplans.com/idesign/avo2/avo-dark/contact.php">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit"
                                                class="simple-btn custom-font cursor-pointer"><span>Send
                                                    Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->

    @include('layout.footer')