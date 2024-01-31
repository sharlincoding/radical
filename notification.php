<?php include('header.php');?>


<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">




<div class="container-fluid notification-section">
    <div class="row">
        <div class="">
             <div>
              <h3 class="page-top-heading">Notifications</h3>
              <p style="font-size:13px;" class="mb-0 mt-1 text-muted">View all Notifications !</p>
              </div>  
        </div>
    </div>

    <div class="row mt-4">
     <form action="">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="row"> 
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 filter-first-child-col">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="mb-0 filter-by-p">Search by:</p>
                            <input type="text" class="form-control filter-input" placeholder="Search">
                        </div> 
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4 d-flex align-items-center">
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
                                   <h4 class="card-title">Notification History</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>TITLE</th>
                                                <th>DESCRIPTION</th>
                                                <th>TYPE</th>
                                                <th>CREATED ON</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Photoshop New Course</td>
                                                <td class="des-td">Design thinking is characterized by its non-linear and iterative nature. Teams often cycle back and forth between these stages, refining their solutions based on continuous feedback</td>
                                                <td>ID: 78546</td>
                                               <td>2024.01.02 10:26:30</td>
                                                <td>
                                                   <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Photoshop New Course</td>
                                                <td class="des-td">Design thinking is characterized by its non-linear and iterative nature. Teams often cycle back and forth between these stages, refining their solutions based on continuous feedback</td>
                                                <td>ID: 78546</td>
                                               <td>2024.01.02 10:26:30</td>
                                                <td>
                                                   <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                </td>
                                            </tr>

                                  
                                        </tbody>

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
                                                                        <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to delete this Notification?</p>
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