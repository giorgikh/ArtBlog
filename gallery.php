<?php
#connect

$conn = mysqli_connect("localhost", "root", "", "artblog_ge");
$select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`, `Paint_Type`, `Paint_Author` FROM `paintings`
left JOIN category on category.Category_ID = paintings.Paint_Category_ID";
// $select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`,\ `Paint_Type`, `Paint_Author` FROM `paintings` left JOIN category on category.Category_ID = paintings.Paint_ID";
$res = mysqli_query($conn, $select_query);
$data = array();

while ($row = mysqli_fetch_all($res)) {
  $data = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/test.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

  <!-- ---------------------------------Bootstrap----------------------------------- -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- ----------------------------------/Bootstrap--------------------------- -->
</head>

<body>

  <!-------------------------------------------------Navbar------------------------------------------>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand text-white" href="test2.html#"><img class="mr-3" src="icons/img2.png" alt="logo"> ARTBLOG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <img src="icons/icons8-xbox-menu-60.png">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link ml-4 text-white" href="test2.html#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-4 text-white" href="test2.html#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-4 text-white" href="test2.html#events">Events</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ml-4 text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-white ml-4" href="gallery.php">Painting</a>
            <a class="dropdown-item text-white ml-4" href="photography.html">Photography</a>
            <a class="dropdown-item text-white ml-4" href="directing.html">Directing</a>
            <a class="dropdown-item text-white ml-4" href="writing.html">Writing</a>
            <a class="dropdown-item text-white ml-4" href="actors.html">Actors</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-4 text-white" href="test2.html#contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ml-4 text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="icons/icons8-globe-20.png">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-white ml-4" href="#"><img src="icons/georgia-flag-3d-round-icon-16.png"> GE</a>
            <a class="dropdown-item text-white ml-4" href="#"><img src="icons/icons8-russian-federation-20.png">RUS</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- --------------------------------------------/Navbar--------------------------------- -->

  <div style="height: 50px;"> </div>



  <!-- ------------------------------------gallery------------------------ -->

  <div class="row mb-2" style="margin-right: 14vh !important; margin-left: 14vh !important">
    <svg width="220" height="100">
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
        Gallery
      </text>
    </svg>
  </div>


  <div class="row  mb-5 gallery">
    <div class="col-xl-2 " style=" padding: 20px !important;">
      <h2>Categries</h2>
      <div style="width: 150px; height: 2px; background-color: #234140;"></div><br>
      <label for="myCheck1">Oil:</label>
      <input type="checkbox" id="myCheck1" onclick="generateGallery()">
      <br>
      <label for="myCheck2">Gouache:</label>
      <input type="checkbox" id="myCheck2" onclick="generateGallery()">
      <br>
      <label for="myCheck3">Acrylic:</label>
      <input type="checkbox" id="myCheck3" onclick="generateGallery()">
    </div>

    <!--  start -->
    <div class="col-xl-10">
      <div id="test" class="gallery " style="padding: 20px !important; width: 100%;">
        <!-- <div id="test1">
          <a href="images/image1.jpg" data-lightbox="mygallery" data-title="ზეთი ტილო 40/50 ავტორი: მარიამ ნადარიაია"><img src="images/image1.jpg"></a>
          <a href="images/image11.jpg" data-lightbox="mygallery" data-title="მასალა: მუყაო. ზეთი. ზომა: 42x33. ასლი გ.გოგოლაური ავტორი ქეთი მაისო"><img src="images/image11.jpg"></a>
          <a href="images/image12.jpg" data-lightbox="mygallery" data-title="ტილო, ზეთი. ზომა: 87x70 ავტორი: ავთანდილ ხააზარაძე"><img src="images/image12.jpg"></a>
          <a href="images/image10.jpg" data-lightbox="mygallery" data-title="ფისო. ავტორი: ანა ხოფერია"><img src="images/image10.jpg"></a>
        </div>

        <div id="test2">
          <a href="images/image2.jpg" data-lightbox="mygallery" data-title="ტილო, გუაში ავტორი: ქეთი კაიშაური"><img src="images/image2.jpg"></a>
          <a href="images/image5.jpg" data-lightbox="mygallery" data-title="ნიღბები. შესრულებულია ბიაზზე აკრილი/გუაში 61x41,5 ავტორი: ბექა ხოფერია"><img src="images/image5.jpg"></a>
          <a href="images/image7.jpg" data-lightbox="mygallery" data-title="ფარშევანგი. მასალა:გუაში ზომა:73x54 ავტორი: დავით შაინიძე 10 წლის"><img src="images/image7.jpg"></a>
          <a href="images/image9.jpg" data-lightbox="mygallery" data-title="ლინდა. სერიიდან: გამასერინე. ავტორი: ანა ხოფერია"><img src="images/image9.jpg"></a>
        </div>

        <div id="test3">
          <a href="images/image3.jpg" data-lightbox="mygallery" data-title="მთვარე. შესრულებულია დაგრუნტულ მუყაოზე აკრილის საღებავით 95,5x70 ავტორი: ბექა ხოფერია"><img src="images/image3.jpg"></a>
          <a href="images/image4.jpg" data-lightbox="mygallery" data-title="პოეზია. შესრულებულია დაგრუნტულ მუყაოზე აკრილის საღებავით. 70x48,5 ავტორი: ბექა ხოფერია"><img src="images/image4.jpg"></a>
          <a href="images/image6.jpg" data-lightbox="mygallery" data-title="ტიტები. სერიიდან: ბავშვობის დათუნიები. მასალა:ტილო, აკრილი. ზომა: 50x40. ინსპირაცია. ავტორი: მარიამ ლობჟანიძე"><img src="images/image6.jpg"></a>
          <a href="images/image8.jpg" data-lightbox="mygallery" data-title="ჟირაფი. მასალა: ფანქარი. ზომა:21x31. ავტორი: დავით შაინიძე 10 წლის"><img src="images/image8.jpg"></a>
        </div> -->
      </div>
    </div>
    <!-- endd -->


    <script>
      var oil = document.getElementById("myCheck1");
      var gouache = document.getElementById("myCheck2");
      var acrylic = document.getElementById("myCheck3");

      function generateGallery() {
        var categoryNumber = 3;
        var categoryArray = [];
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        if (oil.checked) categoryArray.push("ზეთი");
        if (gouache.checked) categoryArray.push("გუაში");
        if (acrylic.checked) categoryArray.push("აკრილი");

        var html = '<div class="col-xl-10"><div class="gallery "style="padding: 20px !important;">';
        html += '<div id="test1">';
        console.log(data);
        // console.log(data);
        if (!categoryArray.length) categoryArray = ["ზეთი", "გუაში", "აკრილი"];
        for (i = 0; i < data.length; i++) {
          var paintName = data[i][0];
          var paintDescription = data[i][1];
          var paintPath = data[i][2];
          var paintCategory = data[i][3];
          var paintDate = data[i][4];
          var paintType = data[i][5];
          var paintAuthor = data[i][6];
          console.log(paintCategory);
          console.log("loop 1");
          for (category of categoryArray) {
            console.log("loop 2");
            if (paintCategory == category) {
              console.log("====");
              console.log(category);
              console.log("====");

              html += '<a  href="' + paintPath + '" data-lightbox="mygallery" data-title="' + paintName + " " + paintDescription + 'ავტორი :' + paintAuthor + '">';
              html += '<img src="' + paintPath + '"></a>';
            }
          }

        }
        html += '</div></div></div>';
        // console.log(html);
        document.getElementById("test").innerHTML = html;


        // console.log("00" + paintCategory);

      }
      generateGallery();
    </script>

    <!-- 
    <script>
      function myFunction1() {

        var checkBox1 = document.getElementById("myCheck1");
        var checkBox2 = document.getElementById("myCheck2");
        var checkBox3 = document.getElementById("myCheck3");

        var dissappear1 = document.getElementById("test1");
        var dissappear2 = document.getElementById("test2");
        var dissappear3 = document.getElementById("test3");





        if (checkBox1.checked == false && checkBox2.checked == true && checkBox3.checked == true) {

          dissappear2.style.display = "block";
          dissappear3.style.display = "block";
        } else if (checkBox2.checked == false && checkBox1.checked == true && checkBox3.checked == true) {
          dissappear1.style.display = "block";
          dissappear3.style.display = "block";
        } else if (checkBox3.checked == false && checkBox2.checked == true && checkBox1.checked == true) {
          dissappear1.style.display = "block";
          dissappear2.style.display = "block";
        } else if (checkBox3.checked == false && checkBox2.checked == false && checkBox1.checked == false) {
          dissappear1.style.display = "block";
          dissappear3.style.display = "block";
          dissappear2.style.display = "block";
        } else if (checkBox1.checked == true && checkBox2.checked == true && checkBox3.checked == true) {
          dissappear1.style.display = "block";
          dissappear2.style.display = "block";
          dissappear3.style.display = "block";

        } else if (checkBox1.checked == true && checkBox2.checked == true) {

          dissappear3.style.display = "none";

        } else if (checkBox1.checked == true && checkBox3.checked == true) {

          dissappear2.style.display = "none";

        } else if (checkBox2.checked == true && checkBox3.checked == true) {

          dissappear1.style.display = "none";

        } else if (checkBox1.checked == true) {
          dissappear2.style.display = "none";
          dissappear3.style.display = "none";
        } else if (checkBox2.checked == true) {
          dissappear1.style.display = "none";
          dissappear3.style.display = "none";
        } else if (checkBox3.checked == true) {
          dissappear1.style.display = "none";
          dissappear2.style.display = "none";

        }

      }
    </script> -->


    <!-- ---------------gallery----------- -->

    <!--------------------------------------FOOTER--------------------------------------------->
    <footer class="page-footer  font-small indigo">
      <div class="footer-copyright right py-3">© 2020 Copyright:
        <a class="mr-5" href="https://mdbootstrap.com/"> MDBootstrap.com</a>

      </div>
    </footer>
    <!--- ------------------------------------/FOOTER--------------------------------------------->

</body>

</html>