<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMADS</title>
    <link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/libraries/xzoom/dist/xzoom.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="assets/images/logo.png" alt="Logo NOMADS">
            </a>
            <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navb"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">Paket Travel</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbardrop"
                data-toggle="dropdown"
              >
                Services
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">Testimonial</a>
            </li>
          </ul>

          <!-- Mobile button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0">
              Masuk
            </button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              Masuk
            </button>

          </form>
        </div>
      </nav>
    </div>

    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mb-1">
                            <h1>Nusa Peninda</h1>
                            <p>
                                Republic of Indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="assets/images/details-1.jpg" class="xzoom" id="xzoom-default" xoriginal="assets/images/details-1.jpg">
                                </div>  
                                <div class="xzoom-thumbs">
                                    <a href="assets/images/details-1.jpg">
                                        <img src="assets/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="assets/images/details-1.jpg">
                                    </a>
                                    <a href="assets/images/details-1.jpg">
                                        <img src="assets/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="assets/images/details-1.jpg">
                                    </a>
                                    <a href="assets/images/details-1.jpg">
                                        <img src="assets/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="assets/images/details-1.jpg">
                                    </a>
                                    <a href="assets/images/details-1.jpg">
                                        <img src="assets/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="assets/images/details-1.jpg">
                                    </a>
                                    <a href="assets/images/details-1.jpg">
                                        <img src="assets/images/details-1.jpg" class="xzoom-gallery" width="128" xpreview="assets/images/details-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>About Destination</h2>
                            <p>Nusa Peninda is an island southeast of Indonesia's Bali and a district of Klungkung Regency that includes the neighouring small island of Nusa Lembongan. The  Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby Island of Bali.</p>
                            <p>Bali and a district of Klungkung Regency that includes the neighouring small island of Nusa Lembongan. The  Badung Strait separates the island and Bali.</p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="assets/images/ic_event.png" alt="Logo Event" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="assets/images/ic_bahasa.png" alt="" class="features-image">
                                    <div class="description">
                                      <h3>Language</h3>
                                      <p>Bahasa Indonesia</p>
                                    </div>
                                  </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="assets/images/ic_foods.png" alt="Logo Foods" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="assets/images/members.png" alt="" class="member-image">
                            </div>
                            <hr>
                            <h2>Trip Infomartion</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Depatures</th>
                                    <th width="50%" class="text-right">22 April, 2020</th>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <th width="50%" class="text-right">5D 4N</th>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <th width="50%" class="text-right">Private Trip</th>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <th width="50%" class="text-right">$90,00 / Person</th>
                                </tr>
                            </table>
                        </div>
                        <div class="join-cointainer">
                            <a href="checkout.html" class="btn btn-block btn-join-now py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justiify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-4">
          <div class="col-auto text-gray-500 font-weight-light">
            2019 Copyright Nomads • All rights reserved • Made in Bandung
          </div>
        </div>
      </div>
    </footer>

    <script src="assets/libraries/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="assets/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="assets/libraries/retina/retina.min.js"></script>
    <script src="assets/libraries/xzoom/dist/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
</body>
</html>





















