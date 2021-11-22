<?php

   include("header.php"); 

?>
<title>Cheque List</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div class="box box-default border-shadow">
                        <!-- /.box-header -->
                        <div class="box-body  pettytblBody p-0">
                            <!-- <ul class="nav nav-tabs pt-2 customtab2" role="tablist">
                                <li class="nav-item ml-3"> <a class="nav-link active" data-bs-toggle="tab"
                                        href="#studentChequeList" role="tab"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Student Ledger
                                            Account</span></a>
                                </li>
                                <li class="nav-item ml-3"> <a class="nav-link" data-bs-toggle="tab"
                                        href="#studentImprestAccount" role="tab"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Student
                                            Imprest Account</span></a>
                                </li>


                            </ul> -->
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--  tcRequest   section strat -->
                                <div class="tab-pane active" id="studentChequeList" role="tabpanel">
                                    <ul class="px-4 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <a class="filter_btn" data-bs-toggle="modal" data-bs-target="#chequeFilter">
                                                <i class="fa fa-filter" aria-hidden="true"></i>
                                                <span>Filter</span>
                                            </a>
                                            <div class="modal center-modal sk_modal fade" id="chequeFilter"
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
                                                            class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                                        <button type="button"
                                                            class="waves-effect waves-light btn bg-gradient-primary submit-btn">APPLY</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="mb-0 sk_p_rela">
                                            <div class="lookup lookup-left d-inline me-3">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>

                                            <a class="pettyCashBtn me-3">
                                                <span class="sk_plus_circle">
                                                    <img src="../images/exportBtnIcon.svg" alt="" class="">
                                                </span>
                                                <span>Export</span>
                                            </a>

                                  
                                            <a class="pettyCashBtn me-3">
                                                <span class="sk_plus_circle">
                                                    <img src="../images/downloadIcon.svg" alt="" class="btn-icon">
                                                </span>
                                                <span>Save</span>
                                            </a>

                                            <a class="">
                                                <span class="sk_plus_circle">
                                                    <img src="../images/addBarIcon.svg" alt="" class="addBarIcon">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="">

                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>Sr. No.</th>
                                                            <th>Academic year</th>
                                                            <th>Class</th>
                                                            <th>Section</th>
                                                            <th>Admission No.</th>
                                                            <th>Student Name</th>
                                                            <th style="text-align: left;">Student Ledger</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                2021-22
                                                            </td>
                                                            <td class="">
                                                                III
                                                            </td>
                                                            <td class="">
                                                                C
                                                            </td>
                                                            <td class="">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="">
                                                                <input class="bordered-div-input" type="text" value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                2021-22
                                                            </td>
                                                            <td class="">
                                                                III
                                                            </td>
                                                            <td class="">
                                                                C
                                                            </td>
                                                            <td class="">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="">
                                                                <input class="bordered-div-input" type="text" value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                2021-22
                                                            </td>
                                                            <td class="">
                                                                III
                                                            </td>
                                                            <td class="">
                                                                C
                                                            </td>
                                                            <td class="">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="">
                                                                <input class="bordered-div-input" type="text" value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                2021-22
                                                            </td>
                                                            <td class="">
                                                                III
                                                            </td>
                                                            <td class="">
                                                                C
                                                            </td>
                                                            <td class="">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="">
                                                                <input class="bordered-div-input" type="text" value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                2021-22
                                                            </td>
                                                            <td class="">
                                                                III
                                                            </td>
                                                            <td class="">
                                                                C
                                                            </td>
                                                            <td class="">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="">
                                                                <input class="bordered-div-input" type="text" value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
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