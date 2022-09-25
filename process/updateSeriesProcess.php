<?php

if (isset($_POST['updateSeries'])) {
          include('../db.php');
          $id = $_POST['id'];
          $name = $_POST['name'];
          $genre = $_POST['genre'];
          $realease = $_POST['realease'];
          $season = $_POST['season'];
          $episode = $_POST['episode'];
          $synopsis = $_POST['synopsis'];


          // if ($query) {
          //           echo
          //           '<script>
          //           alert("Edit Success"); 
          //           window.location = "../page/editSeriesPage.php"
          //           </script>';
          // } else {
          //           echo
          //           '<script>
          //           alert("Edit Failed");
          //           </script>';
          // }
} else {
          echo '<script> window.history.back() </script>';
}
