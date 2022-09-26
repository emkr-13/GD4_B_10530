<?php

if (isset($_POST['updateSeries'])) {
          session_start();
          include('../db.php');
          $series = $_SESSION['series']['id'];
          $name = $_POST['name'];
          $genre = $_POST['genre'];
          $realease = $_POST['realease'];
          $season = $_POST['season'];
          $episode = $_POST['episode'];
          $synopsis = $_POST['synopsis'];

          $query = mysqli_query($con, "UPDATE series SET name='$name',genre='$genre',realease='$realease',season='$season',episode='$episode',synopsis='$synopsis'  WHERE id ='$series'");
          if ($query) {
                    echo
                    '<script>
                    alert("Edit Success"); 
                    window.location = "../page/listSeriesPage.php"
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
