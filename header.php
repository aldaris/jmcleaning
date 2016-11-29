<!DOCTYPE html>
<html lang="en">

<head>
    <title>Judit Major</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/slippry.css">
    <link rel="stylesheet" href="css/elastislide.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/slippry.js"></script>
    <script src="js/modernizr.custom.17475.js"></script>
    <script src="js/TMForm.js"></script>
    <script>
        $(document).ready(function() {
            jQuery('#slippry').slippry()
        });

        function goToByScroll(id) {
            $('html,body').animate({
                scrollTop: $("#" + id).offset().top
            }, 'slow');
        }
    </script>

    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body class="page1" id="top">
    <!--==============================header=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="logo">
                  <a href="/">
                    <img src="images/jm_cleaning.png" alt="JM Cleaning">
                  </a>
                  <h1>Judit Major</h1>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="menu_block">
            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu">
                    <li <?php echo ($page === 'home') ? 'class="current"' : '';?>><a href="/">Home</a></li>
                    <!-- <li><a href="index-1.html">About</a></li> -->
                    <li <?php echo ($page === 'services') ? 'class="current"' : '';?>><a href="/services">Services</a></li>
                    <li <?php echo ($page === 'prices') ? 'class="current"' : '';?>><a href="/prices">Our Prices</a></li>
                    <li <?php echo ($page === 'contacts') ? 'class="current"' : '';?>><a href="/contacts">Contacts</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
