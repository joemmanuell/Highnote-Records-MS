<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/admin.css">

        <title>Login- Highnote Records</title>
</head>

<body class="antialiased bg-dark">
        <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-1 fixed-top">
        <div class="container" >
            <a href="/" class="navbar-brand">
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
                    <div class="card bg-danger text-white" style="border-radius: 2rem;">
                      <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 mb-lg-2 pb-2">
                        <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-danger btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                            </form>
                                                            
                        </div>
                      </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

        <footer class=" p-2 bg-danger text-white text-center position-relative">
            <div class="container">
              <p class="lead fw-bold " >Copyright &copy; 2023 Hashtrend LLC</p>
             </div>
        </footer>

</body>
</html>
