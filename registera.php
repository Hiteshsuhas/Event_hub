<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "cssjs/css.php";
?>
<body>
    
  <?php
  include "includes/header.php";
  ?>
  <style>
  .field-border{
    border-radius:20px;
    
  }
  </style>
  

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="hello.php"  method="POST" >
              <div class="form-group" >
                <input type="text " name="fname" class="form-control field-border" placeholder="Your Name"  required>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control field-border" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="event" class="form-control field-border" placeholder="Event Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="phno" class="form-control field-border" placeholder="Phone No." required>
              </div>
              
              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-6">
                    <div class="col-auto my-1">
                          <select class="custom-select mr-lg-2  field-border" name="branch" id="inlineFormCustomSelect" required>
                          <option selected>Branch</option>
                          <option value="ise">ISE</option>
                          <option value="cse">CS</option>
                          <option value="ec">EC</option>
                          <option value="eee">EEE</option>
                          <option value="cv">CV</option>


                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <div class="col-auto my-1">
                          <select class="custom-select mr-lg-2 field-border" name="year" id="inlineFormCustomSelect" required>
                          <option selected>Year</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>

                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                  </div>
              </div>
            </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary py-3 px-5 ">
            <span>Register</span>
          </button>           </form>
          
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5950364369996!2d77.68993201430403!3d12.933729319208823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae13cb00000001%3A0xab10e26281718cc2!2sNew%20Horizon%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1587149608780!5m2!1sen!2sin" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </section>



<!--

<?php
include "includes/footer.php";
?>
  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
  include "cssjs/js.php";
  ?>
  </body>  
</html>
-->