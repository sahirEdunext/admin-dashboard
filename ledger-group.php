<?php

   include("header.php"); 

?>
<title>Ledger Group</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
			<div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div><h2 class="intro-heading my-0"><span class="h2span">Setup &gt;</span> Ledger Group</h2></div>
                <div><p class="help my-0"><i class="fa fa-question-circle-o me-1" aria-hidden="true"></i> Help</p></div>
            </div>		
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div class="box box-default border-shadow">
                        <!-- /.box-header -->
                        <div class="box-body  pettytblBody p-0">
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--  tcRequest   section strat -->
                                <div class="tab-pane active" id="tcFRequest" role="tabpanel">
                                    <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-end m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <div class="lookup lookup-left">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li class="mb-0 ms-2">
											<a class="sk_add_tc">
													<i class="fa fa-filter" aria-hidden="true"></i>
													<span>Filter</span>
											</a>
                                        </li>											
                                        <li class="mb-0 sk_p_rela">
                                            <a class="sk_add_tc ms-2" data-bs-toggle="modal" data-bs-target="#ledgerFilter">
                                                <span class="sk_plus_circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"> </path> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"> </path> </svg>
                                                </span>
                                                <span>Add Ledger Groups</span>
                                            </a>
                                        </li>
                                        <li class="mb-0 ms-2">
                                            <a class="pettyCashBtn waves-effect waves-light btn hoverBtn" data-bs-toggle="modal" data-bs-target="#exportLedgerGroup">
                                           <img src="./assets/images/exportBtnIcon.svg" alt="" class="">
                                               
                                                <span>Export</span>
                                            </a>

                               <!-- Export Modal Pop Up Code Start Here -->

                                    <div class="modal center-modal ri_modal1 fade" id="exportLedgerGroup" tabindex="-1"
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
                                                      <p>Select Export Fields :</p>
                                                   </div>
												     <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_6">Sr. No.</label>
                                                         <input type="checkbox" id="Checkbox_6" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_1">Sequence</label>
                                                         <input type="checkbox" id="Checkbox_1" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_2">Name</label>
                                                         <input type="checkbox" id="Checkbox_2" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_3">Nature of Group</label>
                                                         <input type="checkbox" id="Checkbox_3" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_4">Balance Type</label>
                                                         <input type="checkbox" id="Checkbox_4" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_5">Under Group</label>
                                                         <input type="checkbox" id="Checkbox_5" class="inpu_01">
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
                                            <div class="">
                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
															<th>
																<input type="checkbox" id="select-all">
															</th>
                                                            <th>Sr. No.</th>
                                                            <th>Sequence</th>
                                                            <th>Name</th>
                                                            <th>Nature of Group</th>
                                                            <th>Balance Type</th>
                                                            <th>Under Group</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="">
															</td>                                                          
														  <td class="">
                                                                1
                                                           </td>
                                                            <td class="">
                                                                10
                                                            </td>
                                                            <td class="">
                                                                Testing them all
                                                            </td>
															<td class="">Assets</td>
															<td class="">Credit</td>
															<td class="">Current Assets</td>															
                                                            <td class="">
																<div class="d-flex justify-content-end">
																	<a data-bs-toggle="modal" data-bs-target="#ledgerFilter">					
																		<div class="editIconDiv"></div>
																	</a>

													<div class="modal center-modal sk_modal fade" id="ledgerFilter" tabindex="-1" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title modal-t-color">
																		Add/Edit Ledger Groups</h5>
																	<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
																</div>
																<div class="modal-body">
																	<form action="">
																		<div class="row sk_dropdown">
																		<div class="col-md-12">																		
																				<p class="mb-5">Ledger Groups Information</p>
																			</div>
																			<div class="col-md-12">
																				<div class="form-group">
																				  <input type="text" class="form-control" placeholder="Sequence">
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-group">
																				  <input type="text" class="form-control" placeholder="Name">
																				</div>
																			</div>	
																			<div class="col-md-6">
																				<select class="selectpicker" name="Cheque Signed" id="">
																					<option>Select Nature</option>
																					<option>Nature of Group 1</option>
																					<option>Nature of Group 2</option>
																				</select>
																			</div>	
																			<div class="col-md-6">
																				<select class="selectpicker" name="Cheque Signed" id="">
																					<option>Select Balance</option>
																					<option>Balance Type 1</option>
																					<option>Balance Type 2</option>
																				</select>
																			</div>	
																			<div class="col-md-12">
																				<div class="form-group">
																				  <input type="text" class="form-control" placeholder="Under Group">
																				</div>
																			</div>																								
																			<div class="col-md-12">
																				<div class="form-group">
																				   <textarea class="form-control" id="" rows="3" placeholder="Description"></textarea>
																				</div>
																			</div>	

																		</div>
																	</form>
																</div>
																<div class="modal-footer text-end">
																	<button type="button" data-bs-dismiss="modal"
																		class="waves-effect waves-light btn cancel-btn">CANCEL</button>
																	<button type="button"
																		class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
																</div>
															</div>
														</div>
														</div>
															
														</div>
																
                                                            </td>
                                                        </tr>
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                2
                                                           </td>
                                                            <td class="">
                                                                420.0
                                                            </td>
                                                            <td class="">
                                                                Bank Accounts
                                                            </td>
															<td class="">Liabilities</td>
															<td class="">Credit</td>
															<td class="">Current Assets</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                3
                                                           </td>
                                                            <td class="">
                                                                410.0
                                                            </td>
                                                            <td class="">
                                                                Cash-In- Hand
                                                            </td>
															<td class="">Liabilities</td>
															<td class="">Debit</td>
															<td class="">Current Liabilities</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                4
                                                           </td>
                                                            <td class="">
                                                                390.0
                                                            </td>
                                                            <td class="">
                                                                Unsecured Loans
                                                            </td>
															<td class="">Assets</td>
															<td class="">Credit</td>
															<td class="">Loans (Liability)</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                5
                                                           </td>
                                                            <td class="">
                                                                380.0
                                                            </td>
                                                            <td class="">
                                                                Loan Advance (Assets)
                                                            </td>
															<td class="">Assets</td>
															<td class="">Credit</td>
															<td class="">Loans (Liability)</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                6
                                                           </td>
                                                            <td class="">
                                                                370.0
                                                            </td>
                                                            <td class="">
                                                                Provisions
                                                            </td>
															<td class="">Assets</td>
															<td class="">Debit</td>
															<td class="">Capital Account</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
								                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<input type="checkbox" id="Checkbox_1" class="checkbox">
															</td>                                                          
														  <td class="">
                                                                7
                                                           </td>
                                                            <td class="">
                                                                360.0
                                                            </td>
                                                            <td class="">
                                                                Duties & Taxes
                                                            </td>
															<td class="">Liabilities</td>
															<td class="">Credit</td>
															<td class="">Current Liabilities</td>															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>														
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="complex_header_info"
                                                            role="status" aria-live="polite">Page 1 of 200
														</div>
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