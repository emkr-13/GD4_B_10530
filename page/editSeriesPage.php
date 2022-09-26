<?php include '../component/sidebar.php';

$id = $_GET['id'];
$query = "SELECT * from series where id='$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$series = mysqli_fetch_assoc($result);
$_SESSION['series'] = $series;
$genre = $series['genre'];

?>

<body>



          <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="body d-flex justify-content-between">
                              <h4>Edit Series</h4>

                    </div>



                    <hr>
                    <form action="../process/updateSeriesProcess.php" class="row g-3" method="post">
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $series['name'] ?>">
                              </div>

                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Genre</label>

                                        <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                                                  <option value="Action" <?php
                                                                                if ($genre == "Action") {
                                                                                          echo 'selected';
                                                                                }                              ?>>Action</option>
                                                  <option value="Comedy" <?php
                                                                                if ($genre == "Comedy") {
                                                                                          echo 'selected';
                                                                                }                              ?>>Comedy</option>
                                                  <option value="Horor" <?php
                                                                                if ($genre == "Horor") {
                                                                                          echo 'selected';
                                                                                }                              ?>>Horor</option>
                                                  <option value="Fantasy" <?php
                                                                                if ($genre == "Fantasy") {
                                                                                          echo 'selected';
                                                                                }                              ?>>Fantasy</option>
                                        </select>
                              </div>
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">realease</label>
                                        <input class="form-control" id="realease" name="realease" aria-describedby="emailHelp" value="<?php echo $series['realease'] ?>">
                              </div>
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Season</label>
                                        <input class="form-control" id="season" name="season" aria-describedby="emailHelp" type="number" value="<?php echo $series['season'] ?>">
                              </div>
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Episode</label>
                                        <input class="form-control" id="episode" name="episode" aria-describedby="emailHelp" type="number" value="<?php echo $series['episode'] ?>">
                              </div>
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">synopsis</label>
                                        <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp" value="<?php echo $series['synopsis'] ?>">
                              </div>
                              <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="updateSeries">Update</button>
                              </div>
                    </form>
          </div>

</body>
</aside> <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>