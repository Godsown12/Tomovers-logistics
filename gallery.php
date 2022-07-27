<?php
include "core/init.php";
$sql= $conn->query("SELECT * FROM `gallery2` WHERE `images` !='' ");
$sql2= $conn->query("SELECT * FROM `gallery2` WHERE `video` !='' ");
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
        <link href="https://fonts.googleapis.com/css?family=Roboto:150,300,400,500,700,900" rel="stylesheet">

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <div class="parallax-content baner-content" style="background-image: url(img/truc.jpeg);" id="home">
        <div class="container">
            <div class="text-content">TopMovers Hall of Fame
                <h2><em>TOP</em><span>MOVERS</span> <b style="color:#000;">Gallery</b></h2>
                <p style="color:#F89624;"><b>You Move, We Move.</b></p>
            </div>
        </div>
    </div>

    <section id="portfolio gallary">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="projects-holder-3">
                            <div class="projects-holder">
                                <div class="row">
                                    <?php while($result = mysqli_fetch_assoc($sql)) : ?>
                                        <div class="col-xs-3 project-item mix nature">
                                            <div class="thumb">
                                                <div class="image">
                                                    <a href="<?=$result['images'];?>" data-lightbox="image-1"><img src="<?=$result['images'];?>" alt="TopMovers logistics"></a>
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
    </br>
    
    <section id="portfolio video">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="projects-holder-3">
                            <div class="projects-holder">
                                <div class="row">
                                    <?php while($result = mysqli_fetch_assoc($sql2)) : ?>
                                        <div class="col-sm-4 project-item mix nature">
                                            <div class="thumb">
                                                <div class="image">
                                                    <a href="<?=$result['video'];?>"><video src="<?=$result['video'];?>" controls width="150" height="150"></video</a>
                                                </div> 
                                            </div>
                                        </div> 
                                    <?php endwhile;?>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    </br>
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
                        <h4>Location</h4>
                        <ul>
                            <li>6 Magarza Cl, <br>Mabuchi Abuja</li>
                            <li>Water-line Rd, <br>PortHacourt Rivers</li>
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