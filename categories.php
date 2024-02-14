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

    <!-- DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">
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

<div class="container-fluid categories-section">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
             <div>
              <h3 class="page-top-heading">Categories</h3>
              <p style="font-size:13px;" class="mb-0 mt-1 text-muted">View all Categories !</p>
              </div>  
             <a data-bs-toggle="modal" data-bs-target="#AddCategoryModal" href="" class="btn feature-btn"><i class="fa-solid fa-plus me-2"></i>Add Category</a>
        </div>
    </div>

    <div class="row mt-4">
     <form action="">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="row"> 
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10 filter-first-child-col">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="mb-0 filter-by-p">Search by:</p>
                            <input type="text" class="form-control filter-input" placeholder="Topic name">
                        </div> 
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 d-flex align-items-center">
                        <button class="btn search-icon-btn"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                    </div>
                
                </div>
            </div>
        </form>
    </div>

      <!-- Table Row -->
      <div style="margin-top:25px;" class="row">
                        <div class="col-lg-12">
                            <div class="card table-card">
                                <div class="table-card-header p-3">
                                   <h4 class="card-title">Category</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>ICON</th>
                                                <th>CATEGORY NAME</th>
                                                <th>CREATED ON</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="assets/images/icons/course-icon.png" class="img-fluid" alt="course-icon">
                                                </td>
                                                <td>3D Design</td>
                                                <td>2023/01/2024 00:00:00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#EditCategoryModal" class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></button>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#HideCategoryModal" class="btn transparent-btn"><i class="fa-regular fa-eye eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="assets/images/icons/course-icon.png" class="img-fluid" alt="course-icon">
                                                </td>
                                                <td>Coding</td>
                                                <td>2023/01/2024 00:00:00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#EditCategoryModal" class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></button>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#UnhideCategoryModal" type="button" class="btn transparent-btn"><i class="fa-regular fa-eye-slash eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                      
                                        </tbody>


                                          <!--Add Category Modal  Starts-->
                                    <div class="modal fade zoom-in" id="AddCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="icon" class="form-label">Choose Icon</label>
                                                        <input class="form-control" type="file" id="choose-icon">
                                                        <label class="mt-1"><small class="text-muted">Recommended size  W - 24px, H - 24px.</small></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary full-width-btn my-3">Add Category</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Add Category Modal Ends-->


                                    <!--Edit Category Modal Starts-->
                                    <div class="modal fade zoom-in" id="EditCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group mb-3">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="(Ex): Graphics Design">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="icon" class="form-label">Choose Icon</label>
                                                        <input class="form-control" type="file" id="choose-icon">
                                                        <label class="mt-1"><small class="text-muted">Recommended size  W - 24px, H - 24px.</small></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary full-width-btn my-3">Update Category</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Edit Category Modal Ends-->

                                     <!--Delete Modal  Starts-->
                                     <div class="modal fade zoom-in" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/delete-icon.svg">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to delete this Category?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button  data-bs-dismiss="modal" class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes, Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Delete Modal Ends-->

                                       <!--Hide Modal  Starts-->
                                       <div class="modal fade zoom-in" id="HideCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/eye-icon.svg">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to hide this Category?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button  data-bs-dismiss="modal" class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes, Hide</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Hide Modal Ends-->

                                     <!--Unhide Modal  Starts-->
                                     <div class="modal fade zoom-in" id="UnhideCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img style="height:60px;" src="assets/images/icons/unhide.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to Unhide this Category?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button  data-bs-dismiss="modal" class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes, Unhide</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Unhide Modal Ends-->


                                    </table>

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

    
<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Datatable JS -->
<script type="text/javascript" src="assets/js/datatable/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/datatables.init.js"></script>
<script type="text/javascript" src="assets/js/datatable/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/buttons.print.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/jszip.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/vfs_fonts.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/5.3.2/bootstrap.min.js"></script>
</body>
</html>
