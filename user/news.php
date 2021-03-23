<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-success" href="#page-top">SisPa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="intro.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user.php">Profile</a>
            </li>
            <li class="nav-item">
              <a style="color: #49C74F;" class="nav-link js-scroll-trigger" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="kurs.php">Kurs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Crawling CURL -->
    <?php

    function resourceWeb($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_URL, $url);
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
      }

      $sumber = resourceWeb('http://www.liputan6.com/tag/gaji-pns');
      $split  = explode('<aside class="articles--iridescent-list--text-item__details">', $sumber);
      $gambar = explode('<figure class="articles--iridescent-list--text-item__figure-thumbnail">', $sumber);

      $splitLagi  = explode('</aside>', $split[1]);
      $splitLagi2 = explode('</aside>', $split[2]);
      $splitLagi3 = explode('</aside>', $split[3]);
      $splitLagi4 = explode('</aside>', $split[4]);

      $gambarlagi  = explode('</figure>', $gambar[1]);
      $gambarlagi2 = explode('</figure>', $gambar[2]);
      $gambarlagi3 = explode('</figure>', $gambar[3]);
      $gambarlagi4 = explode('</figure>', $gambar[4]);


      ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">SisPa News</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Economic</a>
            <a href="#" class="list-group-item">Business</a>
            <a href="#" class="list-group-item">Global</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <!-- Banner -->
        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
             <!-- dB news  -->

            <!--Profile PHP-->
             <?php 
              include "../admin/config/koneksi.php";
              $query = $connect->query("SELECT * FROM tubes WHERE idpost ='1' ")or die(mysqli_error($connect));
              while($data = $query->fetch_array()){
             ?>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/news1.jpg" alt="First slide">
                 <div class="carousel-caption">
                   <p class="card-text "><?php echo $data['date']; ?></p>
                   <a href="<?php echo $data['link']; ?>"><h3 class="card-text text-warning"><?php echo $data['title']; ?></h3></a>
                   <p class="card-text"><?php echo $data['entry']; ?></p>
                   <a href="<?php echo $data['link']; ?>"></a>
                   <?php } ?>
                </div>
              </div>
                <!--Profile PHP-->
             <?php 
              include "../admin/config/koneksi.php";
              $query = $connect->query("SELECT * FROM tubes WHERE idpost ='3' ")or die(mysqli_error($connect));
              while($data = $query->fetch_array()){
             ?>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/news2.jpg" alt="Second slide">
                <div class="carousel-caption">
                   <p class="card-text "><?php echo $data['date']; ?></p>
                   <a href="<?php echo $data['link']; ?>"><h3 class="card-text text-warning"><?php echo $data['title']; ?></h3></a>
                   <p class="card-text"><?php echo $data['entry']; ?></p>
                   <a href="<?php echo $data['link']; ?>"></a>
                   <?php } ?>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/banner2.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- content -->
          <div class="row">

            <div class="col-lg-6 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/news1.jpg" alt=""></a>
                <div class="card-body">
                  <p class="card-text"><?php echo $splitLagi[0] ?></p>
                  <p class="text-muted">Sumber : www.liputan6.com</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/news2.jpg" alt=""></a>
                <div class="card-body">
                  <p class="card-text"><?php echo $splitLagi2[0] ?></p>
                  <p class="text-muted">Sumber : www.liputan6.com</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/news3.jpg" alt=""></a>
                <div class="card-body">
                  <p class="card-text"><?php echo $splitLagi3[0] ?></p>
                  <p class="text-muted">Sumber : www.liputan6.com</p>
                </div>
              </div>
            </div>

           <div class="col-lg-6 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/news4.jpg" alt=""></a>
                <div class="card-body">
                  <p class="card-text"><?php echo $splitLagi4[0] ?></p>
                  <p class="text-muted">Sumber : www.liputan6.com</p>
                </div>
              </div>
            </div>
  
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">SisPa.info 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>