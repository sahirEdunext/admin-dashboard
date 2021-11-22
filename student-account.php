<?php

   include("header.php"); 

?>
<title>Student Account</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
                    <h2 class="intro-heading my-0">Student Account</h2>
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
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Student Ledger
                                            Account</span></a>
                                </li>
                                <li class="nav-item ml-3"> <a class="nav-link" data-bs-toggle="tab"
                                        href="#studentImprestAccount" role="tab"><span class="hidden-sm-up"><i
                                                class="ion-home"></i></span> <span class="hidden-xs-down">Student
                                            Imprest Account</span></a>
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
                                            <p class="m-0">Academic Year: <b class="fw-600"> 2021-22</b> | Student
                                                Status: <b class="fw-600"> Active</b></p>
                                        </li>
                                        <li class="mb-0 sk_p_rela">
                                            <div class="lookup lookup-left d-inline mx-2">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>
                                            <a class="sk_add_tc btn waves-effect waves-light" data-bs-toggle="modal"
                                                data-bs-target="#ledgerFilter">
                                                <i class="fa fa-filter" aria-hidden="true"></i>
                                                <span>Filter</span>
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
                                            <a class="pettyCashBtn waves-effect waves-light btn mx-2 hoverBtn">
                                                    <img src="./assets/images/downloadIcon.svg" alt="" class="btn-icon imgHover">
                                                <span>Save</span>
                                            </a>

                                            <div class="dropdown tblClmFltr d-inline">
                                                <a class="btn imgHover waves-effect waves-light p-0 dropdown-toggle" href="#"
                                                    role="button" id="ledgerTableFilter" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                        <img src="./assets/images/addBarIcon.svg" alt=""
                                                            class="addBarIcon ">
                                                </a>

                                                <div class="dropdown-menu clickNoHide" aria-labelledby="ledgerTableFilter">
                                                    <div class="tblCheckHeading px-3 py-2">
                                                        Show Fields
                                                    </div>
                                                    <div class="lookup lookup-left">
                                                        <input onkeyup="filter(this,'#ldgrFltrTbl')" class="tblCheckSearch" type="text" name="table_Search" placeholder="Search...">
                                                    </div>
                                                    <div class="tblFltrScrDiv">
                                                    <ul id="ldgrFltrTbl" class="px-3 m-0 bb-label-ul">
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="s_no" name="s_no" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="s_no">Sr. No</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="acad_year" name="acad_year" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="acad_year">Academic year</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="class_tbl" name="class_tbl" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="class_tbl">Class</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="section_tbl" name="section_tbl" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="section_tbl">Section</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="add_no" name="add_no" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="add_no">Admission No.</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="st_name" name="st_name" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="st_name">Student Name</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="st_ledger" name="st_ledger" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="st_ledger">Student Ledger</label>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div class="px-3 py-2 d-flex justify-content-between btop-div">
                                                        <button type="button" data-bs-dismiss="modal" class="waves-effect waves-dark btn cancel-btn px-3 py-0">RESET</button>
                                                        <button type="button" class="waves-effect waves-light btn submit-btn px-3 py-0">SAVE</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body inner-digital-tabs px-3 pt-2 py-4">
                                            <div class="">

                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="s_no">Sr. No.</th>
                                                            <th class="acad_year">Academic Year</th>
                                                            <th class="class_tbl">Class</th>
                                                            <th class="section_tbl">Section</th>
                                                            <th class="add_no">Admission No.</th>
                                                            <th class="st_name">Student Name</th>
                                                            <th class="st_ledger" style="text-align: left;">Student Ledger</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
                                                            </td>
                                                        </tr>

                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_no">
                                                                1
                                                            </td>
                                                            <td class="acad_year">
                                                                2021-22
                                                            </td>
                                                            <td class="class_tbl">
                                                                III
                                                            </td>
                                                            <td class="section_tbl">
                                                                C
                                                            </td>
                                                            <td class="add_no">
                                                                I-17 / 1157
                                                            </td>
                                                            <td class="st_name">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="st_ledger">
                                                                <input class="bordered-div-input" type="text"
                                                                    value="lipsum as it is sometimes known, sometimes known is dummy text...">
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
                                <!--  tcRequest   section end -->
                                <div class="tab-pane" id="studentImprestAccount" role="tabpanel">
                                    <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <p class="m-0">Academic Year: <b class="fw-600"> 2021-22</b> | Student
                                                Status: <b class="fw-600"> Active</b></p>
                                        </li>
                                        <li class="mb-0 sk_p_rela">
                                            <div class="lookup lookup-left d-inline mx-2">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>
                                            <a class="sk_add_tc btn waves-effect waves-light" data-bs-toggle="modal"
                                                data-bs-target="#imprestFilter">
                                                <i class="fa fa-filter" aria-hidden="true"></i>
                                                <span>Filter</span>
                                            </a>
                                            <a class="sk_add_tc waves-effect waves-light btn ms-2"
                                                >
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
                                                <span>Add</span>
                                            </a>
                                            <div class="modal center-modal fade sk_modal" id="imprestFilter"
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
                                            <a class="pettyCashBtn btn ms-2 waves-effect waves-light hoverBtn" data-bs-toggle="modal" data-bs-target="#Export">
                                                
                                                    <img src="./assets/images/exportBtnIcon.svg" alt="" class="">
                                               
                                                <span>Export</span>
                                                
                                            </a>
                                            <div class="modal center-modal ri_modal1 fade" id="Export" tabindex="-1" aria-hidden="true">
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
                      <p>Select Export Fields :</p>
                   </div>
				    <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_9">Sr.No.</label>
                         <input type="checkbox" id="Checkbox_9" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_1">Receipt No.</label>
                         <input type="checkbox" id="Checkbox_1" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_2">Enrollment No.</label>
                         <input type="checkbox" id="Checkbox_2" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_3">Student Name</label>
                         <input type="checkbox" id="Checkbox_3" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_4">Creation Date</label>
                         <input type="checkbox" id="Checkbox_4" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_5">Imprest Date</label>
                         <input type="checkbox" id="Checkbox_5" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_6">Amount</label>
                         <input type="checkbox" id="Checkbox_6" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_7">Creation by</label>
                         <input type="checkbox" id="Checkbox_7" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_8">Collection by</label>
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


                                            <div class="dropdown tblClmFltr d-inline">
                                                <a class="btn waves-effect waves-light p-0 dropdown-toggle" href="#"
                                                    role="button" id="imprestTableHide" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="sk_plus_circle">
                                                        <img src="./assets/images/addBarIcon.svg" alt=""
                                                            class="addBarIcon">
                                                    </span>
                                                </a>
                                                <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Dropdown link
                                                </a> -->
                                                <div class="dropdown-menu clickNoHide" aria-labelledby="imprestTableHide">
                                                    <div class="tblCheckHeading px-3 py-2">
                                                        Show Fields
                                                    </div>
                                                    <div class="lookup lookup-left">
                                                        <input onkeyup="filter(this,'#imprfltrlst')" class="tblCheckSearch" type="text" name="table_Search" placeholder="Search...">
                                                    </div>
                                                    <div class="tblFltrScrDiv">
                                                    <ul id="imprfltrlst" class="px-3 m-0 bb-label-ul">
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="s_noImpr" name="s_noImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="s_noImpr">Sr. No</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="receipt_noImpr" name="receipt_noImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="receipt_noImpr">Receipt No.</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="enroll_NoImpr" name="enroll_NoImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="enroll_NoImpr">Enrollment No.</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="st_nameImpr" name="st_nameImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="st_nameImpr">Student Name</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="creation_dateImpr" name="creation_dateImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="creation_dateImpr">Creation Date</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="imprest_dateImpr" name="imprest_dateImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="imprest_dateImpr">Imprest Date</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="amt_tblImpr" name="amt_tblImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="amt_tblImpr">Amount</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="creation_byImpr" name="creation_byImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="creation_byImpr">Creation by</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="tbl_actionImpr" name="tbl_actionImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="tbl_actionImpr">Action</label>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div class="px-3 py-2 d-flex justify-content-between btop-div">
                                                        <button type="button" data-bs-dismiss="modal" class="waves-effect waves-dark btn cancel-btn px-3 py-0">RESET</button>
                                                        <button type="button" class="waves-effect waves-light btn submit-btn px-3 py-0">SAVE</button>
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
                                                            <th class="s_noImpr">Sr. No.</th>
                                                            <th class="receipt_noImpr">Receipt No.</th>
                                                            <th class="enroll_NoImpr">Enrollment No.</th>
                                                            <th class="st_nameImpr">Student Name</th>
                                                            <th class="creation_dateImpr">Creation Date</th>
                                                            <th class="imprest_dateImpr">Imprest Date</th>
                                                            <th class="amt_tblImpr">Amount</th>
                                                            <th class="creation_byImpr">Creation by</th>
                                                            <th class="tbl_actionImpr" style="width: 3rem;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                                EDU123
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                I-17 / 1169
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                Aditi Singh
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                                03 Nov, 2021
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="pettyGrn amt_tblImpr">
                                                                1470
                                                            </td>
                                                            <td class="creation_byImpr">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="tbl_actionImpr">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv" title="Edit"></div>
                                                                    <div class="viewIconDiv" title="View"></div>
                                                                    <div class="menuIconDiv" title="Menu"></div>
                                                                </div>
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