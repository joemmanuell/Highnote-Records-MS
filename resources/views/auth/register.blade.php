<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>
  
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
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
                            <form method="POST" action="{{route('auth.userstore')}}" class="user">
                                @csrf
                                @method('POST') 
                                <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="name" name="firstname" class="form-control form-control-user"                                             placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user"
                                            placeholder="Last Name">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_confirmation" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                   
                                </div>
                                <div class="form-group row col-sm-6">
                                        <input type="text" name="role" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Level">
                                </div>
                                <div class="form-group">
                                        <input type="submit" name="register" class="btn btn-danger btn-user btn-block"
                                            id="exampleRegister" value="Register">
                                </div>
                                <!-- <a href="login.html" class="btn btn-danger btn-user btn-block">
                                    Register Account
                                </a> -->
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/resetpassword">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>