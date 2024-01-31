<?php include('header.php');?>



<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">



<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">



<div class="container-fluid live-stream-section">
    <div class="row">
        <div class="">
             <div>
              <h3 class="page-top-heading">Graphic Design</h3>
        </div>
    </div>

      <!-- Table Row -->
      <div style="margin-top:25px;" class="row">
                        <div class="col-lg-12">
                            <div class="card table-card">
                                <div class="table-card-header p-3">
                                   <h4 class="card-title">Graphic Design</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>SECTION TITLE</th>
                                                <th>VIDEO</th>
                                                <th>ATTACHMENT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Section 1-Introduction</td>
                                                <td>
                                                   <button data-bs-toggle="modal" data-bs-target="#UploadVideoModal" class="btn btn-primary upload-btn"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Upload</button>
                                                </td>
                                                <td>
                                                   <button data-bs-toggle="modal" data-bs-target="#UploadAttachmentModal" class="btn btn-primary upload-btn"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Upload</button>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                       <a href="edit_lession_section.php" type="button" class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></a>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#HideSectionModal" class="btn transparent-btn"><i class="fa-regular fa-eye eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Section 2-Introduction</td>
                                                <td>
                                                   <button data-bs-toggle="modal" data-bs-target="#UploadVideoModal" class="btn btn-primary upload-btn"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Upload</button>
                                                </td>
                                                <td>
                                                   <button data-bs-toggle="modal" data-bs-target="#UploadAttachmentModal" class="btn btn-primary upload-btn"><i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Upload</button>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                       <a href="edit_lession_section.php" type="button" class="btn transparent-btn"><i class="fa-regular fa-pen-to-square edit-icon"></i></a>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn transparent-btn mx-2"><i class="fa-regular fa-trash-can delete-icon"></i></button>
                                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#UnhideSectionModal" class="btn transparent-btn"><i class="fa-regular fa-eye-slash eye-icon"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                         
                                         
                                        </tbody>








                                        <!--Upload Video Modal  Starts-->
                                    <div class="modal fade zoom-in modal-xl" id="UploadVideoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-flex align-items-center">
                                                <h1 style="font-weight:600;" class="modal-title fs-5" id="modal-label">Video</h1>
                                                <p style="font-weight: 500;"class="mb-0 ms-5">Section 1-Introduction</p>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                            
                                                <div class="col-lg-12">
                                                   <div class="row" id="form-row-1">
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                                <div class="form-group mb-3">
                                                                    <label for="title" class="form-label">Lesson Title</label>
                                                                    <input type="text" class="form-control" id="lesson-title" placeholder="Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <div class="mb-3">
                                                                <label for="video" class="form-label">Choose Video</label>
                                                                <input class="form-control" type="file" id="choose-video">
                                                            </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                                <div class="form-group mb-3">
                                                                    <label for="title" class="form-label">Embedded Link</label>
                                                                    <input type="text" class="form-control" id="link" placeholder="Link">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                                <div class="mb-3">
                                                                <label style="visibility:hidden;" for="video" class="form-label">Add Btn</label>
                                                                    <button class="btn btn-primary w-100 addmore-btn" onclick="addRow('form-row-1')"><i class="fa-solid fa-plus me-2"></i>Add More</button>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    <button type="submit" style="padding:12px !important;" class="btn btn-primary full-width-btn my-3">Upload</button>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Upload Video Modal Ends-->


                                      <!--Upload Attachment Modal  Starts-->
                                      <div class="modal fade zoom-in modal-lg" id="UploadAttachmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center">
                                                <h1 style="font-weight:600;" class="modal-title fs-5" id="modal-label">Attachment</h1>
                                                <div class="ms-5">
                                                   <p style="font-weight: 500;font-size:15px;"class="mb-0">Section 1-Introduction</p>
                                                   <div class="text-center"><small>(Only PDF under 30MB)</small></div>
                                                </div>   
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                            
                                                <div class="col-lg-12">
                                                   <div class="row" id="form-row-2">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="form-group mb-3">
                                                                    <label for="title" class="form-label">Title</label>
                                                                    <input type="text" class="form-control" id="lesson-title" placeholder="Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                            <div class="mb-3">
                                                                <label for="choose icon" class="form-label">Choose Icon</label>
                                                                <input class="form-control" type="file" id="choose-icon">
                                                            </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="mb-3">
                                                                <label style="visibility:hidden;" for="video" class="form-label">Add Btn</label>
                                                                    <button class="btn btn-primary w-100 addmore-btn" onclick="addRow('form-row-2')"><i class="fa-solid fa-plus me-2"></i>Add More</button>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    <button type="submit" style="padding:12px !important;" class="btn btn-primary full-width-btn my-3">Upload</button>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Upload Attachment Modal Ends-->




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
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to delete this Section?</p>
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
                                       <div class="modal fade zoom-in" id="HideSectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/eye-icon.svg">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to hide this Section?</p>
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
                                     <div class="modal fade zoom-in" id="UnhideSectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img style="height:60px;" src="assets/images/icons/unhide.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to Unhide this Section?</p>
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





<script>
    let rowCounter = 1;
    let rowCounter2 = 1;

    function addRow(baseRowId) {
        if (baseRowId === 'form-row-1') {
            rowCounter++;
            let newRow = $("#" + baseRowId).clone();
            newRow.attr("id", "form-row-1-" + rowCounter);
            newRow.find('input[type="text"]').val('');
            newRow.find('input[type="file"]').val('');
            newRow.find('.addmore-btn').removeClass('addmore-btn').addClass('delete-btn').html('<i class="fa-solid fa-xmark me-2"></i>Delete').attr('onclick', 'deleteRow("form-row-1",' + rowCounter + ')');
            $("#" + baseRowId).after(newRow);
        } else if (baseRowId === 'form-row-2') {
            rowCounter2++;
            let newRow = $("#" + baseRowId).clone();
            newRow.attr("id", "form-row-2-" + rowCounter2);
            newRow.find('input[type="text"]').val('');
            newRow.find('input[type="file"]').val('');
            newRow.find('.addmore-btn').removeClass('addmore-btn').addClass('delete-btn').html('<i class="fa-solid fa-xmark me-2"></i>Delete').attr('onclick', 'deleteRow("form-row-2",' + rowCounter2 + ')');
            $("#" + baseRowId).after(newRow);
        }
    }

    function deleteRow(baseRowId, rowId) {
        $("#" + baseRowId + "-" + rowId).remove();
    }
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