<?php

if (isset($_POST['register'])) {
          include('../db.php');
          $email = $_POST['email'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $name = $_POST['name'];
          $phonenum = $_POST['phonenum'];
          $membership = $_POST['membership'];


          $checkEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");

          $checkPhone = mysqli_query($con, "SELECT * FROM users WHERE phonenum = '$phonenum'");


          if (mysqli_num_rows($checkPhone) == 1) {
                    echo '<script> alert("Phonenumeber already Used"); window.location = "../page/RegisterPage.php" </script>';
          } elseif (mysqli_num_rows($checkEmail) == 1) {
                    echo '<script> alert("Email already used"); window.location = "../page/RegisterPage.php" </script>';
          } elseif (mysqli_num_rows($checkPhone) == 1 && mysqli_num_rows($checkEmail) == 1) {
                    echo '<script> alert("Phone number and Email already used"); window.location = "../page/RegisterPage.php" </script>';
          } elseif (mysqli_num_rows($checkPhone) == 0 && mysqli_num_rows($checkEmail) == 0) {
                    $query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership) 
          VALUES('$email', '$password', '$name', '$phonenum', '$membership')") or die(mysqli_error($con));
                    if ($query) {
                              echo '<script> alert("Register Success"); window.location = "../index.php" </script>';
                    } else {
                              echo '<script> alert("Register Failed"); </script>';
                    }
          }
} else {
          echo '<script> window.history.back() </script>';
}
