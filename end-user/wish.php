<?php include '../assets/db/functions.php'; ?>
<?php
$id=@$_GET['id'];
$name=@$_GET['name'];
$price=@$_GET['price'];
if($id!= ""&& $name!= ""&&$price!= ""){
$sql = "insert into wish (name,price)
          values('$name','$price') ";
$rs = dbQuery($sql);
}
?>
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
        <link href="../assets/css/demo/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
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
									<a href="logout.php">
                                       <i class="fa-solid fa-right-from-bracket"></i>  
                                        <span>Logout</span>
									</a>
								</div>
								<div>
									<a href="cart.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
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
                    <h3 class="title">Your Wishlist</h3>
				</div>
                <div class="col-xs-12">
				<div class="box-content">
					<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-12">
                        <table id="wishList" class="table table-striped table-bordered display dataTable" style="width: 80%;" role="grid" aria-describedby="example_info">
						<thead>
                            <th class="fs-6" rowspan="1" colspan="1">#</th>
                            <th class="fs-6" rowspan="1" colspan="1">Product Name</th>
                            <th class="fs-6" rowspan="1" colspan="1">Product Price</th>
						    <th class="fs-6" rowspan="1" colspan="1">Operations </th>
                        </thead>
						<tbody id="ShowWish">
			           </tbody>        
					</table>
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
        <script src="../assets/js/jquery-3.6.4.min.js"></script>
        <script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/sweetalert.js"></script>
		<script src="../assets/js/main.js"></script>
        <script>
            $(document).ready(function(){
               $("#wishList").DataTable(); 
               show();
               function show (){
                $.ajax({
                   type: "ajax",
                   dataType: "json",
                   async: false,
                   url: "get_wish.php",
                   success: function (data) {
                   var i;
                   var html="";
                    for(i=0;i<data.length;i++){
                         html +='<tr><td class="text-center">'+data[i].id+'</td>'+
						 '<td class="text-center">'+data[i].name+'</td>'+
						 '<td class="text-center">'+data[i].price+'</td>'+
						 '<td class="text-center">'+'<button type="button" class="btn btn-success remove" data-id="'+data[i].id+'">Remove</button>'+'<button type="button" class="btn btn-primary cart" data-id="'+data[i].id+'">Add to Cart</button>'+'</td></tr>';
                      }
                    $("#ShowWish").html(html);
                    console.log("done");
                   }        
                });
               }
			    $("#ShowWish").on("click", ".remove", function () {
      var id = $(this).data("id");
      $('[name="id"').val(id);
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          var id = $("#id").val();
          $.ajax({
            url: "delete_record.php?id="+id,
            type: "POST",
            dataType: "json",
            success: function (data) {
              console.log(data);
            },
          });
          Swal.fire({
            icon: "success",
            title: "Your work has been Deleted",
            showConfirmButton: false,
            timer: 1500,
          }).then(() => {
            $('[name="id"').val("");
            location.reload();
          });
        }
      });
    });
            });
        </script>

	</body>
</html>
