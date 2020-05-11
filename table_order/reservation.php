
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<!--Google fonts-->
    <!--Ribeye Marrow-->
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <!--Pinyon Script-->
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <!--Piedra-->
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	</head>
	<body>

		<header id="header">
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	      <div class="container">
	        <a class="navbar-brand" href="index.html"> <img src="img/ALPHA.COM.png" alt=""> </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="oi oi-menu"></span> Menu
	        </button>

	        <div class="collapse navbar-collapse" id="ftco-nav">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item"><a href="/IP_project/home_page/home.php" class="nav-link">Home</a></li>
	            <li class="nav-item active"><a href="/IP_project/table_order/reservation.php" class="nav-link">Reservation</a></li>
	            <li class="nav-item"><a href="/IP_project/Menu/Menu.php" class="nav-link">Menu</a></li>
	            <li><a class="nav-link" href="/IP_project/Order/Order.php">Order</a></li>
	            <li class="nav-item"><a href="/IP_project/Aboutus/Aboutus.php" class="nav-link">About Us</a></li>
	            <li class="nav-item"><a href="/IP_project/contact/index.php" class="nav-link">Contact</a></li>
							<i class="fa fa-facebook"></i>
							<i class="fa fa-twitter"> </i>
	          </ul>
	        </div>
	      </div>
	    </nav>
		</header>

		<section class="home-slider owl-carousel">
			<div class="slider-item" style="background-image: url('img/bg_1.jpg');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text align-items-center justify-content-center text-center">
						<div class="col-md-10 col-sm-12 ftco-animate">
							<h1 class="mb-3">Book a table for yourself at a time convenient for you</h1>
						</div>
					</div>
				</div>

		<div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <form action="includes/order.inc.php" method="POST" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third">
										<input type="text" name="name" class="form-control" placeholder="Name" required>
									</div>

                  <div class="textfield-phone one-third">
										<input type="number" name="phone" class="form-control" placeholder="Phone" required>
									</div>

                  <div class="book-date one-third">
										<input type="date" name="date" id="book_date" class="form-control" placeholder="M/D/YYYY" required>
									</div>

                  <div class="book-time one-third">
                    <input type="time" id="book_time" name="time" class="form-control" placeholder="Time" required>
                  </div>

									<div class="book-time one-third">
                    <input type="number" name="visitors" class="form-control" placeholder="Visitors" required>
                  </div>
								</div>
								<button type="submit" name="submit" class="btn btn-primary btn-outline-white px-5 py-3">Book Table</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	</section


	</body>
</html>
