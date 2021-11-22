<?php

   include("header.php"); 

?>
<title>Voucher Scheme</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
			<div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div><h2 class="intro-heading my-0"><span class="h2span">Setup &gt;</span> Voucher Scheme</h2></div>
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
                                        <li class="mb-0 sk_p_rela">
                                            <a class="sk_add_tc ms-2" data-bs-toggle="modal" data-bs-target="#ledgerFilter">
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
                                                <span>Add Voucher Scheme</span>
                                            </a>
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
                                                            <th>Receipt Type</th>
                                                            <th>Prefix</th>
                                                            <th>Separator</th>
                                                            <th>Starting No.</th>
                                                            <th>Last No. Generated</th>
															<th>Is Auto</th>
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
                                                                Accounting Voucher Type-1
                                                            </td>
                                                           
															<td class="">REC</td>
															<td class="">/</td>
															<td class="">1</td>
															<td class="">N/A</td>
                                                             <td class="pettyGrn">
                                                                <span class="spn-pettyGrn"> Yes</span>
                                                            </td>															
                                                            <td class="">
																<div class="d-flex justify-content-end">
																	<a data-bs-toggle="modal" data-bs-target="#ledgerFilter">					
																		<div class="editIconDiv"></div>
																	</a>

													<div class="modal center-modal ri_modal fade" id="ledgerFilter" tabindex="-1"
																				aria-hidden="true">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title modal-t-color">
																				Add/Edit Voucher Scheme</h5>
																			<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
																		</div>
																		<div class="modal-body">
																			<form action="">
																				<div class="row sk_dropdown">
																					<div class="col-md-12">
																						<select class="selectpicker" name="Cheque Signed"
																							id="">
																							<option>Select Voucher Type</option>
																							<option>Voucher 1</option>
																							<option>Voucher 2</option>
																						</select>
																					</div>	
																					<div class="col-md-12 d-flex justify-content-between">
																					<p>Is Auto</p>
																					<button type="button" class="btn btn-sm btn-secondary btn-toggle" data-toggle="button" aria-pressed="true" autocomplete="off">
																					   <div class="handle"></div>
																					</button>																					
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Prefix">
																						</div>
																					</div>	
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Separator">
																						</div>
																					</div>	
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Starting No.">
																						</div>
																					</div>																					
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Zero Padding">
																						</div>
																					</div>																							
																					<div class="col-md-6">
																						<div class="form-group">
																						  <input type="text" class="form-control" placeholder="Postfix">
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
																<div class="checkbox checkCenter">
																	  <input type="checkbox" id="Checkbox_3">
																	  <label for="Checkbox_3"></label>
																</div>
															</td>                                                          
														  <td class="">
                                                                2
                                                           </td>
                                                            <td class="">
                                                                Accounting Voucher Type-2
                                                            </td>
                                                           
															<td class="">CON</td>
															<td class="">/</td>
															<td class="">1</td>
															<td class="">1028</td>
                                                             <td class="pettyGrn">
                                                                <span class="spn-pettyGrn"> Yes</span>
                                                            </td>															
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
                                                                Accounting Voucher Type-3
                                                            </td>
                                                          
															<td class="">BP</td>
															<td class="">/</td>
															<td class="">1</td>
															<td class="">14732</td>	
                                                            <td class="pettyRed">
                                                                <span class="spn-pettyRed">No</span>
                                                            </td>															
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
                                                                Accounting Voucher Type-4
                                                            </td>
                                                           
															<td class="">CP</td>
															<td class="">/</td>
															<td class="">2</td>
															<td class="">2529</td>	
                                                             <td class="pettyRed">
                                                                <span class="spn-pettyRed">No</span>
                                                            </td>															
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
                                                                Accounting Voucher Type-5
                                                            </td>
                                                           
															<td class="">BR</td>
															<td class="">/</td>
															<td class="">1</td>
															<td class="">039</td>	
                                                             <td class="pettyGrn">
                                                               <span class="spn-pettyGrn"> Yes</span>
                                                            </td>															
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