<?php
   include("header.php"); 
?>

<style>
.trialBal-ml{
  margin-left: -2.2rem;	
}
</style>
<title>Trial Balance</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
					<h2 class="intro-heading my-0">
						<span class="h2span">Report &gt; Financial Report &gt; </span> Trial Balance
					</h2>
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

                                    <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <p class="m-0"><b class="fw-600">Filter</b> Financial Year :  2021-22 | From Date : 01-04-2021
											To Date : 31-08-2022</p>
                                        </li>
                                        <li class="mb-0 sk_p_rela">
                                            <a class="sk_add_tc btn waves-effect waves-light" data-bs-toggle="modal"
                                                data-bs-target="#ledgerFilter">
                                                <i class="fa fa-filter" aria-hidden="true"></i>
                                                <span>Filter</span>
                                            </a>											
                                            <a class="sk_add_tc btn waves-effect waves-light" >
                                               <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                <span>Export to PDF</span>
                                            </a>
                                            <a class="sk_add_tc btn waves-effect waves-light" >
                                               <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                                <span>Export to Excel</span>
                                            </a>
                                            <div class="modal center-modal sk_modal fade" id="ledgerFilter"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title modal-t-color"><i
                                                                    class="fa fa-filter pe-2" aria-hidden="true"></i>
                                                                Filter</h5>
                                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="">
                                                                <div class="row sk_dropdown">
                                                                    <div class="col-md-12">
                                                                        <select class="selectpicker"
                                                                            name="Academic Year" id="">
                                                                            <option>Academic Year</option>
                                                                            <option>2021</option>
                                                                            <option>2020</option>
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select class="selectpicker" name="Class" id="">
                                                                            <option>Class</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select class="selectpicker" name="Section"
                                                                            id="">
                                                                            <option>Section</option>
                                                                            <option>A</option>
                                                                            <option>B</option>
                                                                            <option>C</option>
                                                                            <option>D</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <select class="selectpicker" name="Student Type"
                                                                            id="">
                                                                            <option>Student Type</option>
                                                                            <option>Open</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <select class="selectpicker" name="Status"
                                                                            id="">
                                                                            <option>Status</option>
                                                                            <option>Pending</option>
                                                                            <option>Pending</option>
                                                                            <option>Pending</option>
                                                                            <option>Pending</option>
                                                                            <option>Pending</option>
                                                                            <option>Pending</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <select class="selectpicker" name="Order by"
                                                                            id="">
                                                                            <option>Order by</option>
                                                                            <option>Odd</option>
                                                                            <option>Odd</option>
                                                                            <option>Odd</option>
                                                                            <option>Odd</option>
                                                                            <option>Odd</option>
                                                                            <option>Odd</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer text-end">
                                                            <button type="button" data-bs-dismiss="modal"
                                                                class="waves-effect waves-dark btn cancel-btn">CANCEL</button>
                                                            <button type="button"
                                                                class="waves-effect waves-light btn submit-btn">APPLY</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="">

                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="">Sr. No.</th>
                                                            <th class="">Particulars</th>
                                                            <th class="text-end"><span class="trialBal-ml">Opening Balance</span></th>
															<th class=""></th>
                                                            <th class="text-end"><span class="trialBal-ml">For the Period</span></th>
															<th class=""></th>
                                                            <th class="text-end"><span class="trialBal-ml">Closing Balance</span></th>
															<th class=""></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                
                                                            </td>
                                                            <td class="">
                                                               
                                                            </td>
                                                            <td class="">
                                                                Debit
                                                            </td>
                                                            <td class="">
                                                                Credit
                                                            </td>
                                                            <td class="">
                                                                Debit
                                                            </td>
                                                            <td class="">
                                                                Credit
                                                            </td>
                                                            <td class="">
                                                                Debit
                                                            </td>
                                                            <td class="">
                                                                Credit
                                                            </td>															
                                                        </tr>
                                                        
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="total_income">
                                                               <a href="javascript:void(0)">Capital Account</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>															
                                                        </tr>
                                                        
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                2
                                                            </td>
                                                            <td class="total_income">
                                                              <a href="javascript:void(0)"> Test them All</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>															
                                                        </tr>
														
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                3
                                                            </td>
                                                            <td class="total_income">
                                                               <a href="javascript:void(0)">Current Assets</a>
                                                            </td>
                                                            <td class="">
                                                                1100.00
                                                            </td>
                                                            <td class="">
                                                               1100.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               9600.00
                                                            </td>															
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                4
                                                            </td>
                                                            <td class="total_income">
                                                              <a href="javascript:void(0)"> Capital Account</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>															
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                5
                                                            </td>
                                                            <td class="total_income">
                                                              <a href="javascript:void(0)"> Fixed Assets</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>															
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                6
                                                            </td>
                                                            <td class="total_income">
                                                              <a href="javascript:void(0)"> Investment</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>															
                                                        </tr>	

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                7
                                                            </td>
                                                            <td class="total_income">
                                                               <a href="javascript:void(0)">Branch / Divisions</a>
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>															
                                                        </tr>	

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                8
                                                            </td>
                                                            <td class="total_income">
                                                              <a href="javascript:void(0)"> Current Liabilities</a>
                                                            </td>
                                                            <td class="">
                                                                10550.00
                                                            </td>
                                                            <td class="">
                                                               10550.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                9500.00
                                                            </td>
                                                            <td class="">
                                                               0.00
                                                            </td>															
                                                        </tr>															

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                9
                                                            </td>
                                                            <td class="total_income">
                                                               <a href="javascript:void(0)">Sales Accounts</a>
                                                            </td>
                                                            <td class="">
                                                                11650.00
                                                            </td>
                                                            <td class="">
                                                               11650.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                9500.00
                                                            </td>
                                                            <td class="">
                                                              9600.00
                                                            </td>															
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                Total
                                                            </td>
                                                            <td>
                                                               
                                                            </td>
                                                            <td class="">
                                                               11650.00
                                                            </td>
                                                            <td class="">
                                                               11750.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                0.00
                                                            </td>
                                                            <td class="">
                                                                9500.00
                                                            </td>
                                                            <td class="">
                                                              9600.00
                                                            </td>															
                                                        </tr>														
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="complex_header_info"
                                                            role="status" aria-live="polite">Page 1 of 200</div>
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