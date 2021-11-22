<?php
   include("header.php"); 
   
   ?>
   <title>List of Cheques</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0">List of Cheques</h2>
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
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <!--  tcRequest   section strat -->
                        <div class="tab-pane active" id="studentLedgerAccount" role="tabpanel">
                           <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                              role="tablist">
                              <li class="mb-0">
                                 <a class="sk_add_tc" data-bs-toggle="modal" data-bs-target="#ledgerFilter">
                                 <i class="fa fa-filter" aria-hidden="true"></i>
                                 <span>Filter</span>
                                 </a>
                                 <div class="modal center-modal ri_modal fade" id="ledgerFilter" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title modal-t-color"><i
                                                class="fa fa-filter pe-2" aria-hidden="true"></i>
                                                Filter
                                             </h5>
                                             <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                          </div>
                                          <div class="modal-body">
                                             <form action="">
                                                <div class="row sk_dropdown">
                                                   <div class="col-md-6">
                                                      <div class="filter-box">
                                                         <div class="selection-box">
                                                            <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="From Date">
                                                            <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="filter-box">
                                                         <div class="selection-box">
                                                            <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="To Date">
                                                            <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Cheque Signed"
                                                         id="">
                                                         <option>Cheque Signed</option>
                                                         <option>Open</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Cheque Cancelled"
                                                         id="">
                                                         <option>Cheque Cancelled</option>
                                                         <option>Pending</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Cheque Collected"
                                                         id="">
                                                         <option>Cheque Collected</option>
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
                                 <div class="lookup lookup-left d-inline mx-2">
                                    <input class="inputSearch_petty" type="text" name="homework_search"
                                       placeholder="Search">
                                 </div>
                                 <a class="pettyCashBtn waves-effect waves-light btn hoverBtn" data-bs-toggle="modal" data-bs-target="#Export">
                                  <img src="./assets/images/exportBtnIcon.svg" alt="" class="">
                                               
                                                <span>Export</span>
                                            </a>
                                 <div class="modal center-modal ri_modal1 fade" id="Export" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title modal-t-color">
                                            Export Files
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
                                                         <label for="Checkbox_11">Sr.No.</label>
                                                         <input type="checkbox" id="Checkbox_11" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_1">Party Name</label>
                                                         <input type="checkbox" id="Checkbox_1" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_2">Bill No</label>
                                                         <input type="checkbox" id="Checkbox_2" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_3">Cheque Date</label>
                                                         <input type="checkbox" id="Checkbox_3" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_4">Cheque No.</label>
                                                         <input type="checkbox" id="Checkbox_4" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_5">Amount</label>
                                                         <input type="checkbox" id="Checkbox_5" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_6">Signature Date</label>
                                                         <input type="checkbox" id="Checkbox_6" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_7">Collection Date</label>
                                                         <input type="checkbox" id="Checkbox_7" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_8">Collection by</label>
                                                         <input type="checkbox" id="Checkbox_8" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_9">Contact No.</label>
                                                         <input type="checkbox" id="Checkbox_9" class="inpu_01">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-3 mt-15">
                                                      <div class="d-flex justify-content-between align-items-center ri_input_color">
                                                         <label for="Checkbox_10">Cheq. Cancel Date</label>
                                                         <input type="checkbox" id="Checkbox_10" class="inpu_01">
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
                                 <a class="pettyCashBtn ms-2">
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
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                 <div class="custom_heightmin">
                                    <table id="example5" class="table sk_book_table dataTable font-hind cheques_tab">
                                       <thead>
                                          <tr role="row">
                                             <th>Sr. No.</th>
                                             <th>Party Name</th>
                                             <th>Bill No</th>
                                             <th>Cheque Date</th>
                                             <th>Cheque No.</th>
                                             <th>Amount</th>
                                             <th>Signature Date</th>
                                             <th>Collection Date</th>
                                             <th>Cheq. Cancel Date</th>
                                             <th>Contact No.</th>
                                             <th>Collection by</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">
                                                1
                                             </td>
                                             <td class="">
                                                <p class="td_p" title="Vehicle Running & Maintain...">Vehicle Running & Maintain...</p>
                                             </td>
                                             <td class="" title="SWPS1251">
                                                SWPS1251
                                             </td>
                                             <td class="" title="I-17 / 1157">
                                                I-17 / 1157
                                             </td>
                                             <td class="" title="HDFC-1588755689">
                                                <p class="td_p">HDFC-1588755689</p>
                                             </td>
                                             <td class="ri_green" title="">
                                                140485
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="27-11-2021" placeholder="Signature Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="28-11-2021" placeholder="Collection Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="29-11-2021" placeholder="Cheq. Cancel Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                                <input title="+91 - 98765 43210" class="bordered-div-input_02" type="text" value="+91 - 98765 43210">
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <input title="Sushant Kumar..." class="bordered-div-input_03" type="text" value="Sushant Kumar..."> 
                                             </td>
                                          </tr>
                                          <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">
                                                1
                                             </td>
                                             <td class="">
                                                <p class="td_p" title="Vehicle Running & Maintain...">Vehicle Running & Maintain...</p>
                                             </td>
                                             <td class="" title="SWPS1251">
                                                SWPS1251
                                             </td>
                                             <td class="" title="I-17 / 1157">
                                                I-17 / 1157
                                             </td>
                                             <td class="" title="HDFC-1588755689">
                                                <p class="td_p">HDFC-1588755689</p>
                                             </td>
                                             <td class="ri_green" title="">
                                                140485
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="27-11-2021" placeholder="Signature Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="28-11-2021" placeholder="Collection Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="29-11-2021" placeholder="Cheq. Cancel Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                                <input title="+91 - 98765 43210" class="bordered-div-input_02" type="text" value="+91 - 98765 43210">
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <input title="Sushant Kumar..." class="bordered-div-input_03" type="text" value="Sushant Kumar..."> 
                                             </td>
                                          </tr>
                                          <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">
                                                1
                                             </td>
                                             <td class="">
                                                <p class="td_p" title="Vehicle Running & Maintain...">Vehicle Running & Maintain...</p>
                                             </td>
                                             <td class="" title="SWPS1251">
                                                SWPS1251
                                             </td>
                                             <td class="" title="I-17 / 1157">
                                                I-17 / 1157
                                             </td>
                                             <td class="" title="HDFC-1588755689">
                                                <p class="td_p">HDFC-1588755689</p>
                                             </td>
                                             <td class="ri_green" title="">
                                                140485
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="27-11-2021" placeholder="Signature Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="28-11-2021" placeholder="Collection Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                             <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                            <input type="text" id="bulk-sms-datepicker_01" name="bulk-sms-datepicker" class="bordered-div-input_01" value="29-11-2021" placeholder="Cheq. Cancel Date">
                                                         </div>
                                                      </div>
                                             </td>
                                             <td class="">
                                                <input title="+91 - 98765 43210" class="bordered-div-input_02" type="text" value="+91 - 98765 43210">
                                             </td>
                                             <td class="" title="28 Oct, 2021">
                                             <input title="Sushant Kumar..." class="bordered-div-input_03" type="text" value="Sushant Kumar..."> 
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
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
                                                   class="page-link next_01">Next</a></li>
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
<?php
   include("footer.php"); 
   
   ?>