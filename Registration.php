<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <!--Google fonts-->
      <!--Piedra-->
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
      <!--Ribeye Marrow-->
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <!--Css -->
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    
    <div>
    </div>
    <div id="container">

        <header class="header">
           <a href=""><img class="logo" src="./styles/images/ALPHA.COM.png" alt=""></a> 
            <ul class="navbar">
                <li><a class="navbar-link" href="../IP_project/alpha_desktop/alpha_desktop.php">Home</a></li>
                <li><a class="navbar-link" href="../IP_project/alpha_desktop/alpha_desktop.php">Reservation</a></li>
                <li><a class="navbar-link" href="../IP_project/alpha_desktop/alpha_desktop.php">Menu</a></li>            
                <li><a class="navbar-link" href="../IP_project/alpha_desktop/alpha_desktop.php">Order</a></li>
                <li><a class="navbar-link" href="/IP_project/Aboutus/Aboutus.php">About Us</a></li>
                <li><a class="navbar-link" href="/IP_project/contact/index.php">Contact</a></li>
              </ul>
        </header>
      
        <div class="row">
            <h1 class="row-name">Registration for your personal account</h1>
            <form id="form-data" action="userregistration.php" method = "post">
                <label class="form-label" for="fname">First Name</label>
                <input class="form-input" type="text" r id="fname" name="firstname" placeholder="Your name.." required>
            
                <label class="form-label" for="lname">Last Name</label>
                <input class="form-input" type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label class="form-label" for="email">E-mail address</label>
                <input class="form-input" type="email" id="lname" name="email" placeholder="Email" required>

                <label class="form-label" for="password">Create a password</label>
                <input class="form-input" type="password" id="lname" name="password" placeholder="Password" required>
              
                <label class="form-label" for="configpassword">Repeat passwort avoid to mistake</label>
                <input class="form-input" type="password" id="lname" name="configpassword" placeholder="Password" >

                <input class="submit" type="submit" value="Sign up">
              </form>
        </div>

    </div>
</body>
</html>