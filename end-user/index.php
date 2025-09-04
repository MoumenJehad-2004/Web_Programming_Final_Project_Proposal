<?php include '../assets/db/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Electro - Ecommerce WebSite</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/slick-theme.css"/>
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/nouislider.min.css"/>
        <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/styles.css"/>
    </head>
	<body>
		<header>
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="../assets/img/logo2.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<div class="col-md-3 ">
							<div class="header-ctn">
								<div>
									<a href="wish.php">
                                          <i class="fa-solid fa-heart"></i>
                                          <span>Your Wishlist</span>
									</a>
								</div>
								<div>
									<a href="cart.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
									</a>
									<!--<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="../assets/img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="../assets/img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="section">
			<div class="container">
				<div class="row">
                    <h3 class="title">Our Categories</h3>
                    <?php
                    $sql = "SELECT * FROM `category` where status = 1";
                    $rs = dbQuery($sql);
                    while($row = dbFetchArray($rs)){
                    ?>
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../assets/img/electronic.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3><?php echo $row[1]; ?><br>Collection</h3>
								<a href="custom-product.php?id=<?=$row[0]?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Our Products</h3>
						</div>
					</div>
                    
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                        <?php
                                        $sql = "SELECT * FROM product p join category c on p.category_id = c.id";
                                        $rs = dbQuery($sql);
                                        while($row = dbFetchArray($rs)){
                                        ?>
										<div class="product">
											<div class="product-img">
												<img src="../assets/img/electro.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?= $row[9]?></p>
												<h3 class="product-name"><?= $row[1]?></h3>
												<h4 class="product-price">$<?= $row[3]?> </h4>
												<div class="product-btns">
                                                    <?php 
                                                    if(!isset($_SESSION['id'])){                                        
                                                    ?>
													<a href="login.php" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
												    <?php }else {?>
                                                    <a href="wish.php?id=<?=$row[0]?>&name=<?= $row[1]?> &price=<?= $row[3]?>" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                                   <?php }?>
                                                </div>
											</div>
											<div class="add-to-cart">
												<?php if(!isset($_SESSION['id'])){?>
												<a href="login.php" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a>
											    <?php }else{?>
												<a href="cart.php?id=<?=$row[0]?>&name=<?= $row[1]?> &price=<?= $row[3]?>" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a>
												<?php }?>	
											</div>
										</div>
                                        <?php }?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
                   
				</div>
			</div>
		</div>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/slick.min.js"></script>
		<script src="../assets/js/nouislider.min.js"></script>
		<script src="../assets/js/jquery.zoom.min.js"></script>
		<script src="../assets/js/main.js"></script>

	</body>
</html>
