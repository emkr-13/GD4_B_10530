<?php

if (isset($_POST['Update'])) {
          session_start();
          include('../db.php');
          $user =  $_SESSION['user']['id'];
          $email = $_POST['email'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $name = $_POST['name'];
          $phonenum = $_POST['phonenum'];

          $query = mysqli_query($con, "UPDATE users SET email='$email',password='$password',name='$name', phonenum='$phonenum'  WHERE id ='$user'");
          if ($query) {
                    echo
                    '<script>
                    alert("Edit Success"); 
                    window.location = "../page/editProfilPage.php"
                    </script>';
          } else {
                    echo
                    '<script>
                    alert("Edit Failed");
                    </script>';
          }
} else {
          echo '<script> window.history.back() </script>';
}
