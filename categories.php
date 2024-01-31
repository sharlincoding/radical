<?php include('header.php');?>


<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">



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


<?php include('footer.php');?>