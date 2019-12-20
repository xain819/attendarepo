<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gleek - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url() ?>public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    
    <div class="login-bg h-100">
        <div class="container h-100">
          
            <div class="row justify-content-center h-100">
                <div class="col-xl-12">
             
                    <div class="form-input-content login-form">
                        <div class="card">
                            <div class="card-body">
                            <div class="row grid">
                              <div class="col-lg-12">
                                  <div class="grid-col">
                                  <h1 class="text-center"><i class="fas fa-school"></i> Stephen F. Austin Middle School</h1>
                                  </div>
                                  <div class='grid row '>
                                  <div class=" card col-lg-2">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  <div class="card col-lg-2">r
                                  </div>
                                  </div>
                                  
                                  
                              </div>
                            </div>

                             <div class="row grid">
                             <div class="col-lg-3"></div>
                              <div class="col-lg-6">
                                  <div class="grid-col">
                                  <FORM id='myform' >
                                <input type="text" id="student_id" class="form-control" placeholder="Student ID"  value="" autofocus>
                              
                                </FORM>
                          


                                  </div>
                              </div>
                              <div class="col-lg-3"></div>
                             </div>

                             <div class="row grid">
                             <div class="col-lg-2"></div>
                              <div class="col-lg-8">
                                  <div class="grid-col">.Col-lg-12</div>
                              </div>
                              <div class="col-lg-2"></div>
                             </div>
                             <div class="row grid">
                          
                              <div class="col-lg-6">
                                  <div class="grid-col">.Col-lg-12</div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="grid-col">.Col-lg-12</div>
                              </div>
                              
                        
                             </div>
                             <div class="row grid">
                          
                          <div class="col-lg-6">
                              <div class="grid-col">.Col-lg-12</div>
                          </div>
                          <div class="col-lg-6">
                              <div class="grid-col">
                              <h4 class="text-center"><i class="fas fa-school"></i> Custom Pass</h4>

                              <form class="mt-5 mb-5">
                              <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label"><span style='font-size:10px;'>Enter Location</span></label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Staff Name / Room #" aria-describedby="validationDefaultUsername2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label"><span style='font-size:10px;'>Enter Hall Pass Time Limit</span></label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Choose from 1-10 min" aria-describedby="validationDefaultUsername2">
                                                </div>
                                            </div>
                                        </div>
                              
                                 
                                </form>
                              </div>
                          </div>
                          
                    
                         </div>
                        
                        
                                <!-- <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="../../assets/images/f-logo.png" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center mt-4">Log into Your Account</h4>
                                <form class="mt-5 mb-5">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-check p-l-0">
                                                <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                <label class="form-check-label ml-3" for="basic_checkbox_1">Check me out</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 text-right"><a href="javascript:void()">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4 mt-4">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <h5 class="mb-5">Or with Login</h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                    <p class="mt-5">Dont have an account? <a href="javascript:void()">Register Now</a>
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>

    <script src="<?=base_url() ?>public/assets/plugins/common/common.min.js"></script>
    <script src="<?=base_url() ?>public/js/custom.min.js"></script>
    <script src="<?=base_url() ?>public/js/settings.js"></script>
    <script src="<?=base_url() ?>public/js/gleek.js"></script>
    <script src="<?=base_url() ?>public/js/styleSwitcher.js"></script>
</body>

</html>