<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!--Google fonts-->
      <!--Piedra-->
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
      <!--Ribeye Marrow-->
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <!--Css -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>

    <?php
        if(isset($_POST['kirish']))
        { 
       
        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'registration_page');
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $s = " select * from usertable where email = '$mail' and password = '$pass' ";
        $result = mysqli_query($con, $s);
        $num = mysqli_num_rows($result);
         
         if($num == 1)
            {
                require('home_page/home.php');

            } 
          else
            {
               header('location:Sign_in.php');
               // require('#');

            }   

        }    
    ?>      

    <div id="container">
        <header class="header">
           <a href=""><img class="logo" src="./images/ALPHA.COM.png" alt=""></a>
        </header>

        <div class="row">
            <h1 class="row-name">Personal account</h1>
            <form id="form-data" action="Sign_in.php" method = "post">

                <label class="form-label" for="lname">E-mail address</label>
                <input class="form-input" type="email" id="lname" name="email" placeholder="Email" required>

                <label class="form-label" for="lname">Password</label>
                <input class="form-input" type="password" id="lname" name="password" placeholder="Password" required>

                <a href="/IP_project/Registration.php">Open a new account</a>
                <input class="submit" name="kirish" type="submit" value="ENTER">
              </form>
        </div>

    </div>
</body>
</html>
