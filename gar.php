<?php 
//echo '<pre>';
//print_r($cinfo); 
error_reporting(0);
// $shopID = $this->uri->segment(3);
// echo($shopID);
$informationtwo = $this->report_model->get_headertwo($shopID);
// var_dump($informationtwo);
$branchTeritory = $informationtwo->territoryID;
// var_dump($branchTeritory);
$shopanalysis = $this->report_model->get_shopanalysis($branchTeritory);
// var_dump($shopanalysis);
$ytdWave = 0;

foreach ($shopanalysis as $key =>  $shop) :
  $totalScore = $shop['totalScore'];
  $applicableScore = $shop['applicableScore'];
  $achievedScore = $shop['achievedScore'];

  $percen = ($achievedScore / $applicableScore) * 100;

  $ytdWave += $percen;

endforeach;
// var_dump($totalScore);
// var_dump($applicableScore);
// var_dump($achievedScore);

?>

<?php $mySqlformat = "SELECT * from formats where ID = " . $_SESSION['f_id'];
$queryformat = $this->db->query($mySqlformat);
// var_dump($queryformat);
$resultformat = $queryformat->row();
// var_dump($resultformat);
$shopMeida = array();
$sectionMeida = array();
$lostMedia = array();

foreach ($media as $key => $value) {

  if ($value['audio_for'] == 'shop') {

    $shopMeida[] = $value['audio_encrypt_name'];
  } else if ($value['audio_for'] == 'section') {

    $id = $value['subid'];
    $sectionMeida[$id] = $value['audio_encrypt_name'];
  } else if ($value['audio_for'] == 'question') {

    $id = $value['subid'];
    $lostMedia[$id] = $value['audio_encrypt_name'];
  }
}
// var_dump($lostMedia);
?>
  <script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/circle.css">
