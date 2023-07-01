<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">


    <title>Home</title>
    </head>
    <body class="antialiased">
       <!-- NAV BAR -->
    <!-- create a navigation bar, resizeable, dark background, white font, padding at y -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top"> 
        <!-- places the contents in a container -->
        <div class="container"> 
            <!-- brand is used to write main text considered to be the name of the website, be replaced with logo or both logo and text -->
            <a href="#" class="navbar-brand">HIGHNOTE RECORDS</a>
            <!-- creates button for collapsable drop down menu, target is used to specify the content to be in the menu-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <!-- create unordered list -->
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="/about" class="nav-link active">About Us</a>
                    </li>
                       
                    <li class="nav-item">
                        <a href="/faq" class="nav-link">FAQs</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>

    <!-- showcase -->
    <!-- create section, dark bg, light text, padding all around, center text, at sm place text at the start -->
    <section class="bg-dark text-light p-5 text-center text-sm-start">
        <div class="container">
            <!-- creates a flex box that aligns divides them the image and text div to two columns,used till at sm breakpoint, creates margin at yaxis -->
            <div class="d-sm-flex my-4 align-items-center justify-content-between" > 
                <div>
                    <h1>ABOUT<span class="text-warning"> US</span>
                    </h1>
                    <!-- creates a paragraph, lead increases the size of the text -->
                    <p class="lead ">At Highnote Records, we believe that music is not just an art form, but a powerful medium that has the ability to connect people, inspire change, and create magic. Established in [year], we have been dedicated to preserving and promoting the rich diversity of musical talent from all around the world. Our passion for music drives us to provide a platform for talented artists to showcase their unique voices and share their stories with the world.

What sets Highnote Records apart is our commitment to nurturing artists and supporting them at every step of their musical journey.

                    </p>
                    <p class="lead"> We firmly believe that there is something for everyone in the world of music, and we take pride in curating a diverse collection that appeals to music lovers of all tastes and preferences. Whether you are a fan of pop, rock, hip-hop, jazz, classical, or any other genre, we aim to provide an extensive and eclectic selection that will keep you hooked and discovering new favorites.

In addition to our commitment to artists and music lovers, we are also dedicated to providing an exceptional experience for our listeners.</p>
                </div>
                <!-- 25pc of the image, display none, display block at sm -->
                <img class="img-fliud w-25 d-none d-sm-block" src="img/showcase.png" alt="">
            </div>
        </div>
    </section>


    <!-- Managers -->
<section id="managers" class="p-5 bg-primary">
    <div class="container">
        <h2 class="text-center text-white">Our Managers</h2>
        <p class="lead text-ceenter text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quam voluptatum architecto voluptas dolores dolorem iure, saepe necessitatibus commodi aliquam incidunt quasi ullam cupiditate. Quod in tempora assumenda beatae debitis.</p>
        <div class="row g-4">
            <!-- new 0 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="" class="rounded-circle mb-3 w-25 ">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis molestiae quisquam voluptatem reiciendis aliquid </p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- new1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="" class="rounded-circle mb-3 w-25 ">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis molestiae quisquam voluptatem reiciendis aliquid</p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- new 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="" class="rounded-circle mb-3 w-25 ">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis molestiae quisquam voluptatem reiciendis aliquid</p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- new 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="" class="rounded-circle mb-3 w-25 ">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis molestiae quisquam voluptatem reiciendis aliquid</p>
                        <a href="#"><i class="bi bi-twitter mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact and map -->
<section class="p-5">
    <div class="row g-4">
        <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
                <li class="list-group-item">
                    <span class="fw-bold">Main Location:</span> 9111 Nairobi
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Email:</span> about@trendinc.com
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Telephone No:</span> 02233112313
                </li>
            </ul>
        </div>
        <div class="col-md">
            <div id="map"></div>
        </div>
    </div>
</section>

    <!-- FOOTER -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2021 Joe Emmanuel</p>
        <a href="" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>

</footer>

<div class="modal fade" id="start" tabindex="-1" aria-labelledby="startLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">Login
          <h5 class="modal-title" id="startLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">FillOut This Form</p>
          <form>
            <div class="mb-3">
                <label for="first-name" class="col-for-label">First Name: </label>
                <input type="text" class="form-control" id="first-name">
            </div>
            <div class="mb-3">
                <label for="first-name" class="col-for-label">Password: </label>
                <input type="text" class="form-control" id="first-name">
            </div>
            <div class="mb-3">
                <label for="first-name" class="col-for-label">Passcode: </label>
                <input type="text" class="form-control" id="first-name">
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic29tZW9uZXlkZWsiLCJhIjoiY2xmbWR4YmFtMGF6eTN3cjJ3aXRvcXNuYiJ9.yFG65sQpnc8FUcssQTe6ZA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-71.060982, 42.35725],
    zoom: 18,
  });
    </script>

    </body>
</html>
