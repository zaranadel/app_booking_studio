<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Traxx Studio</title>
    <link rel="shortcut icon" href="{{ asset('adminlte/Asset 2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
    <!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->

</head>

<body>
    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
            <div class="container">
                <div class="tm-next">
                    <a href="#infinite" class="navbar-brand">Traxx Studio</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#infinite">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#whatwedo">Tentang Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#testimonials">Person</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <br>
                <br>
                <h2 class="tm-hero-title">Traxx Studio</h2>
                <p class="tm-hero-subtitle">
                    Wellcome to Traxx Studio Music
                    <br>Tengok-tengokla Dulu
                    <br>
                </p>
            </div>
        </div>

        <div class="tm-next tm-intro-next">
            <a href="{{ route('login') }}" class="text-center tm-down-arrow-link">

                <i class="fas fa-2x tm-down-arrow">Login</i>
            </a>
        </div>
    </section>

    <section id="whatwedo" class="tm-section-pad-top">

        <div class="container">

            <div class="row tm-content-box">
                <!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">Tentang Studio</h2>
                        <p class="mb-4 tm-intro-text">
                            Traxx Studio musik ini berdiri sejak tahun 1996 yang berlamatkan di Jl.Bhayangkara RT.21 No.115, Jambi Timur, Kota Jambi, Jambi. dengan pemilik Bpk. Hadiwibowo Ramadhan dengan nomor telepon 0852-6638-6003. 
                        <br> <br> Traxx Studio Musik adalah sarana bagi para seniman musik (musisi) yang berupa ruangan yang mana didalamnya terdapat beberapa alat-alat musik seperti drum, gitar, dan lain-lain untuk mereka yang ingin merekam suara maupun hanya untuk sekedar latihan saja.
                    <br> <br> Berdirinya Traxx Studio Musik ini selain pemilik memiliki hobi bermain alat-alat musik, juga dikarenakan pemilik melihat maraknya konser-konser band pada saat itu dan banyak digemari oleh masyarakat dari berbagai kalangan, sedangkan studio musik yang tersedia pada saat itu masih sangat sedikit.
                </p>
                    </div>
                </div>
            </div>
            <!-- first row -->

            <div class="row tm-content-box">
                <!-- second row -->
                <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        {{-- <h2 class="tm-text-primary mb-4">Market Analysis</h2>
                        <p class="mb-4 tm-intro-text">
                            Praesent sed pharetra lorem, blandit convallis mi. Aenean ornare elit ac metus lacinia, sed iaculis nibh semper. Pellentesque est urna.</p> --}}
                    </div>
                </div>

                <div class="col-lg-1">
                    <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        {{-- <h2 class="tm-text-primary mb-4">Fast Support</h2>
                        <p class="mb-4 tm-intro-text">
                            Credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels</a> website for all images used in this template. Cras condimentum mi et sapien dignissim luctus.</p> --}}
                    </div>
                </div>
            </div>
            <!-- second row -->

            <div class="row tm-content-box">
                <!-- third row -->
                <div class="col-lg-1">
                    <i class="fas fa-3x fa-fingerprint text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        {{-- <h2 class="tm-text-primary mb-4">Top Security</h2>
                        <p class="mb-4 tm-intro-text">
                            You have <strong>no</strong> authority to post this template as a ZIP file on your template collection websites. You can <strong>use</strong> this template for your commercial websites.</p> --}}

                        <div class="tm-continue">
                            <a href="#testimonials" class="tm-intro-text tm-btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1">
                    <i class="fas fa-3x fa-users text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        {{-- <h2 class="tm-text-primary mb-4">Social Work</h2>
                        <p class="mb-4 tm-intro-text">
                            You can change <a href="https://fontawesome.com/icons?d=gallery">Font Awesome icons</a> by either <b><em>fas or far</em></b> in the HTML codes. For Examples:<br>
                            <em>&lt;i class=&quot;fas fa-users&quot;&gt;&lt;i class=&quot;far fa-chart-bar&quot;&gt;</em> </p> --}}
                        <div class="tm-continue">
                            <a href="#testimonials" class="tm-intro-text tm-btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third row -->
        </div>
    </section>

    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-testimonials-content">
            <div class="row">
                <div class="col-lg-12 tm-content-box">
                    <h2 class="text-white text-center mb-4 tm-section-title">Person</h2>
                    <p class="mx-auto tm-section-desc text-center">
                        Perancangan Website ini dibantu oleh 3 orang mahasiswa dari Universitas Dinamika Bangsa Jambi.
                    </p>
                    <div class="mx-auto tm-gallery-container tm-gallery-container-2">
                        <div class="tm-testimonials-carousel">
                            <figure class="tm-testimonial-item">
                                <img src="img/testimonial-img-01.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote></blockquote>
                                <figcaption>M. Zar'an Adel Syahputra <br>(Back End Dev)</figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="img/2.jpeg" alt="Image" class="img-fluid mx-auto">
                                <blockquote></blockquote>
                                <figcaption>Teddy Biantoro Hidayat <br>(Front End Dev)</figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="img/1.jpg" alt="Image" class="img-fluid mx-auto">
                                <blockquote></blockquote>
                                <figcaption>Rivaldi Sastra Fadila <br>(Feeder/AFK)</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-bg-overlay"></div>
    </section>

    <section id="gallery" class="tm-section-pad-top">
        <div class="container tm-container-gallery">
            <div class="row">
                <div class="text-center col-12">
                    <h2 class="tm-text-primary tm-section-title mb-4">Gallery</h2>
                    <p class="mx-auto tm-section-desc">
                        Ini adalah gallery dari Traxx Studio yang berisikan potret studio dan beberapa fasilitas studio
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mx-auto tm-gallery-container">
                        <div class="grid tm-gallery">
                            <a href="img/gallery-img-01.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-01.jpg" alt="Image 1" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Physical Health <span>Exercise!</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-02.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-02.jpg" alt="Image 2" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Rain on Glass <span>Second Image</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-03.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-03.jpg" alt="Image 3" class="img-fluid">
                                    <figcaption>
                                        <h2><i><span>Sea View</span> Mega City</i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-04.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-04.jpg" alt="Image 4" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Dream Girl <span>Thoughts</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-05.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-05.jpg" alt="Image 5" class="img-fluid">
                                    <figcaption>
                                        <h2><i><span>Workstation</span> Offices</i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-06.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-06.jpg" alt="Image 6" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Just Above <span>The City</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-01.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-01.jpg" alt="Image 7" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Another <span>Exercise Time</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="img/gallery-img-02.jpg">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="img/gallery-tn-02.jpg" alt="Image 8" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Repeated <span>Image Spot</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-contact">

            <div class="row">

                <div class="text-center col-12">
                    <h2 class="tm-section-title mb-4">Contact Us</h2>
                    <p class="mb-5">

                    </p><br>
                </div>

                <div class="col-sm-12 col-md-6">
                    <form action="" method="get">
                        <input id="name" name="name" type="text" placeholder="Your Name" class="tm-input" required />
                        <input id="email" name="email" type="email" placeholder="Your Email" class="tm-input" required />
                        <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required></textarea>
                        <button type="submit" class="btn tm-btn-submit">Submit</button>
                    </form>
                </div>

                <div class="col-sm-12 col-md-6">

                    <div class="contact-item">
                        <a rel="nofollow" href="https://www.instagram.com/teddybiantoro/" class="item-link">
                            <i class="fab fa-2x fa-instagram mr-4"></i>
                            <span class="mb-0">Traxx Studio</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <a rel="nofollow" href="mailto:teds250101@gmail.com" class="item-link">
                            <i class="far fa-2x fa-envelope mr-4"></i>
                            <span class="mb-0">traxxstudio@gmail.com</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <a rel="nofollow" href="https://www.google.com/maps/place/Traxx+Music+Studio/@21.6682825,12.9326398,3z/data=!4m9!1m2!2m1!1straxx+studio!3m5!1s0x2e2588cdca2331f9:0xa8b39e6b71cea50c!8m2!3d-1.6021577!4d103.6315316!15sCgx0cmF4eCBzdHVkaW-SARByZWNvcmRpbmdfc3R1ZGlv"
                            class="item-link">
                            <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                            <span class="mb-0">Our Location</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <a rel="nofollow" href="tel:082244405518" class="item-link">
                            <i class="fas fa-2x fa-phone-square mr-4"></i>
                            <span class="mb-0">0822-4440-5518</span>
                        </a>
                    </div>
                    <div class="contact-item">&nbsp;</div>
                </div>
            </div>
            <!-- row ending -->
        </div>

        <footer class="text-center small tm-footer">
            <p class="mb-0">
                Copyright &copy; 2020 Company Name . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE</a></p>
        </footer>

    </section>

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function getOffSet() {
            var _offset = 450;
            var windowHeight = window.innerHeight;

            if (windowHeight > 500) {
                _offset = 400;
            }
            if (windowHeight > 680) {
                _offset = 300
            }
            if (windowHeight > 830) {
                _offset = 210;
            }

            return _offset;
        }

        function setParallaxPosition($doc, multiplier, $object) {
            var offset = getOffSet();
            var from_top = $doc.scrollTop(),
                bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
            $object.css({
                "background-position": bg_css
            });
        }

        // Parallax function
        // Adapted based on https://codepen.io/roborich/pen/wpAsm        
        var background_image_parallax = function($object, multiplier, forceSet) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            // $object.css({"background-attatchment" : "fixed"});

            if (forceSet) {
                setParallaxPosition($doc, multiplier, $object);
            } else {
                $(window).scroll(function() {
                    setParallaxPosition($doc, multiplier, $object);
                });
            }
        };

        var background_image_parallax_2 = function($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({
                "background-attachment": "fixed"
            });

            $(window).scroll(function() {
                if ($(window).width() > 768) {
                    var firstTop = $object.offset().top,
                        pos = $(window).scrollTop(),
                        yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                    var bg_css = 'center ' + yPos + 'px';

                    $object.css({
                        "background-position": bg_css
                    });
                } else {
                    $object.css({
                        "background-position": "center"
                    });
                }
            });
        };

        $(function() {
            // Hero Section - Background Parallax
            background_image_parallax($(".tm-parallax"), 0.30, false);
            background_image_parallax_2($("#contact"), 0.80);
            background_image_parallax_2($("#testimonials"), 0.80);

            // Handle window resize
            window.addEventListener('resize', function() {
                background_image_parallax($(".tm-parallax"), 0.30, true);
            }, true);

            // Detect window scroll and update navbar
            $(window).scroll(function(e) {
                if ($(document).scrollTop() > 120) {
                    $('.tm-navbar').addClass("scroll");
                } else {
                    $('.tm-navbar').removeClass("scroll");
                }
            });

            // Close mobile menu after click 
            $('#tmNav a').on('click', function() {
                $('.navbar-collapse').removeClass('show');
            })

            // Scroll to corresponding section with animation
            $('#tmNav').singlePageNav({
                'easing': 'easeInOutExpo',
                'speed': 600
            });

            // Add smooth scrolling to all links
            // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, 'easeInOutExpo', function() {
                        window.location.hash = hash;
                    });
                } // End if
            });

            // Pop up
            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            $('.tm-testimonials-carousel').slick({
                dots: true,
                prevArrow: false,
                nextArrow: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });

            // Gallery
            $('.tm-gallery').slick({
                dots: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
</body>

</html>