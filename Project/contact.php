<?php $title = "Contact Us";
$page = "contact"
?>
<?php include("template/header.php");
include("template/session_start.php") ?>
<!---------end-of-header--------->
<div class="page-section">
  <div class="page">
    <div class="right-section">
      <div class="panel">
        <div class="title">
          <h1>Contact</h1>
        </div>
        <div class="content">
          <h2>Fill up the following form to contact.</h2>
          <form>
            <div class="contact-form mar-top30">
              <label> <span>Full name</span>
              <input type="text" class="input_text" name="name" id="name"/>
              </label>
              <label> <span>Email</span>
              <input type="text" class="input_text" name="email" id="email"/>
              </label>
              <label> <span>Subject</span>
              <input type="text" class="input_text" name="subject" id="subject"/>
              </label>
              <label> <span>Message</span>
              <textarea class="message" name="feedback" id="feedback"></textarea>
              <input type="button" class="button" value="Submit Form" />
              </label>
            </div>
          </form>
          <div class="address">
            <div class="panel ">
              <div class="title">
                <h1>Address - 01</h1>
              </div>
              <div class="content">
                <p>64, German Quarter Galli,<br />
                  Swoyambhu, Kathmandu, Nepal</p>
                <p class="padTop"><span>Phone :</span> 01-4282870</p>
              </div>
            </div>
            <div class="panel">
              <div class="title">
                <h1>Address - 02</h1>
              </div>
              <div class="content">
                <p>Vajra Jewellers, New Road,<br />
                  Kathmandu, Nepal</p>
                <p class="padTop"><span>Phone :</span> +977-9849244497</p>
                <p><span>Facebook Id:</span> <a href="www.facebook.com/subash.shakya1">www.facebook.com/subash.shakya1</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--------------------right-section------------>
  </div>
  <div class="clear"></div>
</div>
<!----------page-section----------------->
<?php include("template/footer.php") ?>