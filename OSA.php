<?php $page="OSA"; ?>
<?php include 'header.php';?>
<!--<img id="TL-mobile-side" class="visible-xs-block" src="img/mobil.jpg">-->
<img id="TL-tablet-side" class="visible-sm-block" src="img/tablet.jpg">
<div class="container">
  <div class="row">
    <div class="col-md-6 hidden-sm hidden-xs">
      <img id="TL-main-img" src="img/tanlud.jpg" alt="Tanja och Ludvig">
    </div><!-- col -->
    <div class="col-xs-2">
    </div>
    <div id="TL-menu-text" class="col-md-6 col-xs-12">
      <div id="TL-OSA">
        <div id="TL-OSA-text">
          Kuvertavgift <br>400kr för vuxna <br>250kr för barn* under 14 år<br><br>Swisha till
          Ludvig Åberg <br>0730310337 när ni bekräftat att ni kommer.
          <br><br>
          <?php
          // define variables and set to empty values
          $nameErr = $emailErr = "";
          $name = $email = $comment = "";
          // kost som radio
          // övernattning radio


          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "* Fyll i ditt fullständiga namn";
            } else {
              $name = test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-öA-Ö ]*$/",$name)) {
                $nameErr = "* Bara bokstäver och mellanslag tillåtna!";
              }
            }

            if (empty($_POST["email"])) {
              $emailErr = "* Fyll i din e-post";
            } else {
              $email = test_input($_POST["email"]);
            }

            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          }
          $welcome = 0;
          if($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "") {
            $welcome = 1;
            // write to file
            $file = 'guest_list.txt';
            // send verification mail
            $mail_sent = mail('ludvig.aaberg@gmail.com', 'tanjaochludde.se test', 'hallo!', "From: test@example.se \r\n");
            $person = $_POST['name'] . " e-mail: " . $_POST['email'] . " kost: ". $_POST['kost'] . " övernattning: " . $_POST['övernattning'] . " comment: " . $_POST['comment'] . " " . $mail_sent . "\n";

            // using the FILE_APPEND flag to append the content to the end of the file
            // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
            file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

          }
          ?>

          <?php if($welcome == 1) { ?>
            <?php header('Location: welcome.php'); ?>
            Välkommen <?php echo explode(' ', $_POST['name'])[0]; ?>

          <?php } else if($welcome == 0) {?>
            <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              Fullständigt namn: <br><input type="text" name="name" value="<?php echo (!empty($_POST['name'])) ? $_POST['name'] : ""; ?>">
              <span class="error"><?php echo $nameErr;?></span>
              <br>
              <div class="TL-form-spacing"></div>
              E-post:<br>
              <input type="text" name="email" value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : ""; ?>">
              <span class="error"><?php echo $emailErr;?></span>
              <br>
              <div class="TL-form-spacing"></div>
              Kost:<br>
              <input class="TL-radio" type="radio" name="kost" value="kött" checked>  Kött och Fisk<br>
              <input class="TL-radio" type="radio" name="kost" value="vegetatian">  Vegetarisk<br>
              <input class="TL-radio" type="radio" name="kost" value="vegan">  Vegansk<br>

              <div class="TL-form-spacing"></div>
              Övernattning (+ 130kr):<br>
              <input class="TL-radio" type="radio" name="övernattning" value="ja">  Ja<br>
              <input class="TL-radio" type="radio" name="övernattning" value="nej" checked>  Nej<br>
              <div class="TL-form-spacing"></div>
              Allergier eller övrig info: <br> <textarea name="comment" value="<?php echo (!empty($_POST['comment'])) ? $_POST['comment'] : ""; ?>"></textarea>
              <br>
              <!--<input type="submit" name="submit" value="Skicka in!">-->

              <button
                type="submit"
                name="submit-btn"
                class="g-recaptcha"
                data-sitekey="6LcyiUAUAAAAAInZ5bl5AcHC0dYVnA3fPVnV6ngf"
                data-callback="submitFn">
                Skicka in!
              </button>
            </form>
            *Barn kommer att sitta vid separata barnbord i rummet intill den stora salen.
          <?php } ?>
        </div>
      </div>
    </div><!-- TL-menu-text -->
  </div><!-- row -->
</div><!-- container -->

<?php
// define variables and set to empty values
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php include 'footer.php';?>

<script>
function submitFn() {
  document.getElementById('myForm').submit();
}
</script>
