<?php

   include("header.php"); 

?>

<title>Payment Type Ledgers</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
			<div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div><h2 class="intro-heading my-0"><span class="h2span">Setup &gt;</span> Payment Type Ledgers</h2></div>
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
                                                            <th>Payment Type</th>
                                                            <th>Ledger Name</th>
                                                            <th>Cost Center</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_2">
																	  <label for="Checkbox_2"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                1
                                                           </td>
                                                            <td class="">
                                                               Online
                                                            </td>
                                                           
															<td class="">GST</td>
															<td class="">HDFC Bank</td>
																													
                                                            <td class="">
																<div class="d-flex justify-content-end">
																	<a data-bs-toggle="modal" data-bs-target="#ledgerFilter">					
																		<div class="editIconDiv"></div>
																	</a>

													<div class="modal center-modal sk_modal fade" id="ledgerFilter" tabindex="-1"
																				aria-hidden="true">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title modal-t-color">
                                                                            Add/Edit Payment Type Ledgers</h5>
																			<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
																		</div>
																		<div class="modal-body">
																			<form action="">
																		
																				<div class="row sk_dropdown btn-mr">
																				<div class="col-md-12">																		
																				<p class="mb-10">Payment Type Ledger Information</p>
																			</div>
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Name">
																						</div>
																					</div>	
																					<div class="col-md-6 ">
																						<select class="selectpicker nys" name="Cheque Signed"id="">
																						<option>Ledger</option>
																							<option>GST</option>
																							<option>Diwan & Sons</option>
																							
																						</select>
																					</div>
																				 <div class="offset-md-6 col-md-6 d-flex justify-content-between">
																					<p>Default</p>
																					<button type="button" class="btn btn-sm btn-secondary btn-toggle as_btn" data-toggle="button" aria-pressed="true" autocomplete="off">
																					   <div class="handle"></div>
																					</button>																					
																					</div>	
																				
																				
																																									
																							<div class="col-md-12">
																						<select class="selectpicker" name="Cheque Signed" id="">
																							<option>Cost Center</option>
																							<option>HDFC Bank</option>
																							<option>ICICI Bank</option>
																						</select>
																					</div>	
	                                                                               																				
																					<div class="col-md-12">
																						<select class="selectpicker" name="Cheque Signed"
																							id="">
																							<option>Payment Type</option>
																							<option>Cash</option>
																							<option>Cheque</option>
																						</select>
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
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_3">
																	  <label for="Checkbox_3"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                2
                                                           </td>
                                                            <td class="">
                                                               Student Impress Account
                                                            </td>
                                                           
															<td class="">TDS Contractor</td>
															<td class="">ICICI Bank</td>
																													
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_4">
																	  <label for="Checkbox_4"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                3
                                                           </td>
                                                            <td class="">
                                                               Debit/Credit Card
                                                            </td>
                                                          
															<td class="">Diwan & Sons</td>
															<td class="">HDFC Bank</td>
																											
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_5">
																	  <label for="Checkbox_5"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                4
                                                           </td>
                                                            <td class="">
                                                              NEFT
                                                            </td>
                                                           
															<td class="">GST</td>
															<td class="">ICICI Bank</td>
															
                                                            <td class="">
                                                                <div class="d-flex justify-content-end">
                                                                    <div class="editIconDiv"></div>
                                                                </div>
                                                            </td>
                                                        </tr>	
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
															<td>
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_6">
																	  <label for="Checkbox_6"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                5
                                                           </td>
                                                            <td class="">
                                                                DD
                                                            </td>
                                                           
															<td class="">Edunext Demo</td>
															<td class="">ICICI Bank</td>
																														
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