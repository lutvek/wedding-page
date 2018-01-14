<?php $page = 'plats'; ?>
<?php include 'header.php';?>

<div class="container">

  <div class="row">
    <div class="col-md-6">
      <img id="svedjan_img" src="img/svedjan.png">
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-xs-12 col-md-10">
          <div class="TL-place-text">
            <div class="TL-bold">
                Svedjans Lägergård i Tavelsjö
            </div>
            <br>
            <div class="TL-bold">
              Adress
            </div>
            Svedjan 41, Östra Tavelsjö<br>
            Busshållplats Västerbacka, ca 700 m bort
            <br>
            <br>
            <div class="TL-bold">
              Vägbeskrivning
            </div>
            - Kör Hissjövägen (363) från Umeå mot Vindeln till Kvarnfors, ca 19 km<br>
            - Sväng höger vid skylten Ö Tavelsjö 7<br>
            - Kör ca 6 km till skylten Svedjan 1 och sväng vänster.<br>
            - Efter ca 1 km är du framme
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>
  </div>
  <h3>Karta</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 64.0232411, lng: 20.0739913};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2bYa1m3Kh39E2kn9upNGsUjLrUchFeII&callback=initMap">
    </script>
</div>

<?php include 'footer.php';?>
