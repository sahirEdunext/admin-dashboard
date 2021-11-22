<?php
   include("header.php"); 
?>

<title>Vouchers</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
                    <h2 class="intro-heading my-0">Vouchers</h2>
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
											
                                            <a href="vouchers-account.php" class="sk_add_tc waves-effect waves-light btn ms-2">
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
                                                <span>Add Voucher</span>
                                            </a>

                                            <a class="pettyCashBtn btn hoverBtn ms-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#Export">
                                                
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
                         <label for="Checkbox_11">Sr. No.</label>
                         <input type="checkbox" id="Checkbox_11" class="inpu_01">
                      </div>
                   </div>				   
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_1">Voucher Code</label>
                         <input type="checkbox" id="Checkbox_1" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_2">Ledger</label>
                         <input type="checkbox" id="Checkbox_2" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_3">Bill No.</label>
                         <input type="checkbox" id="Checkbox_3" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_4">Voucher Type</label>
                         <input type="checkbox" id="Checkbox_4" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_5">Voucher Date</label>
                         <input type="checkbox" id="Checkbox_5" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_6">Narration</label>
                         <input type="checkbox" id="Checkbox_6" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_7">Tot Dr.</label>
                         <input type="checkbox" id="Checkbox_7" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_8">Tot Cr.</label>
                         <input type="checkbox" id="Checkbox_8" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_9">Creation by</label>
                         <input type="checkbox" id="Checkbox_9" class="inpu_01">
                      </div>
                   </div>
                   <div class="col-sm-3 mt-15">
                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                         <label for="Checkbox_10">Created On</label>
                         <input type="checkbox" id="Checkbox_10" class="inpu_01">
                      </div>
                   </div>				   
                   <div class="col-md-12 mt-15">
                      <p>Export File Type:</p>
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
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="receipt_noImpr">Voucher Code</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="enroll_NoImpr" name="enroll_NoImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="enroll_NoImpr">Ledger</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="st_nameImpr" name="st_nameImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="st_nameImpr">Bill No.</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="creation_dateImpr" name="creation_dateImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="creation_dateImpr">Voucher Type</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="imprest_dateImpr" name="imprest_dateImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="imprest_dateImpr">Voucher Date</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="amt_tblImpr" name="amt_tblImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="amt_tblImpr">Narration</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="creation_byImpr" name="creation_byImpr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="creation_byImpr">Tot Dr.</label>
                                                        </li>
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="tot_cr" name="tot_cr" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="tot_cr">Tot Cr.</label>
                                                        </li>		
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="Creation_by" name="Creation_by" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="Creation_by">Creation by</label>
                                                        </li>	
                                                        <li>
                                                        <input class="tblCheckBox" type="checkbox" id="Created_On" name="Created_On" checked>
                                                        <label class="dropdown-item my-0 px-0 tblCheckLabel" href="#" for="Created_On">Created On</label>
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
                                                            <th class="receipt_noImpr">Voucher Code</th>
                                                            <th class="enroll_NoImpr">Ledger</th>
                                                            <th class="st_nameImpr">Bill No.</th>
                                                            <th class="creation_dateImpr">Voucher Type</th>
                                                            <th class="imprest_dateImpr">Voucher Date</th>
                                                            <th class="amt_tblImpr">Narration</th>
                                                            <th class="creation_byImpr">Tot Dr.</th>
                                                            <th class="tot_cr">Tot Cr.</th>
															<th class="Creation_by">Creation by</th>
															<th class="Created_On">Created On</th>
                                                            <th style="width: 3rem;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                1
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                               VOU-54347
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                ICICI Bank Ltd.
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                #BNO-98765
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                               Sale Item
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                28 Oct, 2021
                                                            </td>
                                                            <td class="amt_tblImpr">
                                                               <p class="td_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                            </td>
                                                            <td class="pettyRed creation_byImpr">
                                                                524
                                                            </td>
                                                            <td class="pettyGrn tot_cr">
                                                                524
                                                            </td>
                                                            <td class="Creation_by">
                                                                Shashank Kashyap
                                                            </td>
                                                            <td class="Created_On">
                                                                28 Oct, 2021
                                                            </td>															
															<td class="">
																<div class="d-flex justify-content-center">
																	<div class="dropdown common-dropdown-action">
                                                                        <img src="assets/images/menuIconVouchers.svg" alt="action button" class="dropdown-toggle vouchersImg" data-bs-toggle="dropdown">
																	
																		<ul class="dropdown-menu common-dropdown-content">
																			<li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/edit-icon.svg" alt="edit icon"> <span>Edit</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="delete icon"> <span>Delete</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/menu-icon.svg" alt="menu-icon"> <span>Menu</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/voucher-type-icon.svg" alt="voucher type icon"> <span>Voucher</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/cheque-type-icon.svg" alt="cheque type icon"> <span>Cheque Print</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/update-narration-icon.svg" alt="update narration icon"> <span>Update Narrations</span> </a>
                                                                            </li>																																					
																			
																		</ul>
																	</div>
																</div>
															</td>
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                2
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                              VOU-51724
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                Cash
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                #BNO-91562
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                               Sale Item
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                21 Oct, 2021
                                                            </td>
                                                            <td class="amt_tblImpr">
                                                               <p class="td_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                            </td>
                                                            <td class="pettyRed creation_byImpr">
                                                               1470
                                                            </td>
                                                            <td class="pettyGrn tot_cr">
                                                                1470
                                                            </td>
                                                            <td class="Creation_by">
                                                                Raj kumar Rao
                                                            </td>
                                                            <td class="Created_On">
                                                               21 Oct, 2021
                                                            </td>															
                                                            <td class="">
																<div class="d-flex justify-content-center">
																	<div class="dropdown common-dropdown-action">
                                                                        <img src="assets/images/menuIconVouchers.svg" alt="action button" class="dropdown-toggle vouchersImg" data-bs-toggle="dropdown">
																	
																		<ul class="dropdown-menu common-dropdown-content">
																			<li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="edit icon"> <span>Edit</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="delete icon"> <span>Delete</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/menu-icon.svg" alt="menu-icon"> <span>Menu</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/voucher-type-icon.svg" alt="voucher type icon"> <span>Voucher</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/cheque-type-icon.svg" alt="cheque type icon"> <span>Cheque Print</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/update-narration-icon.svg" alt="update narration icon"> <span>Update Narrations</span> </a>
                                                                            </li>
																																					
																			
																		</ul>
																	</div>
																</div>
															</td>
                                                        </tr>                                

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                3
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                              N/A
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                <p class="td_p">Edunext Technologies</p>
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                #BNO-78721
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                               Sale Item
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                18 Oct, 2021
                                                            </td>
                                                            <td class="amt_tblImpr">
                                                               <p class="td_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                            </td>
                                                            <td class="pettyRed creation_byImpr">
                                                               2100
                                                            </td>
                                                            <td class="pettyGrn tot_cr">
                                                                2100
                                                            </td>
                                                            <td class="Creation_by">
                                                                Richa Singh
                                                            </td>
                                                            <td class="Created_On">
                                                               21 Oct, 2021
                                                            </td>															
                                                            <td class="">
																<div class="d-flex justify-content-center">
																	<div class="dropdown common-dropdown-action">
                                                                        <img src="assets/images/menuIconVouchers.svg" alt="action button" class="dropdown-toggle vouchersImg" data-bs-toggle="dropdown">
																	
																		<ul class="dropdown-menu common-dropdown-content">
																			<li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="edit icon"> <span>Edit</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="delete icon"> <span>Delete</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/menu-icon.svg" alt="menu-icon"> <span>Menu</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/voucher-type-icon.svg" alt="voucher type icon"> <span>Voucher</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/cheque-type-icon.svg" alt="cheque type icon"> <span>Cheque Print</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/update-narration-icon.svg" alt="update narration icon"> <span>Update Narrations</span> </a>
                                                                            </li>
																																					
																			
																		</ul>
																	</div>
																</div>
															</td>
                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                4
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                             VOU-50221
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                                Cash
                                                            </td>
                                                            <td class="st_nameImpr">
                                                                #BNO-68021
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                              Other Item
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                21 Oct, 2021
                                                            </td>
                                                            <td class="amt_tblImpr">
                                                               <p class="td_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                            </td>
                                                            <td class="pettyRed creation_byImpr">
                                                               6520
                                                            </td>
                                                            <td class="pettyGrn tot_cr">
                                                                6520
                                                            </td>
                                                            <td class="Creation_by">
                                                                Omi Pal
                                                            </td>
                                                            <td class="Created_On">
                                                               21 Oct, 2021
                                                            </td>															
                                                            <td class="">
																<div class="d-flex justify-content-center">
																	<div class="dropdown common-dropdown-action">
                                                                        <img src="assets/images/menuIconVouchers.svg" alt="action button" class="dropdown-toggle vouchersImg" data-bs-toggle="dropdown">
																	
																		<ul class="dropdown-menu common-dropdown-content">
																			<li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="edit icon"> <span>Edit</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="delete icon"> <span>Delete</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/menu-icon.svg" alt="menu-icon"> <span>Menu</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/voucher-type-icon.svg" alt="voucher type icon"> <span>Voucher</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/cheque-type-icon.svg" alt="cheque type icon"> <span>Cheque Print</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/update-narration-icon.svg" alt="update narration icon"> <span>Update Narrations</span> </a>
                                                                            </li>
																																					
																			
																		</ul>
																	</div>
																</div>
															</td>
                                                        </tr>  

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                            <td class="s_noImpr">
                                                                5
                                                            </td>
                                                            <td class="receipt_noImpr">
                                                             VOU-50102
                                                            </td>
                                                            <td class="enroll_NoImpr">
                                                               IDFC Bank Ltd.
                                                            </td>
                                                            <td class="st_nameImpr">
                                                               #BNO-58201
                                                            </td>
                                                            <td class="creation_dateImpr">
                                                              Sale Item
                                                            </td>
                                                            <td class="imprest_dateImpr">
                                                                02 Oct, 2021
                                                            </td>
                                                            <td class="amt_tblImpr">
                                                               <p class="td_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                            </td>
                                                            <td class="pettyRed creation_byImpr">
                                                               240
                                                            </td>
                                                            <td class="pettyGrn tot_cr">
                                                                240
                                                            </td>
                                                            <td class="Creation_by">
                                                                Sidharth Malhotra
                                                            </td>
                                                            <td class="Created_On">
                                                               21 Oct, 2021
                                                            </td>															
                                                            <td class="">
																<div class="d-flex justify-content-center">
																	<div class="dropdown common-dropdown-action">
                                                                        <img src="assets/images/menuIconVouchers.svg" alt="action button" class="dropdown-toggle vouchersImg" data-bs-toggle="dropdown">
																	
																		<ul class="dropdown-menu common-dropdown-content">
																			<li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="edit icon"> <span>Edit</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/delete-icon.svg" alt="delete icon"> <span>Delete</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/menu-icon.svg" alt="menu-icon"> <span>Menu</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/voucher-type-icon.svg" alt="voucher type icon"> <span>Voucher</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/cheque-type-icon.svg" alt="cheque type icon"> <span>Cheque Print</span> </a>
                                                                            </li>

                                                                            <li>
                                                                                <a class="dropdown-item" href="#"> <img src="assets/images/update-narration-icon.svg" alt="update narration icon"> <span>Update Narrations</span> </a>
                                                                            </li>
																																					
																			
																		</ul>
																	</div>
																</div>
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