<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="152x152" href="flav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="flav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="flav/favicon-16x16.png">
    <link rel="manifest" href="flav/site.webmanifest">
    <link rel="mask-icon" href="flav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="./css/app.css">
    <title>SpectrumWise</title>
</head>
<body>


            <!-- //**Top ¨Part**// -->
            <div class="main">

                <nav class="flex nav-container">
                    <h1><a href="#"><span class="white_light">Spectrum</span><span>Wise</span></a></h1>

                    <input type="checkbox" id="menu_opener" class="mobile mobile_check">
                    <lable class="hamburger-lines" id="menu_opener">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                      </lable>  

                    <label for="menu_opener" class="mobile opener_text" style="
                    cursor: pointer;">Open Menu</label>
                    <label for="menu_opener" class="mobile menu_backlayer"></label>
                    <ul class="flex nav_bar" id="menu">
                        <li class="under_menu"><a href="#service">Our Services</a></li>
                        <li class="under_menu"><a href="#work">Our Work</a></li>
                        <li class="under_menu"><a href="#about">About Us</a></li>
                        <li class="btn_li"><a href="#contact" class="cta_nav cta">Contact Us</a></li>
                        <!-- <li><img src="img/mdi_facebook.png" alt="Facebook"></li>-->
                        <!--<li><img src="img/mdi_instagram.png" alt="Instagram"></li> -->
                        <!--<li><a href="https://twitter.com/spectrum_wise" target="_blank"><img src="img/mdi_twitter.png" alt="Twitter"></a></li>-->
                    </ul>
                </nav>

                <div class="blure">    
                    <div class="header_around"> 
                        <section class="flex header">
                        
                            <div class="header-main">
                                <h2 class="white_light">We create meaningful <span class="colord_light">designs</span> for you</h2> 
                                <p>We are a full-service creative agency. We collaborate with brands that aim to build a connection with their customers, we use strategy, design and technology to create meaningful brands and experiences.</p>
                                <a class="cta" href="#service">
                                    Our services
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- //**Our Projects**// -->
            <div class="dark_section main_section" id="service">
                <section class="offers sub_sec">
                    <h2> What Can we do for you ?</h2>
                    <div class="flex offer_flex">
                        <section class="offer flex offer_box_pad">
                            <div class="offer_text">
                                <h3 class="colord_light">UX/UI Design</h3>
                                <p>Our designers have an outstanding knowledge of UX/UI and web accessibility. They will create a unique pixel-perfect design for your website to represent your brand and provide the best customer experience.</p>
                            </div>
                            <div class="img_box">
                                <img src="/img/uxui.png" alt="" class="service_ill ux_ui">
                            </div>
                        </section>

                        <hr>

                        <section class="offer flex offer_revers">
                            <div class="offer_text">
                                <h3 class="colord_light">Brand Visual</h3>
                                <p>Our team of graphic designers will help you stand out among others by creating meaningful brand elements, such as logo, colour, image, shape, graphics and typography.</p>
                            </div>
                            <div class="img_box">
                                <img src="/img/cir.png" alt="" class="service_ill">
                            </div>
                        </section>

                        <hr>

                        <section class="offer flex">
                            <div class="offer_text">
                                <h3 class="colord_light">Customer Relationships</h3>
                                <p>Our marketing team will be able to support you in building long-term relationships with your customers by conducting research and creating custom marketing and communication solutions for your brand. </p>
                            </div>
                            <div class="img_box">
                                <img src="/img/hello.png" alt="" class="service_ill">
                            </div>
                        </section>
                    </div>



                    <div class="cta_box">
                        <a class="cta" href="#contact">
                            Contact Us
                        </a>
                        
                    </div>
                </section>

            </div>

            <!-- //**Our work**// -->
            <div class="pic_arround work">
                <div class="rounded_four">
                </div>
                <div class="rounded_tree">
                </div>

                <div class="main_section snap blure" id="work">
                    <section class="projects sub_sec">
                        <h2>Our Work</h2>
                        <div class="flex img_flex container">
                            <img src="./img/p0.png" alt="">
                            <img src="./img/pm.png" alt="">
                            <img src="./img/p1.png" alt="">
                        </div>
    
                        <div class="cta_box">
                            <a class="cta" href="https://dribbble.com/Spectrumwise" target="_blank">
                                See more of our work
                            </a>
                            
                        </div>
    
                    </section>
                </div>

            </div>


            <!-- //**About use**// -->
            <div class="dark_section main_section about" id="about">
                <section class="sub_sec">
                    <div class="flex offer">
                        <div>
                            <h2>About Us</h2>
                            <p>
                                Our mission is to support brands in building their visual identity and achieving stronger relationships with customers. We aime to be the best customer-centric company; to help individuals and companies build a brand and connect with customers.

                            </p>    
                                <div>
                                    <a class="cta" href="">
                                        Contact us
                                    </a>
                                </div>
                        </div>
                        <div>
                            <img src="/img/about.png" alt="">
                        </div>
                    </div>


                </section>
            </div>


            <!-- //**Contact**// -->            
            <section class="contact">
                        <div class="flex cont-flex">
                            <div class="form">
                                <h2 id="contact"> Get in touch ?</h2>
                                <p class="white_light">We'd love to hear from you</p>


                                <form action="/send" method="post">
                                    @csrf                                    
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your Name">

                                    <label for="email">Your email</label>
                                    <input type="text" id="email" name="email" placeholder="So we can contact you back">

                                    <label for="message">Your Name</label>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Whatever you want to share with us"></textarea>
                                    <button class="cta">Send</button>
                                </form>

                            </div>
        
                            <div class="contact_text">
                                <div class="title">EMAIL</div>
                                <div class="item"><a href="mailto:info@spectrumwise.tech">info@spectrumwise.tech</a></div>
        
                                <div class="title">PHONE NUMBER</div>
                                <div class="item">+447895223031</div>
        
                                <div class="title">ADRESS</div>
                                <div class="item">23 Jamestown Way,<br> London, E14 2DE
                                </div>
        
                                <div class="title">Socials</div>
                                <div class="flex item">
                                    <a href="https://www.linkedin.com/company/spectrumwise-ltd/" target="_blank">Likedin</a>
                                    <a href="https://twitter.com/spectrum_wise" target="_blank">Twitter</a>
                                    <!-- <a href="https://twitter.com/spectrum_wise" target="_blank">Instagram</a> -->
                                    <a href="https://dribbble.com/Spectrumwise" target="_blank">Dribbble</a>
                                </div>
                                
                            </div>
        
                        </div>
    
            </section>

</body>



<script src="./js/app.js"></script>



</html>