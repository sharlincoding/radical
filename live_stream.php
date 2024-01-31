<?php include('header.php');?>



<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">



<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">



<div class="container-fluid live-stream-section">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
             <div>
              <h3 class="page-top-heading">Live Stream</h3>
              <p style="font-size:13px;" class="mb-0 mt-1 text-muted">View all Live !</p>
              </div>  
             <button data-bs-toggle="modal" data-bs-target="#AddLiveStream" class="btn feature-btn"><i class="fa-solid fa-plus me-2"></i>Create Live Class</button>
        </div>
    </div>

    <div class="row mt-4">
     <form action="">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="row"> 
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10 filter-first-child-col">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="mb-0 filter-by-p">Search by:</p>
                            <input type="text" class="form-control filter-input" placeholder="Search">
                        </div> 
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 d-flex align-items-center">
                        <button class="btn search-icon-btn"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                    </div>
                
                </div>
            </div>
        </form>
    </div>



        <!--Add Livestream Modal Starts-->
        <div class="modal fade zoom-in" id="AddLiveStream" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Live Stream</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Course Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Course Title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="date and time" class="form-label">Date & Time</label>
                            <input type="text" class="form-control" id="datetimepicker" placeholder="Select Date and Time">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Live URL</label>
                            <input type="text" class="form-control" id="live-url" aria-describedby="title" placeholder="URL Link">
                        </div>
                        <button type="submit" class="btn btn-primary full-width-btn my-3">Add Live Stream</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!--Add Livestream Modal Ends-->


      
      <!-- Table Row -->
      <div style="margin-top:25px;" class="row">
                        <div class="col-lg-12">
                            <div class="card table-card">
                                <div class="table-card-header p-3">
                                   <h4 class="card-title">Courses</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>LIVE CLASS</th>
                                                <th>CATEGORY</th>
                                                <th>COURSE</th>
                                                <th>CREATED ON</th>
                                                <th>DATE & TIME</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Fundamentals</td>
                                                <td>Graphic Design</td>
                                                <td>Photoshop</td>
                                                <td>
                                                    <div>24/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Date:</span>24/01/2024</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Time:</span>10:30 AM</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button data-bs-toggle="modal" data-bs-target="#EditLiveStream"  type="button"  class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></button>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#HideCourseModal" class="btn transparent-btn"><i class="fa-regular fa-eye eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Fundamentals</td>
                                                <td>Graphic Design</td>
                                                <td>Photoshop</td>
                                                <td>
                                                    <div>24/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Date:</span>24/01/2024</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Time:</span>10:30 AM</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <button data-bs-toggle="modal" data-bs-target="#EditLiveStream"  type="button"  class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></button>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#UnhideCourseModal" class="btn transparent-btn"><i class="fa-regular fa-eye-slash eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                      
                                        </tbody>



                                <!--Edit Livestream Modal Starts-->
                                    <div class="modal fade zoom-in" id="EditLiveStream" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Live Stream</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group mb-3">
                                                        <label for="title" class="form-label">Course Title</label>
                                                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Course Title">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="date and time" class="form-label">Date & Time</label>
                                                        <input type="text" class="form-control" id="datetimepicker" placeholder="Select Date and Time">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="title" class="form-label">Live URL</label>
                                                        <input type="text" class="form-control" id="live-url" aria-describedby="title" placeholder="URL Link">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary full-width-btn my-3">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Edit Livestream Modal Ends-->



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
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to delete this live class?</p>
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
                                       <div class="modal fade zoom-in" id="HideCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/eye-icon.svg">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to hide this live class?</p>
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
                                     <div class="modal fade zoom-in" id="UnhideCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img style="height:60px;" src="assets/images/icons/unhide.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to Unhide this live class?</p>
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



<!-- Flatpickr JS for Date & Time-->
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>

<script>
    flatpickr("#datetimepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>



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