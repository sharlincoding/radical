<?php include('header.php');?>



<!-- DataTable CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatable/buttons.dataTables.min.css">


                <div class="container-fluid dashboard-section">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="card border-0 dashboard-widget-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="me-4 text-center">
                                                 <h2 class="mb-0 d-card-inner-head">124</h2>
                                                 <p class="mb-0 d-card-para-title">Total Students</p>
                                            </div>
                                            <div>
                                                <!-- <span><i class="fa-solid fa-square-rss d-card-icon"></i></span> -->
                                                <img class="dashboard-icon-img" src="assets/images/icons/total-students.png" src="total-students">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="card border-0 dashboard-widget-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="me-4 text-center">
                                                 <h2 class="mb-0 d-card-inner-head">5000</h2>
                                                 <p class="mb-0 d-card-para-title">Total Amount</p>
                                            </div>
                                            <div>
                                                <img class="dashboard-icon-img" src="assets/images/icons/paid.png" src="paid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="card border-0 dashboard-widget-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="me-4 text-center">
                                                 <h2 class="mb-0 d-card-inner-head">110</h2>
                                                 <p class="mb-0 d-card-para-title">Category</p>
                                            </div>
                                            <div>
                                                <!-- <span><i class="fa-solid fa-users d-card-icon"></i></span> -->
                                                <img class="dashboard-icon-img" src="assets/images/icons/category.png" src="category">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="card border-0 dashboard-widget-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="me-4 text-center">
                                                 <h2 class="mb-0 d-card-inner-head">213</h2>
                                                 <p class="mb-0 d-card-para-title">Course</p>
                                            </div>
                                            <div>
                                                <!-- <span><i class="fa-solid fa-star d-card-icon"></i></span> -->
                                                <img class="dashboard-icon-img" src="assets/images/icons/course.png" src="course">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card dashboard-card">
                                <div class="card-header dashboard-card-header p-3">
                                    <h4 class="card-title mb-0">
                                        Total Students
                                    </h4>
                                    </div>
                                    <div class="card-body">
                                    <div id="legend-container" class="d-flex justify-content-end">
                                        <ul class="legend-list d-flex justify-content-between">
                                            <li class="me-2">
                                                <span class="legend-circle" style="background-color: #66328E;"></span>
                                                <span class="legend-text">Enrolled</span>
                                            </li>
                                            <li>
                                                <span class="legend-circle" style="background-color: #FF5656;"></span>
                                                <span class="legend-text">Unenrolled</span>
                                            </li>
                                        </ul>
                                        </div>
                                        <canvas id="lineChart"></canvas>
                                      

                                    </div>
                            </div>
                        
                        </div>
                    </div>

                    <!-- Table Row -->
                    <div style="margin-top:25px;" class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header p-3">
                                   <h4 class="card-title">Recent News</h4>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                    <div>23/01/2024</div>
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
                                                <td>12</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>23/01/2024</div>
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
                                                <td>13</td>
                                                <td>20221 </td>
                                                <td> John Smith</td>
                                                <td>
                                                    <div>23/01/2024</div>
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
                                                        <textarea class="form-control" id="description" rows="3"></textarea>
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
 
          
  

 <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="assets/js/chart.js"></script>

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