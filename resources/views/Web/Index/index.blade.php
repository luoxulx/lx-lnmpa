<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/index.css') }}">

    <title>Frankenstein - Personal Portfolio Template</title></head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
<div id="index">
    <div class="ts-page-wrapper" id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand ts-push-down__50 position-absolute ts-bottom__0 bg-white pb-0 ts-z-index__1 ts-scroll" href="#page-top"><img src="/my/logo.png" alt="logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-block d-lg-flex ml-auto text-right">
                    <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link ts-scroll" href="#my-services">Services</a>
                    <a class="nav-item nav-link ts-scroll" href="#about-me">About Me</a>
                    <a class="nav-item nav-link ts-scroll" href="#my-skills">Skills</a>
                    <a class="nav-item nav-link ts-scroll" href="#portfolio">Portfolio</a>
                    <a class="nav-item nav-link ts-scroll" href="#testimonials">Clients</a>
                    <a class="nav-item nav-link ts-scroll mr-2" href="#form-contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="ts-hero" class="ts-animate-hero-items">
        <div class="container position-relative h-100 ts-align__vertical">
            <div class="row w-100">
                <div class="col-md-8">
                    <figure class="ts-social-icons mb-4">
                        <a href="#" class="mr-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-slack"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-instagram"></i></a>
                    </figure>
                    <h1>I'm Frankenstein&14k</h1>
                    <h1 class="ts-bubble-border">
                        <span class="ts-title-rotate">
                            <span class="active">Hacker of white hat</span>
                            <span>C++&Python Developer</span>
                            <span>Web Designer</span>
                        </span>
                    </h1>
                </div>
            </div>
            <a href="#my-services" class="ts-btn-effect position-absolute ts-bottom__0 ts-left__0 ts-scroll ml-3 mb-3"><span class="ts-visible ts-circle__sm rounded-0 ts-bg-primary"><i class="fa fa-arrow-down text-white"></i></span><span class="ts-hidden ts-circle__sm rounded-0"><i class="fa fa-arrow-down text-white"></i></span></a>
        </div>
        <div class="ts-background">
            <div class="ts-background-image" data-bg-image="/my/bg-hero.jpg"></div>
        </div>
    </div>

    <main id="ts-content">
        <section id="my-services" class="ts-block ts-xs-text-center pb-0">
            <div class="container">
                <div class="ts-title text-center"><h2>My Services</h2></div>
                <div class="row">

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-brushes.png" alt=""></figure>
                                </div>
                                <div class="ts-item-body"><h4>White Hat Hacker</h4>
                                    <p class="mb-0">Hacker Arsenal What is done is not malicious destruction, they are a group of technical personnel across the network, keen on scientific and technological exploration, Computer science research.</p>
                                </div>
                                <div class="ts-item-footer">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect" target="_blank"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".1s">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-camera.png" alt=""></figure>
                                </div>
                                <div class="ts-item-body"><h4>C++</h4>
                                    <p class="mb-0">https://cn.bing.com/https://cn.bing.com/https://cn.bing.com/https://cn.bing.com/</p>
                                </div>
                                <div class="ts-item-footer">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect" target="_blank"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".2s">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-video.png" alt=""></figure>
                                </div>
                                <div class="ts-item-body"><h4>Video Editing</h4>
                                    <p class="mb-0">Aenean pretium nulla libero, vitae iaculis libero efficitur a. Fusce ut augue finibus quam</p></div><!--end ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect" target="_blank"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".3s">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-pencil.png" alt=""></figure>
                                </div>
                                <div class="ts-item-body"><h4>Copy Writing</h4>
                                    <p class="mb-0">Fusce lorem ex, fringilla eget consequat ut, molestie sit amet nibh. Nullam vitae tincidunt</p></div><!--end ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect"><span>Read More</span></a>
                                </div><!--end ts-item-footer-->
                            </div><!--end ts-item-content-->
                        </div><!--end ts-item-->
                    </div><!--end col-xl-4-->

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".4s">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-lcd.png" alt=""></figure><!--end icon-->
                                </div><!--end ts-item-header-->
                                <div class="ts-item-body"><h4>Coding</h4>
                                    <p class="mb-0">Aenean pretium nulla libero, vitae iaculis libero efficitur a. Fusce ut augue finibus quam</p>
                                </div><!--end ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect"><span>Read More</span></a>
                                </div><!--end ts-item-footer-->
                            </div><!--end ts-item-content-->
                        </div><!--end ts-item-->
                    </div><!--end col-xl-4-->

                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".5s">
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon"><img src="/my/icon-phone.png" alt=""></figure><!--end icon-->
                                </div><!--end ts-item-header-->
                                <div class="ts-item-body"><h4>App Developing</h4>
                                    <p class="mb-0">Duis molestie enim mattis gravida viverra. Fusce ut eros augue. Sed id mauris vel neque</p>
                                </div><!--end ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect"><span>Read More</span></a>
                                </div><!--end ts-item-footer-->
                            </div><!--end ts-item-content-->
                        </div><!--end ts-item-->
                    </div><!--end col-xl-4-->

                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!--END MY SERVICES *************************************************************************************-->
        <section id="about-me" class="ts-block pb-4">
            <div class="container">
                <div class="ts-title text-center"><h2>About Me</h2></div><!--end ts-title-->
                <div class="row ts-align__vertical">
                    <div class="col-md-6"><img src="/my/img-man-looking.jpg" alt="" class="mw-100 mb-5"></div>
                    <div class="col-md-6">
                        <h4 class="ts-bubble-border">Hi There</h4>
                        <p>In id nulla magna. Nullam posuere fermentum mattis. Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo. Nulla in feugiat elit.</p>
                        <dl class="ts-column-count-2">
                            <dt>Name:</dt>
                            <dd>Jonathan Doe</dd>
                            <dt>Phone:</dt>
                            <dd>+1 908-736-1801</dd>
                            <dt>Email:</dt>
                            <dd>hello@example.com</dd>
                            <dt>Twitter:</dt>
                            <dd>freelancer9</dd>
                        </dl>
                        <hr class="ts-hr-light mb-5">
                        <a href="#contact" class="ts-btn-effect mr-2"><span class="ts-visible btn btn-primary ts-btn-arrow">Contact Me</span><span class="ts-hidden btn btn-primary ts-btn-arrow" data-bg-color="#d44729">Contact Me</span></a>
                        <!--<a href="#contact" class="btn btn-primary ts-btn-arrow mr-2">Contact Me</a>-->
                        <!--<a href="#contact" class="btn btn-outline-light ts-btn-border-light">-->
                        <!--<i class="fa fa-download small mr-2"></i>--><!--Download CV--><!--</a>-->
                        <a href="#contact" class="ts-btn-effect mr-2"><span class="ts-visible btn btn-outline-light"><i class="fa fa-download small mr-2"></i>                                    Download CV</span><span class="ts-hidden btn btn-light bg-white"><i class="fa fa-download small mr-2"></i>                                    Download CV</span></a>
                    </div>
                </div><!--end row-->
            </div>
        </section>

        <section class="ts-block">
            <div class="container">
                <div class="text-center px-5 pt-5 position-relative"><h3 class="my-3"> Let’s Work Together On Your Next Project!</h3><a href="#contact" class="btn btn-primary mr-2 ts-push-down__50 ts-has-talk-arrow">Hire Me Now!</a>
                    <div class="ts-background ts-opacity__20" data-bg-image="/my/bg-keyboard.jpg"></div>
                </div>
            </div>
        </section>

        <section id="my-skills" class="ts-block pb-5">
            <div class="container">
                <div class="ts-title text-center">
                    <h2>My Skills</h2>
                </div><!--end ts-title-->
                <h4>Every Day is a New Challenge</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p>In id nulla magna. Nullam posuere fermentum mattis. Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo. Nulla in feugiat elit.</p>
                        <p>Phasellus accumsan scelerisque dolor, quis mattis justo bibendum non. Nulla sollicitudin turpis in enim elementum varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                        <a href="#contact" class="btn btn-outline-light mb-5">Contact Me</a>
                    </div><!--end col-md-6-->
                    <div class="col-md-6">
                        <div class="progress" data-progress-width="100%"><h5 class="ts-progress-title">Webdesign</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!--end progress-->
                        <div class="progress" data-progress-width="80%"><h5 class="ts-progress-title">Photography</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!--end progress-->
                        <div class="progress" data-progress-width="90%"><h5 class="ts-progress-title">Coding</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!--end progress-->
                        <div class="progress" data-progress-width="60%"><h5 class="ts-progress-title">Copywriting</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!--end progress-->
                    </div><!--end col-md-6-->
                </div><!--end row-->
            </div><!--end container-->
        </section>

        <section class="ts-block pb-5" id="portfolio">
            <div class="container">
                <div class="ts-title"><h2>Portfolio</h2></div><!--end ts-title-->
                <div class="card-columns ts-gallery ts-column-count-4">
                    <a href="/my/img-work-01.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Branding</h6>
                            <h4>Pehaz</h4>
                        </div>
                        <img src="/my/img-work-01.png" class="card-img" alt=""><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-02.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Webdesign</h6>
                                <h4>Carilo</h4>
                            </div>
                            <img src="/my/img-work-02.png" class="card-img" alt=""><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-03.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-03.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Typography</h6>
                                <h4>Kali</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-04.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-04.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Identity</h6>
                                <h4>Purity</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-05.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-05.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Coding</h6>
                                <h4>SawMill</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-06.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-06.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Webdesign</h6>
                                <h4>Browar</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-07.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-07.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Experiment</h6>
                                <h4>Wood Tables</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-08.png" class="card ts-gallery__item popup-image"
                       data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-08.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Product Design</h6>
                                <h4>Air Purifier</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-10.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-10.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">App Developing</h6>
                                <h4>Boombox</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-11.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-11.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">3D Art</h6>
                                <h4>The Deer</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                    <a href="/my/img-work-09.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image"><img src="/my/img-work-09.png" class="card-img" alt="">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Rebranding</h6>
                                <h4>Dafont</h4>
                            </div><!--end ts-gallery__item-description-->
                        </div><!--end ts-gallery__image-->
                    </a><!--end card ts-gallery__item-->

                </div><!--end ts-gallery-->
            </div><!--end container-->
        </section><!--end portfolio-->

        <section class="ts-block" data-bg-image="/my/bg-man-sitting.jpg">
            <div class="container ts-promo-numbers">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="43">0</figure>
                            <h5>Clients</h5>
                        </div><!--end ts-promo-number-->
                    </div><!--end col-md-3-->

                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="68">0</figure>
                            <h5>Projects</h5>
                        </div><!--end ts-promo-number-->
                    </div><!--end col-md-3-->

                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="17">0</figure>
                            <h5>Awards</h5>
                        </div><!--end ts-promo-number-->
                    </div><!--end col-md-3-->

                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="12">0</figure>
                            <h5>Years Experience</h5>
                        </div><!--end ts-promo-number-->
                    </div><!--end col-md-3-->
                </div>
            </div>
        </section><!--end ts-block-->

        <section id="testimonials" class="ts-block text-center pb-5">
            <div class="container">
                <div class="ts-title"><h2>Testimonials</h2></div><!--end ts-title-->
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel" data-owl-dots="1" data-owl-loop="1" data-animate="ts-fadeInUp">
                            <div class="slide mb-5">
                                <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow"><i class="fa fa-quote-right"></i></figure>
                                <p class="ts-h5"> In id nulla magna. Nullam posuere fermentum mattis. Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis</p>
                                <div class="ts-circle__lg mb-3" data-bg-image="/my/person.jpg"></div>
                                <h5>Jane Doe</h5><h6 class="ts-opacity__40">Bristol Creative</h6>
                            </div><!--end slide-->

                            <div class="slide mb-5">
                                <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow"><i class="fa fa-quote-right"></i></figure>
                                <p class="ts-h5"> Nam egestas porta posuere. Nunc velit lorem, vestibulum vitae massa nec, lacinia dictum ligula. Quisque scelerisque nec dolor id convallis. Vestibulum porta ipsum pretium turpis rhoncus, non fringilla ipsum mattis.</p>
                                <div class="ts-circle__lg mb-3" data-bg-image="/my/person-02.jpg"></div>
                                <h5>John Brown</h5><h6 class="ts-opacity__40">ABC Architects</h6>
                            </div><!--end slide-->

                        </div><!--end owl-carousel-->
                    </div><!--end col-md-8-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end #testimonials ts-block-->

        <!--LOGOS ***********************************************************************************************-->
        <section id="partners" class="ts-block py-4"><!--container-->
            <div class="container"><!--block of logos-->
                <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners py-3">
                    <a href="#"><img src="/my/logo-01-w.png" alt=""></a>
                    <a href="#"><img src="/my/logo-02-w.png" alt=""></a>
                    <a href="#"><img src="/my/logo-03-w.png" alt=""></a>
                    <a href="#"><img src="/my/logo-04-w.png" alt=""></a>
                    <a href="#"><img src="/my/logo-05-w.png" alt=""></a>
                </div><!--end logos-->
            </div><!--end container-->
        </section>
        <!--END LOGOS *******************************************************************************************-->
    </main><!--end #content-->
    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
    <footer id="ts-footer" class="mt-5">
        <section id="contact" class="ts-block ts-separate-bg-element" data-bg-image="/my/bg-man-wall.jpg"
                 data-bg-image-opacity=".1">
            <div class="container">
                <div class="ts-title text-center"><h2 class="ts-bubble-border">Get In Touch</h2></div>
                <div class="row ts-xs-text-center ">
                    <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp">
                        <img src="/my/icon-pin.png" class="mb-4" alt="">
                        <h5>Address</h5>
                        <div class="ts-opacity__50">
                            <figure class="mb-0">999 Carter Street</figure>
                            <figure>Sailor Springs, IL 62434</figure>
                        </div><!--end ts-opacity__50-->
                    </div><!--end col-md-3-->
                    <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".1s">
                        <img src="/my/icon-phone-02.png" class="mb-4" alt="">
                        <h5>Phone</h5>
                        <div class="ts-opacity__50">
                            <figure class="mb-0">+1 618-689-9409</figure>
                            <figure>+1 781-254-8437</figure>
                        </div><!--end ts-opacity__50-->
                    </div><!--end col-md-3-->
                    <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".2s">
                        <img src="/my/icon-envelope.png" class="mb-4" alt="">
                        <h5>Email</h5>
                        <div class="ts-opacity__50">
                            <figure class="mb-0">hello@example.com</figure>
                            <figure>support@example.com</figure>
                        </div><!--end ts-opacity__50-->
                    </div><!--end col-md-3-->
                    <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".3s">
                        <img src="/my/icon-talk-bubble.png" class="mb-4" alt=""><h5>Facebook Chat</h5>
                        <div class="ts-opacity__50">
                            <figure>me.freelancer3</figure>
                        </div><!--end ts-opacity__50-->
                    </div><!--end col-md-3-->
                </div><!--end row-->
                <div class="pt-5">
                    <div class="row">
                        <div class="col-md-4"><h3>Let’s Connect</h3>
                            <div class="ts-column-count-sm-2">
                                <a href="https://www.facebook.com/luoxulx" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-facebook-f"></i></span>
                                    <span>Facebook</span>
                                </a><!--end link-->
                                <a href="https://github.com/luoxulx" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-github"></i></span>
                                    <span>Github</span>
                                </a><!--end link-->
                                <a href="https://www.twitter.com/luoxulx" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-twitter"></i></span>
                                    <span>Twitter</span>
                                </a><!--end link-->
                                <a href="https://www.instagram.com/luoxulx" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-instagram"></i></span>
                                    <span>Instagram</span>
                                </a><!--end link-->
                                <a href="https://youtube.com/luoxulx" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-youtube"></i></span>
                                    <span>YouTube</span>
                                </a><!--end link-->
                            </div>
                        </div><!--end col-md-4-->
                        <div class="col-md-8">
                            <h3>Feedback Me a Message</h3>
                            <feedback-component></feedback-component>
                        </div>
                    </div><!--end row-->
                </div>
            </div><!--end container-->
        </section><!--end #contact-->

        <div class="text-dark bg-white">
            <div class="container py-3 position-relative">
                <small>© {{ date('Y') }} &nbsp;14k, &nbsp;All Rights <a href="https://www.lnmpa.top" target="_blank">Reserved</a></small>
                <a href="#page-top" class="ts-circle__xs rounded-0 bg-dark position-absolute ts-right__0 ts-top__0 ts-push-up__50 ts-scroll"><i class="fa fa-arrow-up text-white"></i></a>
            </div>
        </div>
    </footer><!--end #footer-->
    </div><!--end page--><!-- Modal -->
    <div class="modal fade text-dark" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 rounded-0">
            <div class="modal-header bg-light px-5 pt-0 pb-5">
                <div class="ts-title mb-0">
                    <figure class="ts-circle__md bg-dark rounded-0"><img src="/my/icon-brushes.png" alt=""></figure>
                    <h4 class="mb-0">Web Design</h4>
                </div>
                <button type="button" class="close position-absolute ts-top__0 ts-right__0 m-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-white">&times;</span></button>
            </div>
            <div class="modal-body p-5"><h5 class="mb-4">Latest Works</h5>
                <div class="owl-carousel" data-owl-dots="1">
                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><img src="/my/img-work-detail-01.jpg" alt=""></div>
                                <div class="col-md-8"><h4 class="mb-3">Creative Lights</h4>
                                    <p>In id nulla magna. Nullam posuere fermentum mattis. Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies.</p>
                                    <a href="#" class="mb-4 text-dark d-block"><i class="fa fa-globe ts-opacity__50 mr-2"></i> www.example.com</a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div><!--end col-md-8-->
                            </div><!--end row-->
                        </div><!--end container-fluid-->
                    </div>
                    <!--end slide-->
                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><img src="/my/img-work-detail-02.jpg" alt=""></div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Wood Ceiling</h4>
                                    <p>Phasellus volutpat velit nec purus elementum feugiat. Nunc feugiat fringilla turpis. Nam sed facilisis sem. Vestibulum vitae orci nec purus fringilla condimentum. Pellentesque id augue rhoncus, finibus sapien ut, commodo eros. Maecenas in nibh augue. Nunc rutrum blandit massa eu aliquet. Nulla facilisi. Aenean luctus ipsum in orci sagittis auctor vel sit amet ex</p>
                                    <a href="#" class="mb-4 text-dark d-block"><i class="fa fa-globe ts-opacity__50 mr-2"></i> www.example.com</a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div><!--end col-md-8-->
                            </div><!--end row-->
                        </div><!--end container-fluid-->
                    </div><!--end slide-->
                </div><!--end owl-carousel-->
            </div><!--end modal-body-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
    </div><!--end modal-->
</div>
<script src="{{ mix('/js/index.js') }}" type="text/javascript"></script>
<script>
  (function(){if(document.getElementsByClassName("ts-full-screen").length){document.getElementsByClassName("ts-full-screen")[0].style.height=window.innerHeight+"px"}})();
</script>
<script src="{{ asset('/js/package/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/isInViewport.jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/scrolla.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/jquery-validate.bootstrap-tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/odometer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/package/custom.js') }}" type="text/javascript"></script>

</body>
</html>
