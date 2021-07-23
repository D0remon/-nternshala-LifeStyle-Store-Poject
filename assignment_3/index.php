<?php
if (isset($_SESSION['email'])) {
  header('location: products.php');
}
require './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lifestyle Store/Home</title>
  <style>
    .navst {
      margin-bottom: 0px !important;
      border-radius: 0px !important;
    }

    #banner_image {
      padding-top: 75px;
      padding-bottom: 50px;
      text-align: center;
      color: #f8f8f8;
      background: url(./images/intro-bg_1.jpg) no-repeat center center;
      background-size: cover;
      margin-top: 0px;
      /* height: 100vh; */
    }

    #banner_content {
      position: relative;
      padding-top: 6%;
      padding-bottom: 6%;
      margin-top: 12%;
      margin-bottom: 12%;
      background-color: rgba(0, 0, 0, 0.7);
      max-width: 660px;
      margin-left: auto;
      margin-right: auto;
    }

    footer {
      padding: 15px;
      border-top: 1px solid #e5e5e5;
      background-color: #101010;
      color: #9d9d9d;
      bottom: 0;
      width: 100%;
      text-align: right;
      font-size: 15px;
    }

    h1 {
      font-size: 40px !important;
    }

    p {
      margin-bottom: 25px !important;
      font-size: 17px !important;
    }

    .imgmg {
      margin-top: 50px !important;
    }

    .text {
      text-align: center;
    }

    .textp {
      text-align: center;
      font-size: 15px !important;
    }

    .imgc {
      margin-left: 510px;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
  <?php
  include './includes/header.php';
  ?>
  <div id="banner_image">
    <div class="container">
      <div id="banner_content">
        <h1>We sell lifestyle.</h1>
        <p>Flat 40% OFF on premium brands</p>
        <a class="btn btn-danger btn-lg active" href="./products.php">Shop Now</a>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row imgc">
      <div class="col-sm-4 ">
        <div class="thumbnail imgmg img-responsive">
          <img src="./images/1.jpg" alt="Camera">
          <div class="caption">
            <h2 class="text">Cameras</h2>
            <p class="textp">Choose among the best available in the world.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="thumbnail imgmg img-responsive">
          <img src="./images/7.jpg" class="img-responsive" alt="Camera">
          <div class="caption">
            <h2 class="text">Watches</h2>
            <p class="textp">Original watches from the best brands.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail imgmg img-responsive">
          <img src="./images/15.jpg" class="img-responsive" alt="Camera">
          <div class="caption">
            <h2 class="text">Shirts</h2>
            <p class="textp"> Our exquisite collection of shirts.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include './includes/footer.php';
  ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>