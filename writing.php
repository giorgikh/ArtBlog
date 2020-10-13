<!DOCTYPE html>
<html>
  <?php include 'header.php'; ?>
  <body>
    <div style="height: 50px"></div>
    <div class="row" style="margin-right: 14vh !important; margin-left: 14vh !important">
      <svg width="<?php echo $svgWritingWidth ?> " height="100">
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
          <?php echo $writings ?>
        </text>
      </svg>
    </div>
    <div class="row mb-5 writing">
      <div class="col-xl-3">
        <div class="w_text m-5">
          <h2><?php echo $category ?></h2>
          <div style="width: 150px; height: 2px; background-color: #234140;"></div><br>
          <label for="myCheck1"><?php echo $poem ?></label> 
          <input type="checkbox" id="myCheck1" onclick="myFunction1()"><br>
          <label for="myCheck2"><?php echo $story ?></label> 
          <input type="checkbox" id="myCheck2" onclick="myFunction1()">
        </div>
      </div>


      <script>
        var data = <?php echo json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        html = "";
        for (var i = 0; i < data.length; i++) {
          var name = data[i][0];
          var title = data[i][1];
          var text = data[i][2];
          html +='<div class="col-xl-9"><div class="autors text-center  m-5">\
          <button type="button" class="big-button writing_button mb-5" data-toggle="modal" data-target="#exampleModal1">' + name + title + '</button>';
          html += '<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-left: 30% !important; margin-top: 10% !important"><div class="modal-dialog" role="document">  <div class="modal-content"><div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">. </h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p style="font-size: 20px;"><b>' + title + '</b></p>' + text + '<br><b>';
          html += '<b>' + title + '</b></div></div></div></div><br></div></div>';
        }
      </script>

      <div class="col-xl-9">
        <div class="autors text-center  m-5">
          <button type="button" class="big-button writing_button mb-5" data-toggle="modal" data-target="#exampleModal1">
            აბესაძე გიო  ილოია  
          </button>
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-left: 30% !important; margin-top: 10% !important">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">. </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p style="font-size: 20px;"><b>ილოია</b></p>
                  ილოია მენახირე ყოველ დილით მთისკენ, საღამოს კი უკან მოერეკებოდა საქონელს. ,,თქვენი პატრონი დედაო,, – აგინებდა თან. ასეთი იყო ეს შავი კაცი: გაუკრეჭელი, სამადლო სიგარეტით, საჭმელით; უმშობლო, უშვილძირო. აჯავრებდნენ ბავშვები: დენთის ქარხანა დაიწვა, სიგარეტს ვეღარ მოუკიდებო! გიჟდებოდა ამაზე და დაჭრილი დათვივით იწყებდა ღრიალს. ერთხელაც გაქრა, დაიკარგა.გადიოდა დრო. ძველებურად შრიალებდნენ ვერხვები, მორაკრაკებდნენ რუები, მხოლოდ „გიჟი“ აკლდა სოფელს! გულები გვისივდებოდა ტკივილისგან... მარიობისთვეში, შეშობაზე, ბაბუამ შეიცხადა თხმელებიდან, ძროხა შეუჭამიაო მგელს! მივირბინეთ, კაცის ძვლები იყო. წესისამებრ დავკრძალეთ, ქელეხით.ვტიროდით, იმაზე მეტად, ვიდრე ჭკვიანები ტირიან გიჟებს. გამოიზამთრა. შემაღლებული მიწით ვიცნობ ილოიას საფლავს. საჩუქარი უნდა მივუტანო - „ნასწავლი“ სიგარეტი. იქნება იქაც სიგარეტი ადარდებდეს, იქნება იქაც სანთებელას ეძებდეს,  საწყალი.<br>
                  <b>აბესაძე გიო</b>
                </div>
              </div>
            </div>
          </div><br>
        </div>
      </div>


    </div>


    <?php include 'footer.php'; ?>
  </body>
</html>