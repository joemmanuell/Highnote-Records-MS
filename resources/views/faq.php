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
                        <a href="/about" class="nav-link">About Us</a>
                    </li>
                       
                    <li class="nav-item">
                        <a href="/faq" class="nav-link active">FAQs</a>
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
                
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions (FAQs) </h2>
            
            <div class="accordion accordion-flush" id="Questions">
                <div class="accordion-item">
                    <!-- item 1 -->
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one" aria-expanded="false" aria-controls="question-one">
                        How can I submit my music to Highnote Record Label?
                    </button>
                  </h2>
                  <div id="question-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#Questions">
                    <div class="accordion-body">To submit your music to Highnote Record Label, you can visit our website and look for the submission guidelines or contact information. There, you will find instructions on how to send in your demos or portfolio for consideration</div>
                  </div>
                </div>
                <!-- item 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Does Highnote Record Label accept all genres of music? 
                    </button>
                  </h2>
                  <div id="question-two" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, Highnote Record Label welcomes artists from various genres, including but not limited to pop, rock, hip-hop, R&B, country, electronic, and more. We celebrate diversity in musical styles and strive to support artists from different backgrounds</div>
                  </div>
                </div>
                <!-- item 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three" aria-expanded="false" aria-controls="flush-collapseThree">
                        What can Highnote Record Label offer to artists?
                    </button>
                  </h2>
                  <div id="question-three" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Highnote Record Label offers a range of services and support to artists. Some of the key benefits include professional recording and production assistance, marketing and promotion strategies, distribution on major streaming platforms, and opportunities for performances and collaborations.</div>
                  </div>
                </div>
                <!-- item 4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four" aria-expanded="false" aria-controls="flush-collapseFour">
                        How long does it take for Highnote Record Label to review a submission?
                    </button>
                  </h2>
                  <div id="question-four" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Highnote Record Label receives a large volume of submissions, so the review process may take some time. We carefully listen to each submission to ensure fair evaluation. While we cannot provide an exact timeline, we strive to respond to all submissions within a reasonable period.</div>
                  </div>
                </div>
                <!-- item 5 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five" aria-expanded="false" aria-controls="flush-collapseFive">
                        If selected by Highnote Record Label, what are the terms of the contract?
                    </button>
                  </h2>
                  <div id="question-five" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The terms of the contract can vary depending on individual agreements. Highnote Record Label aims to establish fair and mutually beneficial partnerships with artists. Contracts often cover areas such as royalty rates, distribution rights, marketing plans, and potential collaborations.</div>
                  </div>
                </div>
                <!-- item 6 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-six" aria-expanded="false" aria-controls="flush-collapseSix">
                     Does Highnote Record Label provide financial support to artists?
                    </button>
                  </h2>
                  <div id="question-six" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Highnote Record Label evaluates projects on a case-by-case basis. While we may provide financial support for certain artists or projects, it primarily depends on the potential commercial viability and strategic alignment with our label's goals.</div>
                  </div>
                </div>
                <!-- item 7 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-seven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Can I release music independently if I sign with Highnote Record Label?
                    </button>
                  </h2>
                  <div id="question-seven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Highnote Record Label respects artists' creative freedom and understands the importance of independent releases. However, the terms of your contract with Highnote Record Label may outline the exclusivity of releases during the partnership. It's crucial to discuss and clarify this aspect before signing any agreements.</div>
                  </div>
                </div>
                <!-- item 8 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-eight" aria-expanded="false" aria-controls="flush-collapseEight">
                         How does Highnote Record Label handle marketing and promotion?
                    </button>
                  </h2>
                  <div id="question-eight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Highnote Record Label has a dedicated team that specializes in marketing and promotion. Our experts work closely with artists to create effective strategies tailored to their goals and target audience. This includes digital marketing, social media campaigns, press releases, playlist placements, live performances, and more.</div>
                  </div>
                </div>
                <!-- item 9 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-nine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Can I contact Highnote Record Label for general inquiries or support?
                    </button>
                  </h2>
                  <div id="question-nine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Absolutely! Highnote Record Label is open to inquiries and support requests. Feel free to reach out to us through our website's contact section or any other official communication channels. We strive to be responsive and assist artists in every possible way.</div>
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
