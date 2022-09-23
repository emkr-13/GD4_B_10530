<?php include '../component/sidebar.php' ?>

<body>
          <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <form action="../process/CreateMoviesProcess.php" class="row g-3" method="post">
                              <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Genre</label>
                                        <input class="form-control" id="genre" name="genre" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">realese</label>
                                        <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Season</label>
                                        <input class="form-control" id="season" name="season" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">synopsis</label>
                                        <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp">
                              </div>
                              <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary" name="createMovie">Create</button> </div>
                    </form>
          </div>

</body>
</aside> <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>