<?php include "staticfile/top_header.php"; ?>

                <div class="container-fluid">
                
                    <div class="container-fluid">
                    <!-- <h3 class="text-dark mb-4">Orders</h3> -->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            
                            <div class="row">
                            <div class="col-md-4 col-xl-1">
                                    <div class="text-md-end "><label class="">      <p class="text-primary m-0 fw-bold">Order 1 </p> </label></div>
                                </div>
                                <div class="col-md-8 col-xl-3  text-nowrap">
                                    <p class="text-primary m-0 fw-bold"> Customer Name : Ali Ahmed </p>
                                </div>
                                <div class="col-md-4 col-xl-2">
                                    <div class="text-md-end "><label class="form-label">      <p class="text-primary m-0 fw-bold">Code : 58798 </p> </label></div>
                                </div>
                               
                            </div> 
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
                                    <th>ID</th>
                                            <th>Link</th>
                                            <th>Customer Notes</th>       
                                            <th>Price</th> 
                                           
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                            <td>https://www.trendyol.com/dilvin/3576-fitilli-</td>
                                            <td>Note note note note </td>
                                            <td>30$</td>
                                        </tr>
                                        <tr>
                                        <td>2</td>
                                            <td>https://www.trendyol.com/dilvin/3576-fitilli-</td>
                                            <td>Note note note note </td>
                                            <td>50$</td>
                                        </tr>
                                        <tr>
                                        <td>3</td>
                                            <td>https://www.trendyol.com/dilvin/3576-fitilli-</td>
                                            <td>Note note note note </td>
                                            <td>80$</td>
                                        </tr>
                                        <tr>
                                 
                                    </tbody>
                                    <tfoot style="border: none; border-color:white;">
                                        <tr>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                            <td><strong></strong></td>
                                            <td><strong>Totals: 160$</strong></td>

                                        </tr>
                                    </tfoot>
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
                    <div class="card-header py-3">
                            
                            <div class="row">
                            <div class="col-md-8 col-xl-4">
                                    <div class="text-md-end "><label class="">  </label></div>
                                </div>
                                <div class="col-md-8 col-xl-1  text-nowrap" >
                                <div class="mb-3" ><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px; background:white; color:black" >Finish</button></div>
                                </div>
                                
                                <div class="col-md-8 col-xl-4  text-nowrap">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px" >Send to Customer</button></div>
                                </div>
                               
                            </div> 
                        </div>
              </div>
            </div>
            </div>

            <?php include "staticfile/footer.php"; ?>
