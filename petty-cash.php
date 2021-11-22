<?php

   include("header.php"); 

?>
<title>Petty Cash</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div><h2 class="intro-heading my-0">Petty Cash</h2></div>
                <div><p class="help my-0"><i class="fa fa-question-circle-o me-1" aria-hidden="true"></i> Help</p></div>
            </div>
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div class="box box-default border-shadow">
                        <!-- /.box-header -->
                        <div class="box-body  pettytblBody p-0">
                            <ul class="nav nav-tabs pt-2 customtab2" role="tablist">
                                <li class="nav-item ml-3"> <a class="nav-link active" data-toggle="tab"
                                        href="#tcRequest" role="tab" aria-selected="true"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Petty
                                            Cash</span></a>
                                </li>
                                <!-- <li class="nav-item ml-3"> <a class="nav-link" data-toggle="tab" href="#applyLeave" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span
                                    class="hidden-xs-down">Apply Leave</span></a> </li> -->

                            </ul>
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--  tcRequest   section strat -->
                                <div class="tab-pane active" id="tcFRequest" role="tabpanel">
                                    <ul class="px-1_25 py-2 d-sm-flex sk_header_bg align-items-center justify-content-end m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <div class="lookup lookup-left">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li class="mb-0 sk_p_rela">
                                            <a href="https://edunextstudio.com/new-admin-dashboard/add-petty-cash.php" role="button"class="sk_add_tc waves-effect waves-light btn mx-2">
                                                <span class="sk_plus_circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-plus-circle"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                        </path>
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span>Add Petty Cash</span>
                                            </a>
                                            <a class="pettyCashBtn waves-effect waves-light btn hoverBtn" data-bs-toggle="modal" data-bs-target="#exportPettyCash">
                                               
                                                <img src="./assets/images/exportBtnIcon.svg" alt="" class="">
                                               
                                                <span>Export</span>
                                            </a>

                                            <!-- Export Modal Pop Up Code Start Here -->

                                            <div class="modal center-modal ri_modal1 fade" id="exportPettyCash" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title modal-t-color">
                                                Export File
                                             </h5>
                                             <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                          </div>
                                          <div class="modal-body">
                                             <form action="">
                                                <div class="row sk_dropdown">
                                                   <div class="col-md-12">
                                                      <p>Select Export Fields</p>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_11">Sr. No.</label>
                                                         <input type="checkbox" id="Checkbox_11" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_1">Date</label>
                                                         <input type="checkbox" id="Checkbox_1" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_2">Opening Balance</label>
                                                         <input type="checkbox" id="Checkbox_2" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_3">Total Incomes</label>
                                                         <input type="checkbox" id="Checkbox_3" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_4">Total Expenses</label>
                                                         <input type="checkbox" id="Checkbox_4" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_5">Total Deposits</label>
                                                         <input type="checkbox" id="Checkbox_5" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_6">Closing Balance</label>
                                                         <input type="checkbox" id="Checkbox_6" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_7">Created By</label>
                                                         <input type="checkbox" id="Checkbox_7" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_8">Remarks</label>
                                                         <input type="checkbox" id="Checkbox_8" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="col-md-12 mt-15">
                                                      <p>Export File Type :</p>
                                                   </div>
                                                   <div class="col-sm-12 mt-10 d-flex">
                                                      <div class="radion_01 me-20 active" onclick="onSelectUserType(1)">
                                                         <span class="me-5 ri_input_color"><img src="assets/images/excel.svg" alt="user-img"> Excel</span>
                                                         <input type="radio" id="html" name="fav_language" value="HTML" checked>
                                                      </div>
                                                      <div class="radion_01" onclick="onSelectUserType(2)">
                                                         <span class="me-5 ri_input_color"><img src="assets/images/pdf.svg" alt="user-img"> PDF</span>
                                                         <input type="radio" id="html2" name="fav_language" value="HTML">
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="modal-footer text-end">
                                             <button type="button" data-bs-dismiss="modal"
                                                class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                             <button type="button"
                                                class="waves-effect waves-light btn bg-gradient-primary submit-btn">DOWNLOAD</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                            
                                            <!-- Export Modal Pop Up Code End Here -->


                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="table-responsive">

                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>Sr. No.</th>
                                                            <th>Date</th>
                                                            <th>Opening Balance
                                                            </th>
                                                            <th>Total Incomes</th>
                                                            <th>Total Expenses
                                                            </th>
                                                            <th aria-sort="">Total
                                                                Deposits</th>
                                                            <th>Closing Balance
                                                            </th>
                                                            <th>Created By</th>
                                                            <th>Remarks</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="add-petty-cash.php"><div class="editIconDiv"></div></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                2
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                3
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                4
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                5
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                6
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                7
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                8
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                9
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="sr_no">
                                                                10
                                                            </td>
                                                            <td class="">
                                                                21 Aug, 2021
                                                            </td>
                                                            <td class="opening_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="total_income">
                                                                184755.00
                                                            </td>
                                                            <td class="total_expense">
                                                                184755.00
                                                            </td>
                                                            <td class="total_deposit">
                                                                184755.00
                                                            </td>
                                                            <td class="closing_bal">
                                                                184755.00
                                                            </td>
                                                            <td class="created_by">
                                                                Surjeet Pal
                                                            </td>
                                                            <td class="">
                                                                BAL C/F and other
                                                            </td>
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row width-100">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="complex_header_info"
                                                            role="status" aria-live="polite">Showing 1 to 10 of 57
                                                            entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers"
                                                            id="complex_header_paginate">
                                                            <ul class="pagination justify-content-end m-0">
                                                                <li class="paginate_button page-item previous disabled"
                                                                    id="complex_header_previous"><a href="#"
                                                                        class="page-link">Previous</a></li>
                                                                <li class="paginate_button page-item active"><a href="#"
                                                                        class="page-link">1</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        class="page-link">2</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        class="page-link">3</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        class="page-link">4</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        class="page-link">5</a></li>
                                                                <li class="paginate_button page-item "><a href="#"
                                                                        class="page-link">6</a></li>
                                                                <li class="paginate_button page-item next"
                                                                    id="complex_header_next"><a href="#"
                                                                        class="page-link">Next</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  tcRequest   section end -->



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

<?php

   include("footer.php"); 

?>