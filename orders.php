<?php include "staticfile/top_header.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div> -->
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                            <th>View </th>
                                           
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                            <td>Ahmed Ali</td>
                                            <td>54587</td>
                                            <td>processing</td>
                                          
                                            <td>  <a href="order_details.php" class="btn btn-primary btn-icon-split btn-sm"> <span class="text">More details</span>
                                    </a></td>
                                        </tr>
                                        <tr>
                                        <td>2</td>
                                            <td>Younis Yasser</td>
                                            <td>78914</td>
                                            <td>under process</td>
                                            <td>  <a href="order_details.php" class="btn btn-primary btn-icon-split btn-sm"> <span class="text">More details</span>
                                    </a></td>
                                        </tr>
                                        <tr>
                                        <td>3</td>
                                            <td>Zaid Omer</td>
                                            <td>54683</td>
                                            <td>processing</td>
                                            <td>  <a href="order_details.php" class="btn btn-primary btn-icon-split btn-sm"> <span class="text">More details</span>
                                    </a></td>
                                        </tr>
                                        <tr>
                                        <td>4</td>
                                            <td>Mohammed Omaran</td>
                                            <td>9654</td>
                                            <td>processing</td>
                                            <td>  <a href="order_details.php" class="btn btn-primary btn-icon-split btn-sm"> <span class="text">More details</span>
                                    </a></td>
                                        </tr>
                                 
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include "staticfile/footer.php"; ?>
