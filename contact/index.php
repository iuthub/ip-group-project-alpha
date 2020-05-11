<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <!--Google fonts-->
    <!--Ribeye Marrow-->
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <!--Pinyon Script-->
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <!--Piedra-->
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <li class="nav-item"><a href="/IP_project/table_order/reservation.php" class="nav-link">Reservation</a></li>
              <li class="nav-item"><a href="/IP_project/Menu/Menu.php" class="nav-link">Menu</a></li>
              <li class="nav-item"><a href="/IP_project/Aboutus/Aboutus.php" class="nav-link">About Us</a></li>
              <li class="nav-item active"><a href="/IP_project/contact/index.php" class="nav-link">Contact</a></li>
              <i class="fa fa-facebook"></i>
              <i class="fa fa-twitter"> </i>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="contact">
      <div class="text-content">
        <h1>Get in Touch</h1>
        <p>If you need help just write</p>
      </div>
      <div class="contact-form">
        <div class="card">
          <span class="card-title">Gen in Touch</span>
          <div class="card-content">
            <form  action="includes/contact.inc.php" method="POST">
              <div>
                <input type="text" name="name" value="">
                <label>Name</label>
              </div>
              <div>
                <input type="text" name="email" value="">
                <label>E-mail</label>
              </div>
              <div>
                <input type="text" name="phone" value="">
                <label>Phone Number</label>
              </div>
              <div>
                <textarea type="text" name="message"></textarea>
                <label>Message</label>
              </div>
              <button type="submit" name="button" class="btn"> Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
