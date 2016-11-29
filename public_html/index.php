<?php
$page = 'home';
require 'header.php';
?>

    <!--=====================Content======================-->
    <section class="content">
      <ul id="slippry">
          <li>
              <img src="images/slide.jpg" alt="Best Cleaning Services">
          </li>
          <li>
              <img src="images/slide1.jpg" alt="Keeping Your Home Clean">
          </li>
          <li>
              <img src="images/slide2.jpg" alt="Tidy and Perfect">
          </li>
      </ul>
        <div class="container">
            <div class="col-md-12">
                <h2>What We Do</h2>
            </div>
            <div class="col-md-3 col-md-offset-3">
                <a href="/services" class="box">
                    <div class="maxheight">
                        <img src="images/page1_img1.jpg" alt="">
                        <div class="box_bot">
                            House
                            <span>Cleaning</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/services" class="box">
                    <div class="maxheight">
                        <img src="images/page1_img2.jpg" alt="">
                        <div class="box_bot">
                            Office
                            <span>Cleaning</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="grid_4">
                <a href="#" class="box">
                    <div class="maxheight">
                        <img src="images/page1_img3.jpg" alt="">
                        <div class="box_bot">
                            Windows
                            <span>Cleaning</span>
                        </div>
                    </div>
                </a>
            </div> -->
            <!-- <div class="grid_3">
                <a href="#" class="box">
                    <div class="maxheight">
                        <img src="images/page1_img4.jpg" alt="">
                        <div class="box_bot">
                            Dry
                            <span>Cleaning</span>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
        <div class="clear"></div>
        <div class="sep__1"></div>
        <div class="container_12">
            <div class="grid_6">
                <h3>About</h3>
                <p>
                  I'm Judit Major and I have been working here in Bristol for the past 3 years as a Cleaner / Housekeeper and I'm now self-employed.
                  <br>
                  As part of my previous work experience I've been involved with the following:
                </p>
                  <ul class="padded">
                    <li>Office Cleaning: cleaning of offices, emptying rubbish bins, refilling soap, toilet paper, etc. in the facilities.</li>
                    <li>Hotel Room Cleaning: changing sheets, cleaning bathrooms, vacuum cleaning.</li>
                    <li>Accommodation Cleaning: cleaning of common areas.</li>
                  </ul>
                <p>If you need any help with cleaning, just <span class="color1"><a href="/contact" rel="nofollow">contact me</a></span>.</p>
            </div>
            <div class="clear"></div>
            <div class="grid_12">
                <h2 class="head1">Gallery</h2>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Elastislide Carousel -->
        <ul id="carousel" class="elastislide-list">
            <li>
                <img src="images/gallery_1.jpeg" alt="image01" />
            </li>
            <li>
                <img src="images/gallery_2.jpeg" alt="image02" />
            </li>
            <li>
                <img src="images/gallery_3.jpeg" alt="image03" />
            </li>
            <li>
                <img src="images/gallery_4.jpeg" alt="image04" />
            </li>
            <li>
                <img src="images/gallery_5.jpeg" alt="image05" />
            </li>
            <li>
                <img src="images/gallery_6.jpeg" alt="image06" />
            </li>
            <li>
                <img src="images/gallery_7.jpeg" alt="image07" />
            </li>
            <li>
                  <img src="images/gallery_8.jpeg" alt="image08" />
            </li>
        </ul>
        <!-- End Elastislide Carousel -->
    </section>
    <!--==============================Bot_block=================================-->
    <!--==============================footer=================================-->
    <?php require 'footer.php' ?>
