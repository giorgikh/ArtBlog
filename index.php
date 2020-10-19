<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<body>
  <!----------------------------------------------Main img--------------------------------- -->
  <div class="parallax"></div>
  <!-- --------------------------------------------/Main img--------------------------------- -->

  <!------------------------------------------------About--------------------------------------->
  <div class="row" id="about">
    <div data-aos="fade-right">
      <svg width="350" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $whatwedo ?>
        </text>
      </svg>
    </div>
    <div class="col-xl-12">
      <div class="card cardbody ml-4">
        <div class="card-body card-border card_text">
          <?php echo $aboutDescription ?>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------/About--------------------------------------->

  <!--------------------------------------exhibitions--------------------------------------------->
  <div class="row" id="events">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgEventWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $event ?>
        </text>
      </svg>
    </div>
  </div>
  <div class="row" style="margin-left: 14vh !important; margin-right: 14vh !important">
    <div class="col-xl-4 col-lg-12 col-sm-12">
      <div class="card m-3">
        <img class="card-img-top" src="images/pexels-tim-gouw-139764.jpg" alt="Card image cap" />
        <div class="card-body">
          <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12">
      <div class="card m-3">
        <img class="card-img-top" src="images/pexels-tim-gouw-139764.jpg" alt="Card image cap" />
        <div class="card-body">
          <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12">
      <div class="card m-3">
        <img class="card-img-top" src="images/pexels-tim-gouw-139764.jpg" alt="Card image cap" />
        <div class="card-body">
          <p class="card-text text-center m-2">
            <?php echo $date ?>: 20/10/2020 <br />
            <?php echo $time ?>: 14:00 <br />
            <?php echo $location ?>: kolonadebtan
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------/Events--------------------------------------------->

  <!--------------------------------------/Category--------------------------------------------->
  <div class="row" id="category">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgCategoryWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $category ?>
        </text>
      </svg>
    </div>
  </div>
  <div class="row" style="margin-left: 14vh !important; margin-right: 14vh !important">
    <div class="col-xl-6 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-moose-photos-1037993.jpg" style="width: 100%" class="image" />
      <div class="middle">
        <div class="text">
          <a href="gallery.php"> <?php echo $viewPaintings ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-matheus-bertelli-573294.jpg" style="width: 100%" class="image" />
      <div class="middle">
        <div class="text">
          <a href="photography.php"> <?php echo $viewPhotograpy ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-anna-shvets-4557467.jpg" style="width: 100%" class="image" />
      <div class="middle">
        <div class="text">
          <a href="directing.php"> <?php echo $viewDirecting ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-zack-jarosz-1727658.jpg" style="width: 100%" class="image" />
      <div class="middle">
        <div class="text">
          <a href="actors.php"> <?php echo $viewActors ?></a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-sm-12" id="button">
      <img src="images/pexels-tyler-wang-3508453.jpg" style="width: 100%" class="image" />
      <div class="middle">
        <div class="text">
          <a href="writing.php"> <?php echo $viewWritings ?></a>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------/Category--------------------------------------------->

  <!--------------------------------------Contact--------------------------------------------->
  <div class="row" id="contact">
    <div data-aos="fade-right">
      <svg width="<?php echo $svgContactWidth ?>" height="100">
        <filter id="money">
          <feMorphology in="SourceGraphic" operator="dilate" radius="2" result="expand" />
          <feOffset in="expand" dx="1" dy="1" result="shadow_1" />
          <feOffset in="expand" dx="2" dy="2" result="shadow_2" />
          <feOffset in="expand" dx="3" dy="3" result="shadow_3" />
          <feOffset in="expand" dx="4" dy="4" result="shadow_4" />
          <feOffset in="expand" dx="5" dy="5" result="shadow_5" />
          <feOffset in="expand" dx="6" dy="6" result="shadow_6" />
          <feOffset in="expand" dx="7" dy="7" result="shadow_7" />
          <feMerge result="shadow">
            <feMergeNode in="expand" />
            <feMergeNode in="shadow_1" />
            <feMergeNode in="shadow_2" />
            <feMergeNode in="shadow_3" />
            <feMergeNode in="shadow_4" />
            <feMergeNode in="shadow_5" />
            <feMergeNode in="shadow_6" />
            <feMergeNode in="shadow_7" />
          </feMerge>
          <feFlood flood-color="#ebe7e0" />
          <feComposite in2="shadow" operator="in" result="shadow" />
          <feMorphology in="shadow" operator="dilate" radius="1" result="border" />
          <feFlood flood-color="#35322a" result="border_color" />
          <feComposite in2="border" operator="in" result="border" />
          <feOffset in="border" dx="1" dy="1" result="secondShadow_1" />
          <feOffset in="border" dx="2" dy="2" result="secondShadow_2" />
          <feOffset in="border" dx="3" dy="3" result="secondShadow_3" />
          <feOffset in="border" dx="4" dy="4" result="secondShadow_4" />
          <feOffset in="border" dx="5" dy="5" result="secondShadow_5" />
          <feOffset in="border" dx="6" dy="6" result="secondShadow_6" />
          <feOffset in="border" dx="7" dy="7" result="secondShadow_7" />
          <feOffset in="border" dx="8" dy="8" result="secondShadow_8" />
          <feOffset in="border" dx="9" dy="9" result="secondShadow_9" />
          <feOffset in="border" dx="10" dy="10" result="secondShadow_10" />
          <feOffset in="border" dx="11" dy="11" result="secondShadow_11" />
          <feMerge result="secondShadow">
            <feMergeNode in="border" />
            <feMergeNode in="secondShadow_1" />
            <feMergeNode in="secondShadow_2" />
            <feMergeNode in="secondShadow_3" />
            <feMergeNode in="secondShadow_4" />
            <feMergeNode in="secondShadow_5" />
            <feMergeNode in="secondShadow_6" />
            <feMergeNode in="secondShadow_7" />
            <feMergeNode in="secondShadow_8" />
            <feMergeNode in="secondShadow_9" />
            <feMergeNode in="secondShadow_10" />
            <feMergeNode in="secondShadow_11" />
          </feMerge>
          <feImage x="0" y="0" width="600" height="200" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg" />
          <feComposite in2="secondShadow" operator="in" result="secondShadow" />
          <feMerge>
            <feMergeNode in="secondShadow" />
            <feMergeNode in="border" />
            <feMergeNode in="shadow" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <text dominant-baseline="middle" text-anchor="middle" x="50%" y="50%">
          <?php echo $contact ?>
        </text>
      </svg>
    </div>
  </div>
  <div class="row m-5 Bg" style="margin-left: 14vh !important; margin-right: 14vh !important">
    <div class="col-xl-4 col-lg-4 col-sm-12 mb-4" style="height: 600px">
      <div class="contact_information m-5" style="margin-top: 100px !important">
        <h2> <?php echo $getInTouch ?></h2><br />
        <p>
          <img src="icons/icons8-user-location-48.png" /> <?php echo $location ?>:<br />
          <?php echo $addres ?>
        </p>
        <p>
          <img src="icons/icons8-important-mail-48.png" /> <?php echo $email ?>:<br />nino_shainidze@gmail.com
        </p>
        <p>
          <img src="icons/icons8-outgoing-call-48.png" /> <?php echo $phoneNumber ?>:<br />
          +995 55 55 55
        </p><br />
        <h4>
          <?php echo $contactSocialMedia ?>: <br>
          <a href="#"><img src="icons/icons8-facebook-48.png" /></a>
          <a href="#"><img src="icons/icons8-instagram-48.png" /></a>
          <a href="#"><img src="icons/icons8-pinterest-48.png" /></a>
        </h4>
      </div>
      <div class="contact_form">
        <form action=""></form>
      </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-sm-12 mb-4" style="height: 600px">
      <div class="container-contact100" style="margin: auto !important">
        <div class="wrap-contact100">
          <form action="emailSender.php" method="POST" autocomplete="off" class="contact100-form validate-form">
            <span class="contact100-form-title"> <?php echo $sendusmessage ?> </span>
            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
              <input class="input100" type="text" name="name" placeholder="<?php echo $fullName ?>" />
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
              <input class="input100" type="text" name="email" placeholder="<?php echo $email ?>" />
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
              <input class="input100" type="text" name="phone" placeholder="<?php echo $phoneNumber ?>" />
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
              <textarea class="input100" name="message" placeholder="<?php echo $message ?>"></textarea>
              <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn">
              <button class="contact100-form-btn">
                <span>
                  <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                  <?php echo $send ?>
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div id="dropDownSelect1"></div>

      <script src="js/main.js"></script>
      <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-23581568-13");
      </script>
    </div>
  </div>
  <!--------------------------------------/Contact--------------------------------------------->

  <!--------------------------------------Footer--------------------------------------------->
  <?php include 'footer.php'; ?>
  <!--------------------------------------/Footer--------------------------------------------->

  <script>
    AOS.init();
  </script>
</body>

</html>