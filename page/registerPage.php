<!doctype html>
<html lang="en">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Register</title>
          <link rel="stylesheet" href="../style.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
          <nav class="navbar navbar-dark bg-dark fixed-top">
                    <div class="container">
                              <a class="navbar-brand fw-bold" href="/gd4_x_yyyy">PHP - Krisna</a>
                    </div>
          </nav>
          <div class="bg bg-light text-dark">
                    <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                              <div class="card text-white bg-dark ma-5 shadow " style="min-width: 25rem;">
                                        <div class="card-header fw-bold">Register</div>
                                        <div class="card-body">
                                                  <form action="../process/registerProcess.php" method="post">
                                                            <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Name</label> <input class="form-control" id="name" name="name" aria-describedby="emailHelp"> </div>
                                                            <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Phone Number</label> <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp"> </div>
                                                            <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Membership</label> <select class="form-select" aria-label="Default select example" name="membership" id="membership">
                                                                                <option value="Reguler">Reguler</option>
                                                                                <option value="Platinum">Platinum</option>
                                                                                <option value="Gold">Gold</option>
                                                                      </select> </div>
                                                            <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Email</label> <input class="form-control" id="email" name="email" aria-describedby="emailHelp"> </div>
                                                            <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Password</label> <input type="password" class="form-control" id="password" name="password"> </div>
                                                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary" name="register">Register</button> </div>
                                                  </form>
                                                  <p class="mt-2 mb-0">Have an account? <a href="./loginPage.php" class="text-primary">Login here!</a></p>
                                        </div>
                              </div>
                    </div>
          </div>


          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>