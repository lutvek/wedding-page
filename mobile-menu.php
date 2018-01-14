
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <?php if(isset($_POST['prev_page'])) {
      $page = $_POST['prev_page'];
    } else {
      $page = "index";
    }
    ?>

    <div id="TL-X-div">
    <a href="<?php echo $page; ?>.php">
      <img id="TL-mobile-close" src="img/close.png">
    </a>
    </div>

    <?php


    $pages = array('Hem', 'Meny', 'Schema', 'Plats', 'Boende', 'OSA');
    $links = array('index', 'meny', 'schema', 'plats', 'boende', 'OSA');
    $c = 0;

    foreach($pages as $p) {
      if($c == 0) {
        echo '<div id="TL-mobile-menu-item-first" class="TL-mobile-menu-item">';
      } else {
        echo  '<div class="TL-mobile-menu-item">';
      }
      if($page == $links[$c]) {
        echo '<a class="TL-mobile-link active" href="'. $links[$c++] . '.php">' . $p . '</a>';
      } else {
        echo '<a class="TL-mobile-link" href="'. $links[$c++] . '.php">' . $p . '</a>';
      }
      echo '</div>';
    }
    ?>
  </body>

<?php include 'footer.php' ?>
