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
		<link type="text/css" rel="stylesheet" href="../assets/css/demo/custom.css"/>
    </head>
	<body>
		<header>
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
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
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div>
									<a href="wish.php">
                                          <i class="fa-solid fa-heart"></i>
                                          <span>Your Wishlist</span>
									</a>
								</div>
								<div>
									<a href="logout.php">
                                        <i class="fa-solid fa-right-from-bracket"></i>  
                                        <span>Logout</span>
									</a>
									<!--<div class="cart-dropdown">
										
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
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
								  $id=@$_GET['id'];
                                  $name=@$_GET['name'];
                                  $price=@$_GET['price'];
								  $sql = "SELECT * FROM orders o join product p  on o.product_id = p.id";
								  $result=dbQuery($sql);
								  $row=dbFetchAssoc($result);
								?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img width="150px" height="150px" src="../assets/img/electro.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?=$name?></h6>
                                            <h5>$<?=$price?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2"><span class="fa fa-angle-left dec qtybtn"></span>
                                                <input type="text" value="1">
                                            <span class="fa fa-angle-right inc qtybtn"></span></div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 30.00</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>	
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="index.php">Continue Shopping</a>
                            </div>
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
