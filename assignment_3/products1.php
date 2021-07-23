<?php
require "./includes/common.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle Store/Products</title>
    <style>
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
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <?php
    require "./includes/header.php";
    // require "./includes/check_if_added.php";
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="./images/5.jpg" alt="Cannon EOS">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs. 36000.00</p>
                        <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="./images/2.jpg" alt="Sony DSLR 1">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs. 40000.00</p>
                        <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="./images/3.jpg" alt="Sony DSLR 2">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs. 50000.00</p>
                        <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="./images/4.jpg" alt="Olympus DSLR">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs. 80000.00</p>
                        <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/9.jpg" alt="Titan Model #301">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs. 13000.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/10.jpg" alt="Titan Model #201">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price:Rs. 3000.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/11.jpg" alt="HMT Milan">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs. 8000.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/11.jpg" alt="Faber Luba #111">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs. 18000.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/8.jpg" alt="John Zok">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:Rs. 1500.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/6.jpg" alt="Luis Phil">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs. 1000.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/13.jpg" alt="John Zok">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:Rs. 1500.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <img src="./images/14.jpg" alt="Jhalsani">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:Rs. 1300.00</p>
                            <?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "./includes/footer.php"
    ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>