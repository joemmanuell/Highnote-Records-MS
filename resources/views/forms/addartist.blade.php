<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <link href="<?php echo asset('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/form.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    
    <!-- Custom styles for this template-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Manager</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Artist-->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>Artists</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="/addartist">Add New Artist</a>
                        <a class="collapse-item" href="buttons.html">View Artist</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Contracts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-money-bill"></i>
                    <span>Contracts</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/addcontract">Create New Contract</a>
                        <a class="collapse-item" href="utilities-border.html">View Contracts</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Music Catalogue -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-money-bill"></i>
                    <span>Music Catalogue</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/addmusic">Add To Catalogue</a>
                        <a class="collapse-item" href="utilities-border.html">View Catalogue</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Events  -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-money-bill"></i>
                    <span>Events</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/addevent">Schedule Event</a>
                        <a class="collapse-item" href="utilities-border.html">View Scheduled Events</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Reports -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-chart-bar"></i>
                    <span>Reports</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="login.html">Artist Stream Insights</a>
                        <a class="collapse-item" href="register.html">Artist Engagement Insights</a>                       
                    </div>
                </div>
            </li>

                 <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#"> <!--Link Profile Name-->
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                    
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="container-fluid px-1 py-5 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                            <h3>NEW ARTIST</h3>
                            <div class="card">
                                    <div>
                                        @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>
                                                {{$error}}
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                <form method="POST" action="{{route('forms.artiststore')}}" class="form-card">
                                    @csrf
                                    @method('POST')
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Artist ID<span class="text-danger"> *</span></label> <input type="text" id="fname" name="artistID" value="{{ $nextArtistID }}" readonly> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Legal Name<span class="text-danger"> *</span></label> <input type="text" id="email" name="legalName" placeholder="" onblur="validate(3)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Artist Name<span class="text-danger"> *</span></label> <input type="text" id="mob" name="artistName" placeholder="" onblur="validate(4)"> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Sex<span class="text-danger"> *</span></label> 
                                                <select name="sex" id="selection">
                                                    <option value="" disabled selected>Select your option</option>
                                                    <option value="option1">Male</option>
                                                    <option value="option2">Female</option>
                                                </select>

                                            </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">DOB<span class="text-danger"> *</span></label> <input type="date" id="job" name="DOB" placeholder="" onblur="validate(5)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nationality<span class="text-danger"> *</span></label> <input type="text" id="job" name="nationality" placeholder="" onblur="validate(5)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contact Details<span class="text-danger"> *</span></label> <input type="number" id="job" name="contactDetails" placeholder="" onblur="validate(5)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="job" name="address" placeholder="" onblur="validate(5)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Social Media Handle<span class="text-danger"> *</span></label> <input type="text" id="job" name="socialMediaHandle" placeholder="" onblur="validate(5)"> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Biography<span class="text-danger"> *</span></label> <input type="text" id="ans" name="biography" placeholder="" onblur="validate(6)"> </div>
                                    </div>
                                
                                    <div class="row justify-content-end form-group col-sm-6"> <input type="submit" name="register" class="btn btn-danger btn-user btn-block" id="exampleRegister" value="Submit"> </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Highnote Records 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="js/form.js"></script>


</body>

</html>