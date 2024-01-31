<?php include('header.php');?>


<style>
    .dataTables_wrapper {
    overflow-x: auto; /* Enable horizontal scrolling */
    margin-bottom: 1rem; /* Adjust spacing as needed */
  }

.dataTables_length, .dataTables_filter, .dataTables_info, .dataTables_paginate {
    margin-top: 1rem; /* Adjust spacing as needed */
}

</style>


<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">




<div class="container-fluid students-section">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
             <div>
              <h3 class="page-top-heading">Students</h3>
              <p style="font-size:13px;" class="mb-0 mt-1 text-muted">View all Students !</p>
              </div>  
             <div class="d-flex align-items-center">
                <button class="btn btn-light excel-btn me-4"><i class="fa-regular fa-file-excel me-2"></i>Excel</button>
                <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-top-btn"><i class="fa-regular fa-bell me-2"></i>Notify</button>
             </div>
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
                                   <h4 class="card-title">Student Details</h4>
                                </div>
                                <div class="card-body">
                                <table id="data-table" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>ID</th>
                                                <th>STUDENT</th>
                                                <th>CREATED ON</th>
                                                <th>INFORMATION</th>
                                                <th>COURSE DETAILS</th>
                                                <th>NOTIFY</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                  
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                 
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                   
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                   
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                  
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                  
                                                   <button data-bs-toggle="modal" data-bs-target="#UnblockModal" class="btn btn-success unblock-btn"><i class="ri-lock-unlock-line me-1"></i>Unblock</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>2023/01/2024</div>
                                                    <div>00:00:00</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Email:</span>sample@gmail.com</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Phone:</span>8098818427</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Address:</span>Test Address</div>
                                                </td>
                                                <td>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Total Paid:</span>$4000</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Purchase:</span>5</div>
                                                    <div><span class="muted-text me-2" style="color:#B3B4BA;">Live Section:</span>2</div>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#NotifyModal" class="btn btn-primary notify-btn"><i class="fa-regular fa-bell"></i></button>
                                                </td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#BlockModal" class="btn btn-success block-btn"><i class="ri-lock-line me-1"></i>Block</button>
                                                
                                                </td>
                                            </tr>

                                  
                                        </tbody>


                                    <!--Notify Modal  Starts-->
                                    <div class="modal fade zoom-in" id="NotifyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Notification</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group mb-3">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" rows="3" placeholder="Write here"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary full-width-btn my-3">Notify</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Notify Modal Ends-->

                                      <!--Block Button Modal  Starts-->
                                      <div class="modal fade zoom-in" id="BlockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/unlock.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to block this Account?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button  data-bs-dismiss="modal" class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes,    Block</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Block Button Modal Ends-->

                                    <!--Unblock Button Modal  Starts-->
                                    <div class="modal fade zoom-in" id="UnblockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-3">
                                                        <div class="text-center">
                                                            <img src="assets/images/icons/unlock.png">
                                                            <p class="my-4 are-you-sure">Are You Sure</p>
                                                            <p style="font-size: 15px;" class="text-muted my-2">Are you sure want to unblock this Account?</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-5 mb-3">
                                                            <button data-bs-dismiss="modal"  class="btn btn-light cancel-btn me-3">Cancel</button>
                                                            <button class="btn btn-primary yes-btn">Yes,    Unblock</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--Unblock Button Modal Ends-->




                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


</div>




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