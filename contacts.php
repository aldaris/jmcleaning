<?php
$page = 'contacts';
require 'header.php';
?>

<!--=====================Content======================-->
<section class="content">
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <h3>Ask for a quote</h3>
      <form id="form">
      <div class="success_wrapper">
      <div class="success-message">Contact form submitted</div>
      </div>
      <label class="name">
      <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
      <span class="empty-message">*This field is required.</span>
      <span class="error-message">*This is not a valid name.</span>
      </label>
      <label class="email">
      <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
      <span class="empty-message">*This field is required.</span>
      <span class="error-message">*This is not a valid email.</span>
      </label>
       <label class="phone">
          <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
          <span class="empty-message">*This field is required.</span>
          <span class="error-message">*This is not a valid phone.</span>
          </label>
      <label class="message">
      <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
      <span class="empty-message">*This field is required.</span>
      <span class="error-message">*The message is too short.</span>
      </label>
      <div>
      <div class="clear"></div>
      <div class="btns">
      <a href="#" data-type="reset" class="link1">clear</a>
      <a href="#" data-type="submit" class="link1">send</a></div>
      </div>
      </form>
    </div>
    <div class="clear"></div>
  </div>
</section>
<!--==============================Bot_block=================================-->
<!--==============================footer=================================-->
<?php require 'footer.php' ?>
