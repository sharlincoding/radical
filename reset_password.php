<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radical | Admin Dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/5.3.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
</head>
<body>
    
     <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="index.html">
                        <img src="assets/images/logo-white.png" style="height:48px;" alt="logo-sidebar">
                    </a>
                </div>
                <ul class="sidebar-nav">
                    <!-- <li class="sidebar-header">
                        Admin Elements
                    </li> -->
                    <li class="sidebar-item">
                        <a href="dashboard.html" class="sidebar-link active">
                        <i class="fa-solid fa-house pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="students.html" class="sidebar-link">
                        <i class="fa-solid fa-user-graduate pe-2"></i>
                            Students
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="categories.html" class="sidebar-link">
                        <i class="fa-solid bx bxs-category pe-2"></i>
                            Categories
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="courses.html" class="sidebar-link">
                        <i class="fa-solid fa-newspaper pe-2"></i>
                            Courses
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="lessons.html" class="sidebar-link">
                        <i class="fa-solid fa-book-open pe-2"></i>
                            Lessons
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="live_stream.html" class="sidebar-link">
                        <i class="fa-solid fa-video pe-2"></i>
                            Live Stream
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="notification.html" class="sidebar-link">
                        <i class="fa-solid fa-bell pe-2"></i>
                            Notification
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="transactions.html" class="sidebar-link">
                        <i class="fa-solid fa-dollar-sign pe-2"></i>
                           Transactions
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="reset_password.html" class="sidebar-link">
                        <i class="fa-solid fa-lock pe-2"></i>
                           Reset Password
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false">
                        <i class="fa-solid fa-file-lines pe-2"></i>
                            Pages
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="" class="sidebar-link">Page 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar-link">Page 2</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                   <span class="navbar-toggler-icon"></span>
                </button>  
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav profile-nav-dropdown">
                        <li class="profile-li">
                            <div class="text-white">Hello, <span>Admin</span></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="assets/images/avatar/profile.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                    <div class="text-center profile-greets-holder">
                                        <p class="mb-0 greet-text text-muted">Welcome Back!</p>
                                        <p class="mb-0 dropdown-profile-name">Alexander</p>
                                        <hr class="dropdown-divider">
                                    </div>    
                                    
                                    <a href="#" class="dropdown-item">
                                        <i class="fa-regular fa-circle-user me-2"></i>Profile
                                    </a>
                                    <a href="#" class="dropdown-item">
                                       <i class="fa-solid fa-gear me-2"></i>Settings
                                    </a>
                                    <a href="reset_password.php" class="dropdown-item">
                                    <i class="fa-solid fa-key me-2"></i>Reset Password
                                    </a>
                                    <a href="#" class="dropdown-item">
                                    <i class="fa-solid fa-power-off me-2"></i>Logout
                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="main-page-content">


        <div class="container-fluid add-course-section">
            <div class="row">
                <div class="">
                      <h3 class="page-top-heading">Reset Password</h3> 
                </div>
            </div>

   
      
      <!-- Table Row -->
       <div style="margin-top:35px;" class="row d-flex justify-content-center">
       
            <div class="col-lg-6">
                     <div class="card">
                        <div class="p-3 card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <div class="card-body pt-0">
                          <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="current password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="current-password" aria-describedby="current-password" placeholder="Enter Current Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="new password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new-password" aria-describedby="new-password" placeholder="Enter New Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="confirm new password" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirm-new-password" aria-describedby="confirm-new-password" placeholder="Renter New Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                     <button type="submit" class="btn btn-primary full-width-btn mt-4">Reset Password</button>
                                </div>

                              </div>
                            </form>
                        </div>
                     </div>
              
            </div>
      </div>



</div>


</main>
<!-- Footer -->
<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-lg-6 col-6">
                <span class="footer-text"><script>document.write(new Date().getFullYear())</script><span class="px-1">&#169;</span><span class="brand-text">Radical</span></span>
            </div>
            <div class="col-lg-6 col-6">
                <div class="text-center">
                    <span class="footer-text">Designed by <a href="https://novelxtechnologies.com/" target="_blank" class="designed-by">Novel X</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>



<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/5.3.2/bootstrap.min.js"></script>
</body>
</html>
