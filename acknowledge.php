
<?php $page="schema"; ?>
<?php include 'header.php';?>
<img id="TL-mobile-side" class="visible-xs-block" src="img/mobil.jpg">
<img id="TL-tablet-side" class="visible-sm-block" src="img/tablet.jpg">
<div class="container">
  <div class="row">
    <div class="col-md-6 hidden-sm hidden-xs">
      <img id="TL-main-img" src="img/tanlud.jpg" alt="Tanja och Ludvig">
    </div><!-- col -->
    <div class="col-xs-2">
    </div>
    <div id="TL-menu-text" class="col-md-6 col-xs-12">
      <h1> Thanks </h1>
      <h1> Oops </h1>
    </div><!-- TL-menu-text -->
  </div><!-- row -->
</div><!-- container -->

<?php
if (isset($_POST['send'])) {
    //$mailer = new PHPmailer();
    $to = 'ludvig.aaberg@gmail.com';
    $subject = 'testing';
    $message = "hey\r\n\r\n";
    $headers = "From: info@tanjaochludde.se\r\n";
    echo $headers
    $success = mail($to, $subject, $message, $headers);
    if(isset($success)) {
      echo 'success is set';
      if($success) {
        echo 'mail sent!';
      }
    }
}
?>

<?php include 'footer.php';?>
