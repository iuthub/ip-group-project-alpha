<?php

			include_once 'dbh.inc.php';

     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $person = $_POST['visitors'];

  $sql = "INSERT INTO book (name, phone, date, time, person)
	 VALUES ('$name', '$phone','$date','$time','$person');";
  mysqli_query($conn, $sql);

 header("location: ../reservation.php?order=succes");
