<?php

if (isset($_POST['createMovie'])) {
          include('../db.php');
          $name = $_POST['name'];
          $genre = $_POST['genre'];
          $realese = $_POST['realese'];
          $season = $_POST['season'];
          $synopsis = $_POST['synopsis'];

          $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season,synopsis) 
          VALUES('$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));
          if ($query) {
                    echo '<script> alert("Create movies Success"); window.location = "../page/listMoviesPage.php" </script>';
          } else {
                    echo '<script> alert("Create Failed"); </script>';
          }
} else {
          echo '<script> window.history.back() </script>';
}
