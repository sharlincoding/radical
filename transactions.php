<?php include('header.php');?>


<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">




<div class="container-fluid transactions-section">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
             <div>
              <h3 class="page-top-heading">Transactions</h3>
              <p style="font-size:13px;" class="mb-0 mt-1 text-muted">View all Transactions !</p>
              </div>  
             <div>
                <button class="btn btn-primary btn-light excel-btn"><i class="fa-regular fa-file-excel me-2"></i>Excel</button>
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
                                   <h4 class="card-title">Transaction History</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>STUDENT ID</th>
                                                <th>STUDENT NAME</th>
                                                <th>EMAIL</th>
                                                <th>COURSE</th>
                                                <th>TRANSACTION ID</th>
                                                <th>AMOUNT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>720221</td>
                                                <td>John Smith</td>
                                                <td>Test02@gmail.com</td>
                                                <td>Photoshop</td>
                                                <td>RD9784651235</td>
                                                <td>$799.00</td>
                                                <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" type="button" class="btn transparent-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa-solid fa-download upload-icon"></i></a>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#ApproveModal" class="btn transparent-btn mx-2"><i class="fa-solid fa-check tick-icon"></i></button>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>720221</td>
                                                <td>John Smith</td>
                                                <td>Test02@gmail.com</td>
                                                <td>Photoshop</td>
                                                <td>RD9784651235</td>
                                                <td>$799.00</td>
                                                <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" type="button" class="btn transparent-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa-solid fa-download upload-icon"></i></a>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#ApproveModal" class="btn transparent-btn mx-2"><i class="fa-solid fa-check tick-icon"></i></button>
                                                </div>
                                                </td>
                                            </tr>

                                        </tbody>

                            
                                          <!--Approve Transaction Modal  Starts-->
                                     <div class="modal fade zoom-in" id="ApproveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img style="height:100px;" src="assets/images/icons/approve-transaction.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to Approve this Transaction?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button  data-bs-dismiss="modal" class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes, Approve</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Approve Transaction Modal Ends-->


                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>



    



</div>



<!-- Initialize tooltips -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>


<!-- jQuery CDN-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Include DataTables and its extensions -->
<script type="text/javascript" src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/buttons.print.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/jszip.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/js/datatable/vfs_fonts.js"></script>

<!-- Include FileSaver.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<!-- Initialize DataTable with Buttons extension -->
<script>
   $(document).ready(function() {
    var table = $('#data-table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Export to Excel',
                className: 'd-none'
            }
        ],
        responsive: true // Enable DataTables Responsive extension
    });

    // Event listener for custom Excel button click
    $('.excel-btn').on('click', function() {
        // Trigger Excel export functionality
        table.button('.buttons-excel').trigger();
    });
});

</script>


<?php include('footer.php');?>