<?php include('header.php');?>


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






<?php include('footer.php');?>