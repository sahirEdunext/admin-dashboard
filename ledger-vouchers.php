<?php
   include("header.php"); 
   
   ?>
<title>Ledger Vouchers</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0"><span class="sub-head-part">Report > Other Report ></span> Ledger Vouchers </h2>
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
                                 <p class="py-1 m-0 tab-div-heading">From Date : 01-04-2021 | To Date : 31-03-2022</p>
                              </li>
                              <li class="mb-0 sk_p_rela">
                                 <div class="lookup lookup-left d-inline mx-2">
                                    <input class="inputSearch_petty" type="text" name="homework_search"
                                       placeholder="Search">
                                 </div>
                                 <a class="sk_add_tc btn waves-effect waves-light me-2" data-bs-toggle="modal"
                                    data-bs-target="#ledgerFilter">
                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                    <span>Filter</span>
                                 </a>
                                 <div class="modal center-modal sk_modal fade" id="ledgerFilter" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header pt-3 ps-3">
                                             <h5 class="modal-title modal-t-color"><i class="fa fa-filter pe-2"
                                                   aria-hidden="true"></i>
                                                Filter</h5>
                                             <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                          </div>
                                          <div class="modal-body">
                                             <form action="">
                                                <div class="row sk_dropdown">
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Academic Year" id="">
                                                         <option>Finance Year</option>
                                                         <option>2021</option>
                                                         <option>2020</option>
                                                         <option>2019</option>
                                                         <option>2018</option>
                                                         <option>2017</option>
                                                         <option>2016</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <div class="selection-box">
                                                         <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="From Date">
                                                         <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                      <div class="selection-box">
                                                         <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="To Date">
                                                         <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                      </div>
                                                   </div>

                                                </div>
                                             </form>
                                          </div>
                                          <div class="modal-footer text-end p-2">
                                             <button type="button" data-bs-dismiss="modal"
                                                class="waves-effect waves-dark btn cancel-btn">CANCEL</button>
                                             <button type="button"
                                                class="waves-effect waves-light btn submit-btn">APPLY</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <a class="pettyCashBtn waves-effect waves-light btn hoverBtn" data-bs-toggle="modal"
                                    data-bs-target="#exportLedgerGroup">
                                    <img src="./assets/images/exportBtnIcon.svg" alt="" class="">

                                    <span>Export</span>
                                 </a>
                              </li>

                           </ul>
                           <div class="px-1">
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                    <div class="custom_heightmin">
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Sr. No.</th>
                                                <th>Date</th>
                                                <th>Particulars</th>
                                                <th>Voucher Type</th>
                                                <th>Voucher No.</th>
                                                <th>Narrations</th>
                                                <th>Bill No.</th>
                                                <th>Cheque No.</th>
                                                <th>Debit Amt.</th>
                                                <th>Credit Amt.</th>
                                                <th>Remarks</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class="bordered-td std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="medium_font">Opening Balance</td>
                                                <td class="">0.0</td>
                                                <td class="">3000</td>
                                                <td class=""></td>
                                             </tr>

                                             <tr class="bordered-td std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">18 Nov, 2021 </td>
                                                <td class="">ICICI-2871</td>
                                                <td class="">Bank Receipt</td>
                                                <td class="">VR/486752</td>
                                                <td class="">Lorem ipsum is placeholder text <br> commonly used in the graphic.</td>
                                                <td class="">DPS-MISC-1161</td>
                                                <td class="">DPS-MISC-1161</td>
                                                <td class="">0.0</td>
                                                <td class="">0.0</td>
                                                <td class=""></td>
                                             </tr>

                                             <tr class="bordered-td std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="">Total</td>
                                                <td class="">0.0</td>
                                                <td class="">3000</td>
                                                <td class=""></td>
                                             </tr>

                                             <tr class="gray-row bordered-td std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">Balance</td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="">300.00</td>
                                                <td class=""></td>
                                                <td class=""></td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    
                                     
                                    </div>
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
<?php
   include("footer.php"); 
   
   ?>