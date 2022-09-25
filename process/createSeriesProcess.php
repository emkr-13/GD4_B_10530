<?php

if (isset($_POST['createSeries'])) {
          include('../db.php');
          $name = $_POST['name'];
          $genre = $_POST['genre'];
          $realease = $_POST['realease'];
          $season = $_POST['season'];
          $episode = $_POST['episode'];
          $synopsis = $_POST['synopsis'];

          $query = mysqli_query($con, "INSERT INTO series(name, genre, realease, episode, season,synopsis) 
          VALUES('$name', '$genre', '$realease','$episode', '$season', '$synopsis')") or die(mysqli_error($con));


          if ($query) {
                    echo '<script> alert("Create movies Success"); window.location = "../page/listSeriesPage.php" </script>';
          } else {
                    echo '<script> alert("Create Failed"); </script>';
          }
} else {
          echo '<script> window.history.back() </script>';
}
