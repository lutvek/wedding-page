<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link rel="icon" href="img/miniatyr.png">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <form method="post" action="mobile-menu.php">
            <input type="hidden" name="prev_page" value="<?php echo $page ?>">
            <input id="TL-hamburger" type="image" src="img/hamburgare.png" alt="Meny" />
          </form>
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a id="TL-dropdown-button" href="hem.php">

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <?php

            // This is your menu
            $items = array("index", "meny", "schema", "plats", "boende", "OSA");
            $page_names = array("Hem", "Meny", "Schema", "Plats", "Boende", "OSA");
            $c = 0;
            foreach ($items as $item)
            {
                if (isset($page) && $page == $item)
                {
                    echo '<li class="nav-item active ">';
                    echo '<a class="nav-link" href="' . $item . '.php" class="active"> ' . $page_names[$c++]. '</a>';
                    echo '</li>';
                }
                else
                {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="' . $item . '.php" class="active"> ' . $page_names[$c++]. '</a>';
                    echo '</li>';
                }
            } ?>
            <!--
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Hem <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="meny.php">Meny</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Schema</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Boende</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">OSA</a>
            </li>
          -->
          </ul>
        </div><!-- navbar-collapse -->
      </div><!-- container -->
    </nav>
