<?php
include "core/init.php";
 $sql= $conn->query("SELECT * FROM `gallery` ORDER BY gallery_id ASC ");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Topmovers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <link rel="shortcut icon" type="image/x-icon" href="img/TM.png" media="all">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top"><em>Tm</em> Logistics</a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-top">Home</a></li>
                        <li><a href="#" class="scroll-link" data-id="about">About Us</a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio">Portfolio</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="#" class="scroll-link" data-id="blog">Blog</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="text-content">TopMovers Logistics
                <h2><em>TOP</em><span>MOVERS</span> LOGISTICS</h2>
                <p>You Move, We Move.</p>
                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="about">Let's Start</a>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_02.png" alt="">
                        </div>
                        <h4>WHO WE ARE?</h4>
                        <div class="line-dec"></div>
                        <p>We are Topmovers. We have a lot of fun relocating our clients to their new residences. Moving is rarely described as a pleasurable process, let's face it. It's a time-consuming process that necessitates a lot of effort. The majority of people do not have a lot of spare time, which makes moving a difficult experience. Whether you need a local moving business or a long-distance moving company, our team of experts is ready to help.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_04.png" alt="">
                        </div>
                        <h4>WHAT WE OFFER?</h4>
                        <div class="line-dec"></div>
                        <p>Skip the headache, the hassle, and the time it takes to move by letting TopMovers take care of all your moving needs. Whether it is a local move or a long-distance move, we have the equipment, experience, and team to get the job done right with flawless execution. We can move you anywhere in the country.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="section-heading">
                            <h4>Our Portfolio</h4>
                            <div class="line-dec"></div>
                            <p>Our Portfolio wall. See our collections of sweet Africa homes and companies our logistic services had move for them.    </p>
                            <img src="img/TM.png" alt="Topmovers Logistics" srcset="">
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="projects-holder-3">
                            <div class="projects-holder">
                                <div class="row">
                                    <?php while($result = mysqli_fetch_assoc($sql)) : ?>
                                            <div class="col-md-4 col-sm-6 project-item mix nature">
                                                <div class="thumb">
                                                    <div class="image">
                                                        <a href="<?=$result['images'];?>" data-lightbox="image-1"><img src="<?=$result['images'];?>" alt="Bibi’s Sparkle Souvenirs"></a>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endwhile; ?>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <?php
        $com = $conn->query("SELECT * FROM `com` ORDER BY com_id ASC");
    ?>
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">                  
                        <?php while($res = mysqli_fetch_assoc($com)): ?>
                            <div class="item">
                                <div class="testimonials-item">
                                    <p>“<?=nl2br($res['note']);?>”</p>
                                    <h4><?=$res['name'];?></h4>
                                    <span><?=$res['title'];?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tabs-content" id="blog">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="col-md-4">
                        <div class="section-heading">
                            <h4>Our Blog Posts</h4>
                            <div class="line-dec"></div>
                            <p>Here is some of our Blog post</p>
                            <?php
                                $blog = $conn->query("SELECT * FROM `blog` ORDER BY blog_id ASC");
                            ?>
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                            <?php while($result1 = mysqli_fetch_assoc($blog)) : ?>
                                <li><a href="#tab<?=$result1['blog_id'];?>" class="active"><?=$result1['title'];?></a></li>
                            <?php endwhile;  ?>  
                            </ul>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-8">
                    <?php
                        $blog2 = $conn->query("SELECT * FROM `blog` ORDER BY blog_id ASC");
                    ?>
                        <section id="first-tab-group" class="tabgroup">
                        <?php while($result2 = mysqli_fetch_assoc($blog2)) : ?>
                            <div id="tab<?=$result2['blog_id'];?>">
                                <?php if($result2['photo'] != ' ' ): ?>
                                <img src="<?=$result2['photo'];?>" alt="">
                                <?php endif; ?>   
                                <div class="text-content">
                                    <h4><?=$result2['title'];?></h4>
                                    <span><a href="#"><?=pretty_date($result2['date']);?></a></span>
                                    <p><?=nl2br($result2['note']);?></p>
                                </div>
                            </div>
                        <?php endwhile;  ?>     
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                        <p><i class="fa fa-phone"></i> Call us:  (+234) 0703-103-8456</p>
                        <p>Or</p>
                        <p><i class="fa fa-whatsapp"></i> Chat with us: (+234) 081-367-79046 </p>
                        <div class="pop-button" >
                            <h4>Can send us a message</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="contact.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map">
    	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1499.387002652473!2d7.445352188179908!3d9.081835553238797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0acfb5ae32a1%3A0x3ecc5179ffb52a8!2s6%20Magarza%20Cl%2C%20Mabushi%2C%20Abuja!5e0!3m2!1sen!2sng!4v1626450926296!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1499.387002652473!2d7.445352188179908!3d9.081835553238797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0acfb5ae32a1%3A0x3ecc5179ffb52a8!2s6%20Magarza%20Cl%2C%20Mabushi%2C%20Abuja!5e0!3m2!1sen!2sng!4v1626450926296!5m2!1sen!2sng" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a class="logo-ft scroll-top" href="#"><em>T</em>M</a>
                        <p>Copyright &copy; 2017 TopMovers Logistics
                       <br>Design: TM ICT Unit</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Headquarters</h4>
                        <ul>
                            <li>Location <br>6 Magarza Cl, <br>Mabuchi Abuja</li>
                            <li>Hours Of Opretion, <br>MON - SAT <br> 8:00am - 10:00pm </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">
                        <h4>More Info</h4>
                        <ul>
                            <li><em>Line</em>: +234-7031038456</li>
                            <li><em>Line2</em>: +23408136779046</li>
                            <li><em>Email</em>:support@topmovers.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Get Social with us</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <ul>
                            <li><img src="img/tm.png" alt="TopMovers Logistics" srcset=""></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>