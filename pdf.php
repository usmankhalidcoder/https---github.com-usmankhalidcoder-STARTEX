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

  <style type="text/css">
    body {
      background-color: #000000;
    }

    .title {
      text-align: center;
      background: #f3f3f3;
      color: #fff;
      padding: 12px;
    }

    .panel {
      margin-bottom: -2px !important;
      border-radius: 0px !important;
    }

    .title-section {
      text-align: center;
      background: #f3f3f3;
      color: #333;
      padding: 2px;
      margin-top: 8px;
      margin-bottom: 8px;
      font-size: 14px;

    }

    .main-header {
      text-align: center;
      color: #333;
      padding: 25px;
      font-size: 22px;
      font-weight: 300px;
      ;
    }

    .sep-ques {
      border: 1px solid #ddd;
      padding: 8px 14px 15px 4px;
      font-size: 12px;
    }

    .list-head {
      color: #333;
      float: left;
      width: 70px;
      text-align: left;
      padding: 0px 0px 0px 10px;


    }

    .bs-example {
      margin-top: 23px;

    }

    .list-text {
      /*padding: 40px;*/
      /*text-align: center;*/
    }

    .list-group-item {
      padding: 10px 0px;
      background: #181717;
      border-bottom: 1px solid #fff;
      font-size: 11px;
    }

    .section-summary {

      background: #14cfea;
      color: #000000;
      padding: 8px;
      font-size: 18px;
    }

    .section-list {
      padding: 8px;
    }

    .lost-list {
      padding: 0px;
      font-size: 11px;
    }

    .question-comment {
      border: 1px solid #363535;
      border-color: #363535;
      padding: 13px 13px;
      margin-left: -2%
    }

    .shopper-comment {
      font-size: 19px;
      /* padding: 0px 34px; */
      /*        float: right;
*/
      text-align: center;
    }

    .fa-comment {
      /* float: right; */
    }

    .header-sec {
      color: #333;
      background-color: #f3f3f3;
      border: 0.5px solid #494949;
    }

    .question {
      background: cornflowerblue;
      clip-path: polygon(0 0, 70% 0%, 60% 100%, 0% 100%);
      color: #fff;
      padding: 14px;
    }

    .comment-list .row {
      margin-bottom: 0px;
    }

    .comment-list .panel .panel-heading {
      padding: 4px 15px;
      position: absolute;
      border: none;
      /*Panel-heading border radius*/
      border-top-right-radius: 0px;
      top: 1px;
    }

    .comment-list .panel .panel-heading.right {
      border-right-width: 0px;
      /*Panel-heading border radius*/
      border-top-left-radius: 0px;
      right: 16px;
    }

    .comment-list .panel .panel-heading .panel-body {
      padding-top: 6px;
    }

    .comment-list figcaption {
      /*For wrapping text in thumbnail*/
      word-wrap: break-word;
    }

    /* Portrait tablets and medium desktops */
    @media (min-width: 768px) {

      .comment-list .arrow:after,
      .comment-list .arrow:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-color: transparent;
      }

      .comment-list .panel.arrow.left:after,
      .comment-list .panel.arrow.left:before {
        border-left: 0;
      }

      /*****Left Arrow*****/
      /*Outline effect style*/
      .comment-list .panel.arrow.left:before {
        left: 0px;
        top: 30px;
        /*Use boarder color of panel*/
        border-right-color: inherit;
        border-width: 16px;
      }

      /*Background color effect*/
      .comment-list .panel.arrow.left:after {
        left: 1px;
        top: 31px;
        /*Change for different outline color*/
        border-right-color: #FFFFFF;
        border-width: 15px;
      }

      /*****Right Arrow*****/
      /*Outline effect style*/
      .comment-list .panel.arrow.right:before {
        right: -16px;
        top: 30px;
        /*Use boarder color of panel*/
        border-left-color: inherit;
        border-width: 16px;
      }

      /*Background color effect*/
      .comment-list .panel.arrow.right:after {
        right: -14px;
        top: 31px;
        /*Change for different outline color*/
        border-left-color: #FFFFFF;
        border-width: 15px;
      }
    }

    .comment-list .comment-post {
      margin-top: 6px;
    }

    .modal-confirm {
      color: #636363;
      width: 325px;
    }

    .modal-confirm .modal-content {
      padding: 20px;
      border-radius: 5px;
      border: none;
    }

    .modal-confirm .modal-header {
      border-bottom: none;
      position: relative;
    }

    .modal-confirm h4 {
      text-align: center;
      font-size: 26px;
      margin: 30px 0 -15px;
    }

    .form-control {
      background-color: black !important;
    }

    .modal-confirm .form-control,
    .modal-confirm .btn {
      min-height: 40px;
      border-radius: 3px;
    }

    .modal-confirm .close {
      position: absolute;
      top: -5px;
      right: -5px;
    }

    .modal-confirm .modal-footer {
      border: none;
      text-align: center;
      border-radius: 5px;
      font-size: 13px;
    }

    .modal-confirm .icon-box {
      color: #fff;
      position: absolute;
      margin: 0 auto;
      left: 0;
      right: 0;
      top: -70px;
      width: 95px;
      height: 95px;
      border-radius: 50%;
      z-index: 9;
      background: #82ce34;
      padding: 15px;
      text-align: center;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-confirm .icon-box i {
      font-size: 58px;
      position: relative;
      top: 3px;
    }

    .modal-confirm.modal-dialog {
      margin-top: 80px;
    }

    .modal-confirm .btn {
      color: #fff;
      border-radius: 4px;
      background: #82ce34;
      text-decoration: none;
      transition: all 0.4s;
      line-height: normal;
      border: none;
    }

    .modal-confirm .btn:hover,
    .modal-confirm .btn:focus {
      background: #6fb32b;
      outline: none;
    }

    .trigger-btn {
      display: inline-block;
      margin: 100px auto;
    }



    .image {
      width: 165px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #fff;
    }

    .circular-progress {
      position: relative;
      height: 150px;
      width: 150px;
      border-radius: 50%;
      display: grid;
      place-items: center;
    }

    .circular-progress:before {
      content: "";
      position: absolute;
      height: 84%;
      width: 84%;
      background-color: black;
      border-radius: 50%;
    }

    .value-container {
      position: relative;
      font-family: 'Ostrich Sans';
      font-size: 50px;
      font-weight: 100;
      color: #fff;
    }

    iframe {
      margin-top: 10px;
      height: 100% !important;
      width: 350px !important;
      margin-left: -5%;
      margin-top: 0%;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-default" style="  height: 77px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="javascript:void(0)"><img src="https://startexmarketing.com/assets/img/core-img/logo-01.png" style="   background:#fff ;  height: 47px;"></a>
      </div>

      <ul class="nav navbar-nav navbar-right" style="margin-top: 10px; margin-right: 73px; ">
        <li><a href="users/logout"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row" style="background: black; color:#fff;">
      <div class="col-md-12" style="height:8rem">
        <p style="display: none;">
        </p>
        <h2 class=" main-header" style="margin-top: -3.5rem; color:#fff">MYSTERY SHOPPING REPORT</h2>
      </div>
    </div>
    <div class="row justify-content-center" style="background-color: #181717; color:#fff;margin-top: -60px">
      <div class="col-md-4" style="background-color: #181717; color:#fff; margin-top:-4.5rem;margin-bottom:1rem; ">
        <ul class="list-group" style="background-color: #181717; color:#fff;  border-color: #181717;  
">

            <li class="list-group-item" style=" background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem;"><span class="list-head" style="color:#fff;width:150px"></span> <span class="list-text"><b></b></span></li>

            <li class="list-group-item" style=" background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem;"><span class="list-head" style="color:#fff;width:150px"></span>
              <a style="color:#fff" href="/region/" target="_blank"><span class="list-text">
                  </span></a>
            </li>
            <li class="list-group-item" style="background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem"><span class="list-head" style="color:#fff;width:150px"></span>
              <a style="color:#fff" href="/region/" target="_blank"><span class="list-text">
                 </span></a>
            </li>
            <li class="list-group-item" style="background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem"><span class="list-head" style="color:#fff;width:150px"></span>
              <span class="list-text"></span>
            </li>

            <li class="list-group-item" style="background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem"><span class="list-head" style="color:#fff;width:80px">Visit Date</span> <span class="list-text" style="margin-left:70px;"></span></li>

            <li class="list-group-item" style="background-color: #181717; color:#fff  ;height: 40px;border-color:#181717; 
            border-bottom: 1px solid #434242;margin-bottom:1rem"><span class="list-head" style="color:#fff;width:150px">Visit Time</span> <span class="list-text"></span></li>




        </ul>









        <div class="bs-example" style="margin-top:4px">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default" style="margin-left: 75px; width: 210px;margin-top:4rem; border-color:#224283; border-radius: 0px;">
              <div class="panel-heading" style="background-color: #2882fd;
  background-image: linear-gradient(to right, #2882fd , #815cfb);">
                <h4 class="panel-title" style="height: 18px ; text-align: center;">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="background-color: #2882fd;
  background-image: linear-gradient(to right, #2882fd , #815cfb);color: #fff;
    font-weight: 600;text-align:center"> Weak Areas </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse " style="background-color:#000000; color:#fff;">
                <div class="panel-body">


                </div>
                        <div class="row lost-list"  style="display: none;"  >

                          <div class="col-md-12 col-md-offset-1" style="    color:#fff;
    font-family: Arial; margin-top: 2px;
    margin-left: -26px;
    font-size: 12px;padding: 1px 40px; color: #114a86; font-weight: 100;">

                            <span style=" color:#ff0707;">Section: </span>

                          </div>

                        </div>

                      <div class="sep-ques">
                        <div class="row lost-list ">

                          <!--<div class="col-md-1">
                           </div>-->

                          <div class="col-md-12 " styl="  color:#fff;
    font-family:Arial; margin-top: -22px;
    margin-left: -26px;
    font-size: 12px;padding: 1px 40px; color: #114a86; font-weight: 100;">
                          </div>
                          <!--<div class="col-md-2" style="text-align: center;">


                           </div>
                           <div class="col-md-1" style="text-align: center;">

                           </div>
                           <div class="col-md-1" style="text-align: center;">
                           </div>
                           <div class="col-md-1" style="text-align: center;">
                           </div>-->
                        </div>
                        <div class="row lost-list">

                          <div class="col-md-3 shopper-comment">
                            <i class="far fa-comment" data-id="" title="shopper comment"></i>



                          </div>

                          <div class="col-md-9 question-comment">
                          </div>
                          <div class="col-md-2" style="text-align: center;">
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#lostModal"><img src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/file-video-icon.png" style="    height: 29px;    

"></a>

                              <div id="lostModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">

                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>


                                        <iframe width="350" height="500" src="https://www.youtube.com/embed/?rel=0&showinfo=0&modestbranding=1">
                                        </iframe>


                                      </p>
                                    </div>
                                    <div class="modal-footer">
                                      <p style="color: #333;
    float: left;
    font-weight: 700;">Please pause/stop the video first & then close this window</p>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>

                                </div>
                              </div>

                          </div>
                          <div class="col-md-1" style="text-align: center;">
                            <?php //if($att['qTotalScore'] > 0) print_r($att['qTotalScore']); 
                            ?>

                          </div>
                          <div class="col-md-1" style="text-align: center;">
                            <?php //if($att['qTotalScore'] > 0) print_r($att['qAppScore']); 
                            ?>

                          </div>
                          <div class="col-md-1" style="text-align: center;">
                            <?php //if($att['qTotalScore'] > 0) print_r($att['qAchScore']); 
                            ?>

                          </div>

                        </div>
                      </div>
              </div>
            </div>
          </div>



        </div>



        <div class="bs-example" style="margin-top:4px">
          <div class="panel-group" style="margin-left:40px;width:300px">
            <div class="panel panel-default" style="margin-left: 35px; width: 210px; border-color:#723c10; border-radius: 0px;">
              <div class="panel-heading" style="background-color: #fe660b;
  background-image: linear-gradient(to right, #fe660b , #ffc403);">
                <h4 class="panel-title" style="text-align: center;">
                  <a href="" style="background-color: #fe660b;
  background-image: linear-gradient(to right, #fe660b , #ffc403); color: #fff;
                             font-weight: 600;"> Performance Summary</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">

                </div>
              </div>
            </div>
          </div>
        </div>



        <!--contest-->

        <div class="bs-example" style="margin-top:4px">
          <div class="panel-group" style="margin-left:40px;width:300px">
            <div class="panel panel-default" style="margin-left: 35px; width: 210px; border-color:#4d143a; border-radius: 0px;">
              <div class="panel-heading" style="background-color: #ec3be4;
  background-image: linear-gradient(to right, #ec3be4 , #fc1f99);">
                <h4 class="panel-title" style="text-align: center;">
                  <a href="#form" style="background-color: #f32ab6; color: #fff;
                             font-weight: 600;"> Contests</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-4" style="background-color: #181717; color:#fff; margin-top:-4.5rem;margin-bottom:1rem;  ">

        <h4 style="  font-size: 14px;">This Visit Score</h4>
        <div class="image" style="height:120px;width:120px;margin-left:13rem;margin-top:-20px">
          <div style="  align-items: center;margin-top:3px;margin-left:4px" class="c100 p big">
            <span>%</span>
            <div class="slice">
              <div class="bar"></div>
              <div class="fill"></div>
            </div>
          </div>
          <a href="javascript:void(0)" style="display: none;" data-toggle="modal" data-target="#download-audio"> Attachment ()
          </a>
          <div id="download-audio" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;
                  </button>
                  <h4 class="modal-title">Download
                  </h4>
                </div>
                <div class="modal-body">
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example" style="">
                    <thead>
                      <tr>
                        <th style="display:none; ">ShopID
                        </th>
                        <th style="display:none; ">Play
                        </th>
                        <th style="display:none; ">WaveID
                        </th>

                        <th style="display:none; ">Download
                        </th>
                      </tr>
                    </thead>
                    <tbody id="downloadData">
                        <tr id="audio_">
                          <td style="display:none; ">
                            abc
                          </td>
                          <td style="display:none; ">
                                        bdq
                        </td>
                          <td style="display:none; ">
                          kkk
                          </td>
                            <td> <audio controls>
                                <source src="http://startexms.com/admin/files/" />
                              </audio> </td>
                            <td>
                            <td>
                              <img src="http://startexms.com/admin/files/">
                            </td>

                          
                          <a href=""><i class="fa fa-download"></i>
                          </a>
                          </td>
                        </tr>


                    </tbody>
                  </table>

                </div>

                <div class="modal-footer">

                  <button type="button" class="btn btn-default" data-dismiss="modal">Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-offset-5" style="text-align: center;">
            <br>
          </div>
          <div class="col-md-3">
            <div id="ct2-chart-bar" style=" display: none; width: 30%; height: 30px; border:1px solid #ddd;"></div>
          </div>
        </div>


        <div class="row">


          <!-- section Info -->

          <div class="col-md-10 section-summary header-sec" style=" font-size:16px; background-color:#181717; color:#fff;width:92.5%;margin-left:15px;text-align:center;margin-top:-17px">
            <b>
              Section Summary
            </b>
          </div>


        </div>

          <div class="col-md-10 lost-list" style="  padding: 9px !important;  border: 0.5px solid #494949;">
            
          </div>
          <div class="col-md-2 lost-list" style="  padding: 9px !important;  border: 0.5px solid #494949;
">
      </div>
      <!--Add vedio here-->

      <div class="col-md-4" style="background-color: #181717;
    color: #fff;
    margin-top: -3.1%;
    margin-bottom: 1rem;
    border: 1px solid #302f2f;
    height: 432px !important;
    width: 30% !important;
    margin-left: 1%; ">

        <!--<iframe src="https://drive.google.com/file/d/1B62U5g8kbID1-sxbRYVXTnzaRZMyNXU5/preview" width="350" height="350" allow="autoplay"></iframe>-->
        <!--<img style="margin-top: 46%;margin-left: 37%;"src="http://latest.startexms.com/assets/images/video-camera.avif"  width="100" height="100">-->
  
      </div>


    </div><!--first row div-->

















  
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



  
          </div>
          <div class="col-md-1" style="text-align: center;">

          </div>
          <div class="col-md-1" style="text-align: center;">
          </div>
          <div class="col-md-1" style="text-align: center;">

          </div>
        </div>



      <div class="row">


        <!-- section Info -->
        <div class="col-md-8  section-summary">
        </div>
        <div class="col-md-2 section-summary" style="height: 44px;">

        </div>
        <div class="col-md-1 section-summary">
          Achieved
        </div>
        <div class="col-md-1 section-summary">
         %
        </div>
        <div class="col-md-0 section-summary" style="height: 44px; ">
         
            <a href="javascript:void(0)" title="video" data-section="" data-toggle="modal" data-target="#sec Modal" style="    margin-top: -5px;
"><img src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/file-video-icon.png" style="    height: 29px;  margin-top: -5px;
"></a>

            <div id="secModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <p>

                      
                    </p>
                  </div>
                  <div class="modal-footer">
                    <p style="color: #333;
    float: left;
    font-weight: 700;">Please pause/stop the video first & then close this window</p>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

        </div>

        <!-- end section Info -->
      </div>


      <div class="row">

        <!-- end section Info -->
        <div class="col-md-1 title-section" style="  background-color: #14cfea; color:#000000">
          Sr. No
        </div>

        <div class="col-md-6 title-section" style="height: 24px;  background-color: #14cfea; color:#000000">
        </div>
        <div class="col-md-2 title-section" style="  background-color: #14cfea; color:#000000">
          Responses
        </div>
        <div class="col-md-1 title-section" style="  background-color: #14cfea; color:#000000;">
          Total Score
        </div>
        <div class="col-md-1 title-section" title="Applicable Score" style="  background-color: #14cfea; color:#000000">
          Applicable
        </div>
        <div class="col-md-1 title-section" title="Achieved Score" style="  background-color: #14cfea; color:#000000">
          Achieved
        </div>

      </div>
      
        <div class="sep-ques" style="background-color: #000000; color:#fff">
          <div class="row lost-list">

            <div class="col-md-1">
      
            </div>

            <div class="col-md-6 " style="margin-left:-3%;font-size:19px !important;">
      
            </div>
            <div class="col-md-2" style="text-align: center;">
            </div>
            <div class="col-md-1" style="text-align: center;">

            </div>
            <div class="col-md-1" style="text-align: center;">
            </div>
            <div class="col-md-1" style="text-align: center;">
            </div>
          </div>
            <div class="row lost-list">

              <div class="col-md-1 shopper-comment">
                <i class="fa fa-book" title="guidelines"></i>
              </div>

              <div class="col-md-6 ">
                
              </div>
              <div class="col-md-2">

              </div>
              <div class="col-md-1">

              </div>
              <div class="col-md-1">

              </div>
              <div class="col-md-1">

              </div>

            </div>
          
          <div class="row lost-list">

            <div class="col-md-1 shopper-comment">
              <i class="far fa-comment" title="shopper comment"></i>
            </div>

            <div class="col-md-6 question-comment">
            </div>
            <!--this one generate yes no-->
            <div class="col-md-2" style="text-align: center;font-size:19px;margin-left: 2%; ">
                <span style="color: red;">456</span>
                <span style="color: #fff;">789</span>
            </div>
            <!--end yes no-->
            <div class="col-md-1" style="text-align: center;font-size:19px;">
            </div>
            <div class="col-md-1" style="text-align: center;font-size:19px;">

            </div>
            <div class="col-md-1" style="text-align: center;font-size:19px;">
                <span style="color: red;">44</span>
              
                <span style="color: #fff;"></span>

            </div>

          </div>



        </div>


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
        </div>
        <div class="col-md-1 title-section" title="Applicable Score" style="font-size: 19px !important;background-color: #000000; color:#fff">
        </div>
        <div class="col-md-1 title-section" title="Achieved Score" style="font-size: 19px !important;background-color: #000000; color:#fff">
        </div>

      </div>

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

              <form action="" method="POST" id="commentform">

                <input type="hidden" class="form-control" placeholder="shopName" name="shopName" id="shopName" value="44">

                <input type="hidden" class="form-control" placeholder="waveId" name="waveId" id="waveId" value="0">
                <input type="hidden" class="form-control" placeholder="Name" name="commentBy" id="name" value="99">
                
                <input type="hidden" class="form-control" name="commentTo" id="email" value=" Startex Administrator">
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
             
                  <div class="panel panel-default" style="background-color: #000000; color:#fff">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user"> <span style="color:#E1AD01 !important;">From:</span>
                          <span style="margin-left: 1%;color:#00A1C9 !important;">To:</span>

                        </div>
                        <div class="comment-user"></div>


                       
                        </p>
                      </div>
                      <time class="comment-date" style="color:#c0c0c0 !important;font-size:10px;float: right;" datetime="16-12-2014 01:05">
                        <i class="fa fa-clock-o"></i>
                        
                      <p class="text-right" style="display: none;"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                    </div>

                  </div>
            </div>
          </article>

        </section>
      </div>
    </div>

  </div>

  <div style="display: none;">
  </div>

  <br><br>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>