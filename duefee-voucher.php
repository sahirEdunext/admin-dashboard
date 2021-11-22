<?php

   include("header.php"); 

?>


<title>Due Student Fee Voucher</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
                    <h2 class="intro-heading my-0">Due Student Fee Voucher</h2>
                </div>
                <div>
                    <p class="help my-0"><i class="fa fa-question-circle-o me-1" aria-hidden="true"></i> Help</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div class="box box-default border-shadow">
                        <!-- /.box-header -->
                        <div class="box-body  pettytblBody p-0">
                            <ul class="nav nav-tabs pt-2 customtab2" role="tablist">
                                <li class="nav-item ml-3"> <a class="nav-link active" data-bs-toggle="tab"
                                        href="#studentLedgerAccount" role="tab"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Due Student Fee Voucher</span></a>
                                </li>
                                <li class="nav-item ml-3"> <a class="nav-link" data-bs-toggle="tab"
                                        href="#studentImprestAccount" role="tab"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Summary</span></a>
                                </li>

                            </ul>
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--  tcRequest   section strat -->
                                <div class="tab-pane active" id="studentLedgerAccount" role="tabpanel">
                                    <ul class="px-4 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <p class="m-0">Due Student Fee Voucher Information</p>
                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body inner-digital-tabs px-3 pt-2 py-4">
                                            <div class="">
											<div class="custom_heightmin">
                                                <div class="row">
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Academic Year" class="ps-3 pb-1 color_label">Academic Year</label>
                                                      <select class="selectpicker select-hidden" name="" id="">
                                                         <option>Select Academic Year</option>
                                                         <option>2021</option>
                                                         <option>2020</option>
                                                         <option>2019</option>
                                                         <option>2018</option>
                                                      </select>
                                                   </div>
                                                   
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Class" class="ps-3 pb-1 color_label">Class</label>
                                                      <select class="selectpicker select-hidden" name="" id="">
                                                         <option>Select Class</option>
                                                         <option>I</option>
                                                         <option>II</option>
                                                         <option>III</option>
                                                         <option>IV</option>
                                                      </select>
                                                   </div>

                                                  <div class="col-sm-6 mt-2">
                                                      <label for="Section" class="ps-3 pb-1 color_label">Section</label>
                                                      <select class="selectpicker select-hidden" name="" id="">
                                                         <option>Select Section</option>
                                                         <option>A</option>
                                                         <option>B</option>
                                                         <option>C</option>
                                                         <option>D</option>
                                                      </select>
                                                   </div>
                                                   
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Student" class="ps-3 pb-1 color_label">Student</label>
                                                      <select class="selectpicker select-hidden" name="" id="">
                                                         <option>Select Student</option>
                                                         <option>Student 1</option>
                                                         <option>Student 2</option>
                                                         <option>Student 3</option>
                                                         <option>Student 4</option>
                                                      </select>
                                                   </div>
												   
												  </div> 
												 </div>
												 
                                                <div class="row">
												   <div class="col-sm-12 mt-4 text-end">
													  <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
													  <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
												   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  tcRequest   section end -->
                                <div class="tab-pane" id="studentImprestAccount" role="tabpanel">
                                    <!--<ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <p class="m-0">Due Student Fee Voucher Information</p>
                                        </li>
                                    </ul>-->
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="">
												<div class="custom_heightmin">
                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="s_noImpr">Sr. No.</th>
                                                            <th class="receipt_noImpr">Start Date Time</th>
                                                            <th class="enroll_NoImpr">Academic Year</th>
                                                            <th class="st_nameImpr">Class Name</th>
                                                            <th class="creation_dateImpr">From Date</th>
                                                            <th class="imprest_dateImpr">Status</th>
                                                            <th class="tbl_actionImpr" style="width: 3rem;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                17 Nov, 2021 01:42 PM
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                2021-22
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Prep-Nursery
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="total_deposit">
                                                               Completed
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                2
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                14 Nov, 2021 01:42 PM
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                2021-22
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                I-A
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                17 Oct, 2021
                                                            </td>
                                                            <td class="total_deposit">
                                                               Completed
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                3
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                11 Nov, 2021 01:42 PM
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                2021-22
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                VI-A
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                17 Oct, 2021
                                                            </td>
                                                            <td class="closing_bal">
                                                               Pending
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>														
                           
                                                    </tbody>
                                                </table>
												</div>
												</div>
                                                <div class="row">
												   <div class="col-sm-12 mt-4 text-end">
													  <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
													  <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
												   </div>
                                                </div>
												
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
<script src="../assets/vendor_components/datatable/datatables.min.js"></script>

<?php

   include("footer.php"); 

?>