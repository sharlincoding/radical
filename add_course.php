<?php include('header.php');?>


<div class="container-fluid add-course-section">
    <div class="row">
        <div class="">
              <h3 class="page-top-heading">Add Course</h3> 
        </div>
    </div>

   
      
      <!-- Table Row -->
       <div style="margin-top:25px;" class="row d-flex justify-content-center">
       
            <div class="col-lg-8">
                <div class="add-course-container">

                
                <!-- Course Details Card -->
                     <div class="card">
                        <div class="p-3 card-header">
                            <h4 class="card-title">Course Details</h4>
                        </div>
                        <div class="card-body pt-0">
                          <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Select Category</option>
                                            <option value="1">3D Design</option>
                                            <option value="2">Coding</option>
                                            <option value="3">AI </option>
                                        </select>
                                    </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="course name" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="course-name" aria-describedby="course-name" placeholder="Course Name">
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="course name" class="form-label">Description</label>
                                    <div id="editor"></div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" aria-describedby="price" placeholder="₹0.00">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="enroll-price" class="form-label">Enroll at Price</label>
                                        <input type="text" class="form-control" id="enroll-price" aria-describedby="enroll-price" placeholder="₹0.00">
                                    </div>
                                </div>
                              </div>
                            </form>
                        </div>
                     </div>


                
                    <!-- Class Info card || Form || -->
                   
                        <div id="class-info-container" class="class-info-container">
                        <div id="initial-card" class="class-info-card card">
                            <div class="p-3 card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Add Section</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <!-- <div class="col-lg-12"> -->
                                        <!-- Progress Bar -->
                                        <!-- <div class="video-upload-progress row gx-2 align-items-center">
                                            <div class="col-auto">
                                                <span class="progress-percentage">83%</span>
                                            </div>
                                            <div class="col">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%"></div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- Progress Bar -->
                                    <!-- </div> -->
                                    <!-- Attachment Section -->
                                    <!-- <div class="p-3 card-header mt-3 d-flex align-items-center">
                                        <h4 class="card-title mb-0">Attachment</h4>
                                        <span class="ms-3"><small style="font-weight:600;">( Only PDF under 30MB )</small></span>
                                    </div> -->
                                    <div class="row" id="form-row-1">
                                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="form-group mb-3">
                                                <label for="title" class="form-label">Section Title</label>
                                                <input type="text" class="form-control" id="heading" aria-describedby="duration" placeholder="Enter Section">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-2 col-2">
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 addmore-btn" onclick="addRow('form-row-1')"><i class="fa-solid fa-plus me-2"></i><span class="icon-text d-none d-sm-none d-md-block d-lg-block d-xl-block">Add More</span></button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary full-width-btn mt-4">Add Course</button>
                    </div>
               
                <!-- Class Info card || Form || -->

                </div>
            </div>
      </div>



</div>





<script>
    let rowCounter = 1;

    function addRow(baseRowId) {
        rowCounter++;

        // Clone the base row
        let newRow = $("#" + baseRowId).clone();

        // Update IDs and reset input values
        newRow.attr("id", "form-row-" + rowCounter);
        newRow.find('input[type="text"]').val('');
        newRow.find('input[type="file"]').val('');

        // Change button to Delete and update its functionality
        newRow.find('.addmore-btn').removeClass('addmore-btn').addClass('delete-btn').html('<i class="fa-solid fa-xmark me-2"></i><span class="icon-text d-none d-sm-none d-md-block d-lg-block d-xl-block">Delete</span>').attr('onclick', 'deleteRow(' + rowCounter + ')');

        // Append the new row after the last row
        $("#" + baseRowId).after(newRow);
    }

    function deleteRow(rowId) {
        // Remove the row with the specified ID
        $("#form-row-" + rowId).remove();
    }
</script>



<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- Text Editor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            const editorElement = document.querySelector('.ck-editor__editable');

            // Set the initial height
            editorElement.style.minHeight = '150px';

            // Add event listener for focus
            editorElement.addEventListener('focus', () => {
                // Set the height when focused
                editorElement.style.minHeight = '150px';
            });

            // Add event listener for blur (when focus is lost)
            editorElement.addEventListener('blur', () => {
                // Set the height when not focused
                editorElement.style.minHeight = '150px';
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>





<?php include('footer.php');?>