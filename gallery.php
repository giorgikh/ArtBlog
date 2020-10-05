<?php
#connect

$conn = mysqli_connect("localhost", "root", "", "artblog_ge");
$select_query = "SELECT `Paint_Name`, `Paint_Description`, `Pain_Path`, category.Category_Name , `Paint_Date`, `Paint_Type`, `Paint_Author` FROM `paintings`
left JOIN category on category.Category_ID = paintings.Paint_Category_ID";
$res = mysqli_query($conn, $select_query);
$data = array();

while ($row = mysqli_fetch_all($res)) {
  $data = $row;
}
?>


<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<head>
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
</head>

<body>

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


  <div class="row  mb-5 main_gallery">
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
      <div id="test">
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
        console.log(data);
        if (oil.checked) categoryArray.push("ზეთი");
        if (gouache.checked) categoryArray.push("გუაში");
        if (acrylic.checked) categoryArray.push("აკრილი");

        var html = '<div class="gallery "style="padding: 20px !important;">';
        html += '<div id="test1">';
        if (!categoryArray.length) categoryArray = ["ზეთი", "გუაში", "აკრილი"];
        for (i = 0; i < data.length; i++) {
          var paintName = data[i][0];
          var paintDescription = data[i][1];
          var paintPath = data[i][2];
          var paintCategory = data[i][3];
          var paintDate = data[i][4];
          var paintType = data[i][5];
          var paintAuthor = data[i][6];
          for (category of categoryArray) {
            if (paintCategory == category) {
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

    <!-- ---------------gallery----------- -->
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>