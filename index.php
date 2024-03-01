<?php include "header.php"; ?> 

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left">
        <h6 class="text-white">SISTEM INFORMASI TRIP PLANNER WISATA</h6>
        <h1 class="text-white">WILAYAH KOTA DAN KABUPATEN MALANG</h1>
        <p class="text-white">
          Sistem informasi ini merupakan website tempat wisata di wilayah Malang. Website ini memuat informasi dan lokasi dari tempat wisata di Malang.
        </p>
        <a href="#peta_wisata" class="primary-btn text-uppercase">Lihat Detail</a>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->


<main id="main">

<!-- Start about-info Area -->
<section class="price-area section-gap">

<section id="peta_wisata" class="about-info-area section-gap">
  <div class="container">

    <div class="title text-center">
      <h1 class="mb-10">Peta Lokasi Wisata</h1>
      <br>
    </div>

    <div class="row align-items-center">

      <div id="map" style="width:100%;height:480px;"></div>
      <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap "></script>

      <script type="text/javascript">
        function initialize() {

          var mapOptions = {
            zoom: 10.2,
            center: new google.maps.LatLng(-7.9784695,112.561742),
            disableDefaultUI: false
          };

          var mapElement = document.getElementById('map');

          var map = new google.maps.Map(mapElement, mapOptions);

          setMarkers(map, officeLocations);

        }

        var officeLocations = [
          <?php
          $data = file_get_contents('http://localhost/SIG-WISATA/ambildata.php');
          $no = 1;
          if (json_decode($data, true)) {
            $obj = json_decode($data);
            foreach ($obj->results as $item) {
          ?>[<?php echo $item->id_wisata ?>, '<?php echo $item->nama_wisata ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
          <?php
            }
          }
          ?>
        ];

        function setMarkers(map, locations) {
          var globalPin = 'img/marker.png';

          for (var i = 0; i < locations.length; i++) {

            var office = locations[i];
            var myLatLng = new google.maps.LatLng(office[4], office[3]);
            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });

            var contentString =
              '<div id="content">' +
              '<div id="siteNotice">' +
              '</div>' +
              '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
              '<div id="bodyContent">' +
              '<a href=detail.php?id_wisata=' + office[0] + '>Info Detail</a>' +
              '</div>' +
              '</div>';

            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: office[1],
              icon: 'img/markermap.png'
            });

            google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
          }
        }

        function getInfoCallback(map, content) {
          var infowindow = new google.maps.InfoWindow({
            content: content
          });
          return function() {
            infowindow.setContent(content);
            infowindow.open(map, this);
          };
        }

        initialize();
      </script>

    </div>


  </div>
</section>
<!-- End about-info Area -->


<!-- Start price Area -->

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
      <div class="title text-center">
        <h1 class="mb-10">Jangkauan Peta</h1>
        <p>Website Wisata di Malang ini memuat informasi dan lokasi dari Wisata Alam dan Wisata Kuliner di Malang. Pemetaan diambil dari data lokasi Google Maps dan data dari website masing-masing tempat wisata. Website ini juga memuat sejumlah informasi mengenai rekomendasi trip planner wisata.
        </p>
      </div>
    </div>
  </div>

  <!-- End other-issue Area -->

</div>
</div> <!-- ======= Counts Section ======= -->
<section id="counts">
  <div class="container">
    <div class="title text-center">
      <h1 class="mb-10">Jumlah Tempat Wisata</h1>
      <br>
    </div>
    <div class="row d-flex justify-content-center">


      <?php
      include_once "countsma.php";
      $obj = json_decode($data);
      $sman = "";
      foreach ($obj->results as $item) {
        $sman .= $item->sma;
      }
      ?>

      <div class="text-center">
        <h1><span data-toggle="counter-up"><?php echo $sman; ?></span></h1>
        <br>
      </div>
      <?php
      include_once "countsmk.php";
      $obj2 = json_decode($data);
      $smkn = "";
      foreach ($obj2->results as $item2) {
        $smkn .= $item2->smk;
      }
      ?>


    </div>

  </div>
</section><!-- End Counts Section -->
</div>
</section>
<!-- End testimonial Area -->

  <?php include "footer.php"; ?>