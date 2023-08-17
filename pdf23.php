
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<style>
  th, td {
  padding: 15px;
  text-align: left;
}
</style>
<body>
   <div class="container">
    <div class="row" style="background: black; color:#fff;">
      <div class="col-md-12" style="height:8rem">
        <p style="display: none;"><?php print_r($shopMeida); ?>
        </p>
        <h2 class=" main-header" style="margin-top: -3.5rem; color:#fff ; text-align: center;
    padding: 25px;
    font-size: 22px;
    font-weight: 300px;">MYSTERY SHOPPING REPORT</h2>
       </div>
    </div>

    <div class="row justify-content-center" style="background-color: #181717; color:#fff;">
      <div class="col-md-4" style="background-color: #181717; color:#fff; margin-top:-4.5rem;margin-bottom:1rem; ">
      <table class="table table-bordered  table-condensed">
  <tr>
    <th>Names</th>
    <th>Values</th>
  </tr>
  <tr>
  <?php if (!empty($cinfo[0])) { ?>
            <td><?php print_r($cinfo[0]['level']); ?></td>
            <td><?php print_r($cinfo[0]['levelName']); ?></td>
          </tr>
          <?php } ?>
          <?php if (!empty($cinfo[1])) { ?>   
          <tr>
          <td><?php print_r($cinfo[1]['level']); ?></td>
          <td><?php print_r($cinfo[1]['levelName']); ?></td>
          </tr>
          <?php } ?>
          <?php if (!empty($cinfo[2])) { ?>
            <tr>
            <td><?php print_r($cinfo[2]['level']);?></td>
            <td><?php print_r($cinfo[2]['levelName']); ?></td>
            </tr>
          <?php } ?>
          <?php if (!empty($cinfo[4])) { ?>
            <tr>
            <td><?php print_r($cinfo[4]['level']);?></td>
            <td><?php print_r($cinfo[4]['levelName']); ?></td>
            </tr>
          <?php } ?>
          <?php if (!empty($cinfo[0])) { ?>
            <tr>
            <td>Visit Date</td>
            <td><?php print_r($cinfo[0]['date']); ?></td>
            </tr>
          <?php } ?>
          <?php if (!empty($cinfo[0])) { ?>
            <tr>
            <td>Visit Time</td>
            <td><?php print_r($cinfo[0]['time']); ?></td>
            </tr>
          <?php } ?>
      </table>
      </div>

      <div class="col-md-4" style="background-color: #181717; color:#fff; margin-top:-4.5rem;margin-bottom:1rem;  ">

        <h4 style="font-size: 14px; margin-top: -3.5rem; color:#fff ; text-align: center; padding: 20px; font-size: 22px; font-weight: 300px;">This Visit Score</h4>
        <div class="image" style="">
            Over all Score : <span><?php echo $repScore; ?>%</span>
        </div>

          <!-- section Info -->

          <div class="col-md-10 section-summary header-sec" style=" font-size:16px; background-color:#181717; color:#fff;width:92.5%;margin-left:15px;text-align:center;margin-top:-17px">
            <b>
              Section Summary
            </b>
          </div>
          
          <table class="table table-bordered  table-condensed">
        <?php foreach ($completereport as $key => $value) { ?>
          <?php

          if ($value['secName'] == 'General Attribute') {
            continue;
          }
          if ($value['secName'] == 'SBP MS Criteria') {
            continue;
          }
          ?>
          <?php

          $s1 = $value['secTotScore'];
          $s2 = $value['secAppScore'];
          $s3 = $value['secAchScore'];


          $per = ($s3 / $s2) * 100;

          ?>

          <tr>
            <th><?php print_r($value['secName']); ?></th>
            <?php if ($s2 > 0) {
              ?>
              <th><?php echo round(($s3 / $s2) * 100) . '%';?></th>
              <?php
            } else {
              ?>
              <th><?php echo 'NA'; ?> </th>
              <?php
            } ?>
          </tr>

        <?php } ?>
          </table>
      </div>
      <!--Add vedio here-->
    </div><!--first row div-->

    <?php foreach ($completereport as $key => $value) { ?>
      <?php if ($value['secName'] != 'General Attribute') {
        continue;
      }

      if ($value['secName'] == 'SBP MS Criteria') {
        continue;
      }

      ?>
      <div class="row">

        <!-- section Info -->
        <div class="col-md-7  section-summary" style="    font-size: 15px;
">
          General Information
        </div>
        <div class="col-md-2 section-summary" style="height: 45px;">

        </div>
        <div class="col-md-1 section-summary" style="height: 45px;">

        </div>
        <div class="col-md-1 section-summary" style="height: 45px;">
        </div>
        <div class="col-md-1 section-summary" style="height: 45px;">
        </div>

        <!-- end section Info -->
      </div>



      <?php foreach ($value['qData'] as $item =>  $att) { ?>
        <?php $item++ ?>
        <?php $quesLength = strlen($att['qName']); ?>

        <div class="row lost-list">

          <div class="col-md-1">
            <span></span>
          </div>

          <div class="col-md-2 ">
            <?php print_r($att['qName']); ?>
          </div>
          <div class="col-md-6" style="">
            <?php print_r($att['comment']); ?>

          </div>
          <div class="col-md-1" style="text-align: center;">

          </div>
          <div class="col-md-1" style="text-align: center;">
          </div>
          <div class="col-md-1" style="text-align: center;">

          </div>
        </div>







      <?php }  ?>





    <?php } ?>


    <?php foreach ($completereport as $key => $value) { ?>
      <?php if ($value['secName'] == 'General Attribute') {
        continue;
      }

      if ($value['secName'] == 'SBP MS Criteria') {
        continue;
      }


      ?>


      <?php

      $s1 = $value['secTotScore'];
      $s2 = $value['secAppScore'];
      $s3 = $value['secAchScore'];


      $per = ($s3 / $s2) * 100;

      ?>


      <div class="row">


        <!-- section Info -->
        <div class="col-md-8  section-summary">
          <?php print_r($value['secName']); ?>
                       Achieved <?php echo round(($s3 / $s2) * 100); ?>%
        </div>
        <!-- end section Info -->
      </div>


      <div class="row">

        <!-- end section Info -->
        <div class="col-md-1 title-section" style="  background-color: #14cfea; color:#000000">
          Sr. No
          Responses
          Total Score
          Applicable
          Achieved
        </div>

      </div>
      <?php foreach ($value['qData'] as $item =>  $att) { ?>
        <?php $item++ ?>
        <?php $quesLength = strlen($att['qName']); ?>

        <div class="sep-ques" style="background-color: #000000; color:#fff">
          <div class="row lost-list">

            <div class="col-md-1">
              <?php echo $item; ?>
            </div>

            <div class="col-md-6 " style="margin-left:-3%;font-size:19px !important;">
              <?php print_r($att['qName']); ?>
            </div>
          </div>
          <?php if ($resultformat->showGuidlinesToClient == 'Yes') { ?>
            <div class="row lost-list">

              <div class="col-md-1 shopper-comment">
                <i class="fa fa-book" title="guidelines"></i>
              </div>
                <?php print_r($att['guidlines']); ?>
            </div>
          <?php } ?>

          <div class="row lost-list">

            <div class="col-md-1 shopper-comment">
              <i class="far fa-comment" title="shopper comment"></i>
            </div>

            <div class="col-md-6 question-comment">
              <?php print_r($att['comment']); ?>
            </div>
            <!--this one generate yes no-->
            <!-- <div class="col-md-2" style="text-align: center;font-size:19px;margin-left: 2%; "> -->
              <!-- <?php print_r($att['optLabel']); ?> -->
              <?php if ($att['optLabel'] == 'No') : ?>
                <span style="color: red;"><?php echo $att['optLabel']; ?></span>
              <?php else : ?>
                <span style="color: #fff;"><?php echo $att['optLabel']; ?></span>
              <?php endif; ?>
            <!-- </div> -->
            <!--end yes no-->
            <div class="col-md-1" style="text-align: center;font-size:19px;">
              <?php if ($att['qTotalScore'] > 0) print_r($att['qTotalScore']); ?>
            </div>
            <div class="col-md-1" style="text-align: center;font-size:19px;">
              <?php if ($att['qTotalScore'] > 0) print_r($att['qAppScore']); ?>

            </div>
            <div class="col-md-1" style="text-align: center;font-size:19px;">
              <!-- <?php if ($att['qTotalScore'] > 0) print_r($att['qAchScore']); ?> -->
              <?php if ($att['qAchScore'] == 0) : ?>
                <span style="color: red;"><?php echo $att['qAchScore']; ?></span>
              <?php else : ?>
                <span style="color: #fff;"><?php echo $att['qAchScore']; ?></span>
              <?php endif; ?>

            </div>

          </div>



        </div>

      <?php }  ?>


      <div class="row">

        <!-- end section Info -->
        <div class="col-md-1 title-section" style="height: 24px; background-color: #000000; color:#fff">

        </div>

        <div class="col-md-6 title-section" style="font-size: 19px !important;background-color: #000000; color:#fff">
          Section Total
        </div>
        <div class="col-md-2 title-section" style="height: 24px; background-color: #000000; color:#fff">

        </div>
        <div class="col-md-1 title-section" title="Total Score" style="font-size: 19px !important;margin-left:-1%;background-color: #000000; color:#fff">
          <?php echo $s1; ?>
        </div>
        <div class="col-md-1 title-section" title="Applicable Score" style="font-size: 19px !important;background-color: #000000; color:#fff">
          <?php echo $s2; ?>
        </div>
        <div class="col-md-1 title-section" title="Achieved Score" style="font-size: 19px !important;background-color: #000000; color:#fff">
          <?php echo $s3; ?>
        </div>

      </div>



    <?php } ?>
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content" style="background-color: #000000; color:#fff">
          <div class="modal-header">
            <div class="icon-box">
              <i class="material-icons">&#xE876;</i>
            </div>
            <h4 class="modal-title">Success!</h4>
          </div>
          <div class="modal-body">
            <p class="text-center">Comment Added successfully. Confirmation email has been sent to user.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    <?php //if($_SESSION['client_id'] == 87){ 
    ?>
    <br><br>
    <div class="row" style="border-top: 4px solid #f3f3f3; padding-top: 23px;">
      <div class="col-md-5" style=" color:#fff;border-right: 4px solid #f3f3f3;">

        <h3 class="page-header">Add Comment</h3>

        <div id='form'>
          <div class="row">
            <div class="col-md-12">

              <form action="<?php echo base_url('comments/create/' . $this->uri->segment(2)); ?>" method="POST" id="commentform">

                <input type="hidden" class="form-control" placeholder="shopName" name="shopName" id="shopName" value="<?php if (!empty($cinfo[0])) {
                                                                                                                        print_r($cinfo[0]['levelName']);
                                                                                                                      } ?>">

                <input type="hidden" class="form-control" placeholder="waveId" name="waveId" id="waveId" value="0">
                <input type="hidden" class="form-control" placeholder="Name" name="commentBy" id="name" value="<?php if (!empty($cinfo[0])) {
                                                                                                                  print_r($cinfo[0]['levelName']);
                                                                                                                } ?>">
                <?php

                $user_id = $_SESSION['user_id'];

                $sql_branch = "SELECT * FROM core_user WHERE user_id = $user_id";
                $query_branch = $this->db->query($sql_branch);

                foreach ($query_branch->result() as $branch)
                  $branchemail = $branch->email;

                $client_id = $_SESSION['client_id'];

                $sql_client = "SELECT * FROM clients WHERE ID = $client_id";
                $query_client = $this->db->query($sql_client);

                foreach ($query_client->result() as $client)

                ?>
                <input type="hidden" class="form-control" name="commentTo" id="email" value="<?php echo $client->name; ?>, Startex Administrator">
                <!--
                 <div id="comment-name" class="form-group">
                   <input type="text" class="form-control" placeholder="Name" name="commentBy" id="name" required="">
                 </div>
                
                 <div id="comment-email" class="form-group">
                   <input type="email" class="form-control" placeholder="Attention E-Mail Address" name="commentTo" id="email" required="">

                 </div>
                  -->
                <div id="comment-message" class="form-group" class="form-row">
                  <textarea required="" name="comment" rows="" class="form-control" placeholder="Message" id="comment"></textarea>
                </div>
                <a href="#"><input type="submit" name="dsubmit" class="btn btn-primary pull-right" id="commentSubmit" value="Submit Comment"></a>
                <br>
                <!-- <input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked"> -->
                <!-- <p1><b>Notify me when new comments are added.</b></p1>
 -->
              </form>

            </div>
          </div>
        </div>

      </div>
      <div class="col-md-7">


        <section class="comment-list">
          <!-- First Comment -->
          <article class="row">

            <div class="col-md-12 col-sm-12">


              <h3 class="page-header" style="color:#fff">Comments</h3>
              <?php if ($clientComments) {
                foreach ($clientComments as $key => $value) : ?>

                  <div class="panel panel-default" style="background-color: #000000; color:#fff">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user"> <span style="color:#E1AD01 !important;">From:</span><?php echo $value['commentBy']; ?>
                          <span style="margin-left: 1%;color:#00A1C9 !important;">To:</span><?php echo $value['commentTo']; ?>

                        </div>
                        <div class="comment-user"></div>


                        <!-- <time class="comment-date" datetime="16-12-2014 01:05">
                          <i class="fa fa-clock-o"></i>
                          <?php

                          $tempDate = $value['commentDate'];
                          $day = date('l', strtotime($tempDate)); // will gives you the week day name 
                          $month = date('jS F Y', strtotime($tempDate)); // will format like date 9th June 2013
                          echo $day . ' ' . $month;   ?></time> -->
                      </header>
                      <div class="comment-post">
                        <p>
                          <!-- <span style="font-size: 26px; font-weight: bold;">“</span> -->
                          <?php echo $value['comment'] ?>
                          <!-- <span style="font-size: 26px; font-weight: bold;">”</span> -->
                        </p>
                      </div>
                      <time class="comment-date" style="color:#c0c0c0 !important;font-size:10px;float: right;" datetime="16-12-2014 01:05">
                        <i class="fa fa-clock-o"></i>
                        <?php
                        $tempDate = $value['commentDate'];
                        $day = date('l', strtotime($tempDate)); // will gives you the week day name 
                        $month = date('jS F Y', strtotime($tempDate)); // will format like date 9th June 2013
                        echo $day . ' ' . $month;   ?></time>
                      <p class="text-right" style="display: none;"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                    </div>

                  </div>

              <?php endforeach;
              } else {
                echo "No Comments!";
              } ?>
            </div>
          </article>

        </section>
      </div>
    </div>

  </div>

  <div style="display: none;">
    <?php print_r($lostMedia); ?>
  </div>

  <br><br>
  <?php //} 
  ?>
   



  <?php if ($_SESSION['commentAdded']) { ?>
    <script type="text/javascript">
      $(document).ready(function() {

        $('#myModal').modal('show');

      })
    </script>

  <?php } ?>



  <script type="text/javascript">
    $(document).ready(function() {

      trendajax()

    })

    function trendajax() {
      $.ajax({
        url: '<?php echo base_url(); ?>general/trend',
        type: 'GET',
        //async: true,
        dataType: "json",
        success: function(data) {
          trend(data)
        }
      });
    }

    function trend(data) {


      var chart = new CanvasJS.Chart("ct2-chart-bar", {
        animationEnabled: true,
        theme: "light2",
        title: {
          text: ""
        },
        axisY: {
          // includeZero: false,
          title: "",
          tickLength: 0,
          lineThickness: 0,
          minimum: 0,
          maximum: 100,
          margin: 0,
          valueFormatString: " "

        },
        data: [{
          type: "line",
          lineThickness: 6,
          lineColor: "#3162d4",
          markerColor: "#3162d4",

          markerSize: 10,


          dataPoints: data.res
        }]
      });
      chart.render();


      $(".canvasjs-chart-credit").css("background", "#fff");
      $(".canvasjs-chart-credit").css("font-size", "8px");
      $(".canvasjs-chart-credit").css("pointer-events", "none");
      $(".canvasjs-chart-credit").css("cursor", "default");
      $(".canvasjs-chart-credit").css("width", "55px");

      $(".canvasjs-chart-credit").css("color", "#fff");
      $(".canvasjs-chart-credit").css("right", "-56px");
      $(".canvasjs-chart-credit").css("top", "118 !important");

    }
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>