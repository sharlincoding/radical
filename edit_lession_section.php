<?php include('header.php');?>


<div class="container-fluid add-course-section">
    <div class="row">
        <div class="">
              <h3 class="page-top-heading">Edit Section 1-Introduction</h3> 
        </div>
    </div>

   
      
      <!-- Table Row -->
       <div style="margin-top:25px;" class="row d-flex justify-content-center">
       
            <div class="col-lg-12">
                <div class="add-course-container">

                    <!-- Class Info card || Form || -->
                        <div id="class-info-container" class="class-info-container">
                        <div id="initial-card" class="class-info-card card">
                            <div class="p-3 card-header">
                                <h4 style="font-size:18px !important; " class="card-title mb-3">Section 1-Introduction</h4>
                                <p class="mb-0 card-inner-heading">Video</p>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                   
                                 <!-- Video Section -->
                                    <div class="row" id="form-row-1">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                            <div class="form-group mb-3">
                                                <label for="title" class="form-label">Lession Title</label>
                                                <input type="text" class="form-control" id="lession-title" placeholder="Title">
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
                                                <input type="text" class="form-control" id="embedded-link" placeholder="Link">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 addmore-btn" onclick="addRow('form-row-1')"><i class="fa-solid fa-plus me-2"></i><span class="icon-text d-none d-sm-none d-md-block d-lg-block d-xl-block">Add More</span></button>
                                            </div> 
                                        </div>
                                    </div>


                                    <!-- Attachment Section -->
                                    <div class="attachment-section">
                                       <p class="mb-0 card-inner-heading">Attachment <small class="ms-3" style="font-size:12px;">(Only PDF under 30MB)</small></p>
                                       <h4 style="font-size:14px !important; " class="card-title mb-3 mt-3">Section 1-Introduction</h4>

                                        <div class="row" id="form-row-2">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="form-group mb-3">
                                                    <label for="title" class="form-label">Lession Title</label>
                                                    <input type="text" class="form-control" id="lession-title" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                                                <div class="mb-3">
                                                    <label for="video" class="form-label">Choose Video</label>
                                                    <input class="form-control" type="file" id="choose-video">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary w-100 addmore-btn" onclick="addRow('form-row-2')"><i class="fa-solid fa-plus me-2"></i><span class="icon-text d-none d-sm-none d-md-block d-lg-block d-xl-block">Add More</span></button>
                                                </div> 
                                            </div>
                                        </div>


                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="button" class="btn btn-primary full-width-btn mt-4">Update</button>
                    </div>
                <!-- Class Info card || Form || -->

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




<?php include('footer.php');?>