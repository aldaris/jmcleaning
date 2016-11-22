<?php
$page = 'contact';
$resource = '<script src="https://www.google.com/recaptcha/api.js"></script>';
require 'header.php';
?>

<!--=====================Content======================-->
<section class="content">
  <div class="container">
    <div class="overlay">
      <!-- <img src="/images/loading.gif" alt="Loading..." /> -->
    </div>
    <div class="notification"></div>
    <div class="col-md-6 col-md-offset-3">
      <h3>Any questions?</h3>
      <p>
        If you have any questions, feel free to reach out to us using the form below. If you'd rather call us, just dial <em>07810393490</em>.
      </p>
      <form id="contactForm" class="form-horizontal" method="post" action="/sendmail">
        <div class="form-group">
          <label class="col-sm-3 control-label" for="name">Name</label>
          <div class="col-sm-9">
            <input class="form-control" name="name" type="text" placeholder="John Doe" required />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label" for="email">E-mail address</label>
          <div class="col-sm-9">
            <input class="form-control" name="email" type="email" placeholder="john.doe@example.com" required />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label" for="phonenumber">Phone Number</label>
          <div class="col-sm-9">
            <input class="form-control" name="phonenumber" type="tel" placeholder="01179123456" title="Example format: '01179123456'" pattern="\d{11}" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label" for="message">Message</label>
          <div class="col-sm-9">
            <textarea rows="8" class="form-control" name="message"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3 g-recaptcha" data-sitekey="6LfqrdoSAAAAAB4Mkc4zw48Avb0x7SAjPRxamcGE"></div>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Send</button>
      </form>
    </div>
  </div>
</section>
<!--==============================Bot_block=================================-->
<!--==============================footer=================================-->
<?php require 'footer.php' ?>
