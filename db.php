<?php

$host = "localhost";

$user = "root";
$pass = "";
$name = "gd4_b_0530";

$con = mysqli_connect($host, $user, $pass, $name);

if (mysqli_connect_error()) {
          echo "Failed to connect : " . mysqli_connect_error();
}
