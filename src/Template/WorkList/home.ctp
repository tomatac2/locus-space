


    <!-- BEGIN OF page main content -->
    <main class="page-main main-anim fullpg" id="mainpage">
        <img src="<?=URL?>img/1.png" class="img-responsive top-side-pic" alt="" />
        <!-- Begin of home section -->
        <div class="section section-home fp-auto-height-responsive" data-section="home">
            <div class="content">
                <!-- Begin of Content -->
                <div class="content-left c-columns anim">

                    <div class="wrapper">
                        <!-- Title and description -->
                        <div class="title-desc">
                            <div class="t-wrapper">

                                <!-- Title -->
                                <header class="title">
                                    <h2>Locus</h2>

                                    <h3>Business space</h3>
                                </header>

                                <div class="cta-btns">
                                    <a class="btn btn-normal book-btn" href="#contact/message" >
                                        <span class="txt">Book now</span>
                                        <span class="arrow-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Arrows scroll down/up -->
                    <footer class="s-footer scrolldown">
                        <a class="down btn">
                            <span class="icon"></span>
                            <span class="txt">Scroll Down</span>
                        </a>
                    </footer>
                </div>
                <!-- End of Content -->
            </div>
        </div>
        <!-- End of home section -->

        <!-- Begin of about us section -->
        <div class="section small-bg-color fp-auto-height-responsive about-sec" data-section="about-us">
            <?= $this->element('home/about') ?>
        </div>
        <!-- End of about us section -->


        <!-- Begin of services section -->
        <div class="section small-bg-black fp-auto-height-responsive" data-section="services">
            <?= $this->element('home/services') ?>
        </div>
        <!-- End of services section -->
        

        <!-- Begin of Works/gallery section -->
        <div class="section section-gallery fp-auto-height-responsive" data-section="branches">
            <?= $this->element('home/branches') ?>
        </div>


        <!-- Begin of Slider list section -->
        <div class="section section-slider fp-auto-height-responsive" data-section="featured">
            <?= $this->element('home/featured') ?>
        </div>
        <!-- End of Slider list section -->

        <!-- Begin of register / socials section -->
        <div class="section section-register section-cent fp-auto-height-responsive" data-section="register">
             <?= $this->element('home/register') ?>
        </div>
        <!-- End of register / socials section -->

        <!-- Begin of contact section -->
        <div class="section section-contact fp-auto-height-responsive hide-clock" data-section="contact">
             <?= $this->element('home/contacts') ?>
        

            <!-- begin of message slide -->
            <div class="slide" id="message" data-anchor="message">
                <section class="content clearfix">
                    <!-- Begin of Content -->
                    <div class="content-contact c-columns">
                        <div class="row wrapper">
                            <div class="columns small-12 medium-12 large-12">
                                <div class="centered">
                                    <div class="title-desc">
                                        <h2 class="page-title">Write to Us</h2>
                                        <p>Need help or just want to say hello?</p>
                                    </div>

                                    <div class="c-form">
                                        <!-- begin of contact form content -->
                                        <div class="c-content card-wrapper">
                                            <div class="message form msgForm"   >
                                                <div class="fields clearfix">
                                                    <div class="input name">
                                                        <label for="mes-name">Name :</label>
                                                        <input id="mes-name" name="name" type="text" placeholder="" class="form-success-clean" required>
                                                    </div>
                                                </div>
                                                <div class="fields clearfix">
                                                    <div class="input last">
                                                        <label for="mes-email">Email :</label>
                                                        <input id="mes-email" type="email" placeholder="" name="email" class="form-success-clean" required>
                                                    </div>
                                                </div>
                                                <div class="fields clearfix no-border">
                                                    <label for="mes-text">Message</label>
                                                    <textarea id="mes-text" placeholder="..." name="message" class="form-success-clean" required></textarea>

                                                    <div>
                                                        <p class="message-ok invisible form-text-feedback form-success-visible">Your message has been sent, thank you.</p>
                                                    </div>
                                                </div>

                                                <div class="btns">
                                                    <button id="submit-message" class="btn btn-normal email_b sendMail" name="submit_message">
                                                        <span class="txt">Send</span>
                                                        <span class="arrow-icon"></span>
                                                    </button>

                                                    <a class="btn btn-normal" href="#contact/information">
                                                        <span class="txt">information</span>
                                                        <span class="arrow-icon"></span>
                                                    </a>
                                                    <a>
                                                        <span class="msgRes"></span>
                                                        <span class="arrow-icon"></span>
                                                    </a>
                                                 
                                                </div>
                                            </div>

                                            <!-- Action button -->
                                            <div class="cta-btns">
                                            </div>

                                        </div>
                                        <!-- end of contact form content -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of content -->
                </section>
            </div>
            <!-- end of message slide -->
        </div>
        <!-- End of contact section -->

    </main>

    <style>
  
        span h3 {color:  #00aeef;font-size: 14px !important;}
    .top-side-pic{ height : auto !important}
    .header-top .logo-wrapper .logo img {
    height: auto !important;
    width: 45% !important; }

        </style>