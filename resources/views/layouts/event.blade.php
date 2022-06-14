<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body style="background-color: #5cc593">
    
    <nav class="navbar navbar-expand">
        <div class="container-fluid">      
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;font-size:18px;" aria-current="page" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('assets/images/faces/1.jpg') }}" class="card-img-top" alt="...">
                <h5 class="card-title mt-2 ms-2">Card title</h5>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('assets/images/faces/1.jpg') }}" class="card-img-top" alt="...">
                <h5 class="card-title mt-2 ms-2">Card title</h5>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('assets/images/faces/1.jpg') }}" class="card-img-top" alt="...">
                <h5 class="card-title mt-2 ms-2">Card title</h5>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
      </div>
    </div>
    
      <script src="assets/js/app.js"></script>

      <script src="assets/js/pages/dashboard.js"></script>
  
  </body>
</html>