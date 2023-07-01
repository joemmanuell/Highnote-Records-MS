<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="admin.css">

        <title>MANAGER</title>
    </head>
    <body class="antialiased">
        <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-1 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <!-- <img src="img/logo.png" alt="" width="200" height="55"> -->
                <img src="img/logo.png" alt="" width="190" height="60" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Need Assistance?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
            </div><
        </div>
    </nav>

    <!-- section -->
    <section class="vh-100 gradient-custom">
        <div class="mt-5 container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100" >
                <div class="col-12 col-md-3 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 2rem;">
                      <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 mb-lg-2 pb-2">
                            <h2 class="fw-bold mb-3 text-uppercase">administrator</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password</p>
                            
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeEmailX">Email</label>
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                              </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="pass">Password</label>
                                <input type="password" id="pass" class="form-control form-control-lg">
                            </div>
                
                            <p class="small mb-4 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                                            
                        </div>
                      </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

        <footer class=" p-2 bg-dark text-white text-center position-relative">
            <div class="container">
              <p class="lead fw-bold " >Copyright &copy; 2023 Hashtrend LLC</p>
             </div>
        </footer>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
