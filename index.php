<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlissNove | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <style>
        .logo-widget{
            background:url('assets/images/login-bg.png');
            background-size: cover !important;
        }
        .form-control:focus{
            border-color:#66328E !important;
            box-shadow:none !important;
        }
        .form-label{
            color:#040D12!important;
            font-weight:400;
        }
        .login-container .form-control{
            padding: 14px;
            border-radius:10px;
            font-size: 13px;
        }
        .login-btn, .login-btn:hover, .login-btn:active{
            padding: 14px 10px;
            border-radius: 12px;
            background-color: #66328E !important;
        }
        @media screen and (max-width:575px){
            .rightside-widget-col{
                display:none !important;
            }
            .widget-logo{
                display:inline-block !important;
            }
        }
    </style>
</head>
<body>
    <div class="page-content overflow-hidden min-vh-100 login-container">
         <div class="row g-0 vh-100">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  d-flex justify-content-center align-items-center">
                  <div class="p-lg-5 p-4">
                     <div class="text-center">
                        <img src="assets/images/logo-horizontal.png" style="height:55px;" class="my-3 d-none widget-logo" alt="logo-horizontal">
                        <h3 style="font-weight:600;color:#66328E;">Welcome Back</h3>
                        <p style="color:#B3B4BA;" class=" py-2">Enter your email id and password to login</p>
                     </div>
                     <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="username" placeholder="Enter your Email Address">
                        </div>

                        <div class="mb-3">
                            <!-- <div class="float-end">
                                <a href="#" class="text-muted">Forgot password?</a>
                            </div> -->
                            <label class="form-label" for="password-input">Password</label>
                            <div class=" mb-3">
                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter your password" >
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="dashboard.php" class="btn btn-success login-btn w-100" type="submit">
                                <i class="fa-solid fa-circle-user me-2"></i>Login
                            </a>
                        </div>
                    </form>

                  </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 rightside-widget-col">
                  <div class="p-lg-5 p-4 h-100 logo-widget">
                       <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="">
                               
                                  <img src="assets/images/logo-white.png" style="height:80px;" alt="logo-horizontal">
                                   
                          </div>
                       </div>
                  </div>
             </div>
         </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>