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
            <div class="modal center-modal ri_modal1 fade" id="Export" tabindex="-1"
               aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title modal-t-color">
                           Reference No.
                        </h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                     </div>
                     <div class="modal-body">
                        <form action="">
                           <div class="row sk_dropdown">
                              <div class="col-sm-3 mt-15">
                                 <select class="selectpicker" name="Cheque Signed" id="">
                                    <option>AGST Ref.</option>
                                    <option>New Ref.</option>
                                    <option>On Account</option>
                                 </select>
                              </div>
                              <div class="col-sm-3 mt-15">
                                 <input title="Ref. No." class="bordered-div-input_v1 w-120" type="text" value="Ref. No.">
                              </div>
                              <div class="col-sm-3 mt-15">
                              <div class="filter-box">
                                                         <div class="selection-box mb-0">
                                                          
                                                            <input type="text" id="bulk-sms-datepicker"
                                                               name="bulk-sms-datepicker"
                                                               class="form-control w-100 ps-2" placeholder="Due Day">
                                                            
                                                         </div>
                                                      </div>
                              </div>
                              <div class="col-sm-3 mt-15">
                                 <input title="Amount" class="bordered-div-input_v1 w-120" type="text" value="Amount">
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
            <div class="col-10 pe-0">
               <div class="box box-default border-shadow">
                  <!-- /.box-header -->
                  <div class="box-body  pettytblBody p-0">
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <!--  tcRequest   section strat -->
                        <div class="row ri_header_bg px-1_25 m-0">
                           <div class="col-sm-6 border-right py-2 px-0">
                              <span class="me-3">Type</span>
                              <span>: <input class="inputSearch_voucher" type="text" name="homework_search"
                                 placeholder="Journal"></span>
                           </div>
                           <div class="col-sm-6 d-flex justify-content-end align-items-center py-2 px-0">
                              <span class="me-3">Invoice No.</span>
                              <span>: <input class="invoice" type="text" name="homework_search"
                                 placeholder="#INV-09112021"></span>
                              <span class="ms-40 me-3">Date</span>
                              <div class="filter-box">
                                 <div class="selection-box mb-0">
                                    <input type="text" id="bulk-sms-datepicker_ac" name="bulk-sms-datepicker"
                                       class="form-control w-80" placeholder="10-11-2021">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane active" id="studentLedgerAccount" role="tabpanel">
                           <div class="px-1">
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                    <div class="custom_heightmin_voucher">
                                       <div class="row m-0">
                                          <table id="voucher_account"
                                             class="table sk_book_table dataTable font-hind cheques_tab ps-1 mt-n1">
                                             <thead>
                                                <tr role="row">
                                                   <th class="w-80">DR/CR</th>
                                                   <th>Ledger Name</th>
                                                   <th>Amount</th>
                                                   <th>Ref.</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                   <td class="">
                                                      <select class="selectpicker" name="Cheque Signed" id="">
                                                         <option>DR</option>
                                                         <option>CR</option>
                                                      </select>
                                                   </td>
                                                   <td class="">
                                                      <input title="51549.32" class="bordered-div-input_v01 w-300"
                                                         type="text" value="51549.32">
                                                      <span id="amount_01">₹ 71,785.52</span>
                                                   </td>
                                                   <td class="w-100  ">
                                                      <input title="51549.32" class="bordered-div-input_v01" type="text"
                                                         value="51549.32">
                                                   </td>
                                                   <td class="w-50">
                                                      <input type="checkbox" class="cus_mt-1" data-bs-toggle="modal" data-bs-target="#Export">
                                                   </td>
                                                </tr>
                                                <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                   <td class="">
                                                      <select class="selectpicker" name="Cheque Signed" id="">
                                                         <option>CR</option>
                                                         <option>DR</option>
                                                      </select>
                                                   </td>
                                                   <td class="d-flex">
                                                      <input title="51549.32" class="bordered-div-input_v01 w-300"
                                                         type="text" value="ICICI Bank Ltd.">
                                                      <span id="amount_01">₹ 71,785.52</span>
                                                      <div class="mx-3">
                                                         <div class="floatfield">
                                                            <label>Cheque No.</label>
                                                            <input type="text" 
                                                               name="bulk-sms-datepicker"
                                                               class="bordered-div-input_v01" placeholder="1224754185">
                                                         </div>
                                                      </div>
                                                      <div class="filter-box">
                                                         <div class="selection-box mb-0 floatfield">
                                                            <label>Date</label>
                                                            <input type="text" id="bulk-sms-datepicker"
                                                               name="bulk-sms-datepicker"
                                                               class="form-control w-100 ps-2 " placeholder="10-11-2021">
                                                           
                                                         </div>
                                                      </div>
                                                   </td>
                                                   <td class="w-100  ">
                                                      <input title="51549.32" class="bordered-div-input_v01" type="text"
                                                         value="51549.32">
                                                   </td>
                                                   <td class="w-50">
                                                      <input type="checkbox" class="cus_mt-1" data-bs-toggle="modal" data-bs-target="#Export">
                                                   </td>
                                                </tr>
                                                <tr class="  sk_row_hover mv-tbl-book-history-row" role="row">
                                                   <td class="">
                                                      <select class="selectpicker" name="Cheque Signed" id="">
                                                         <option>CR</option>
                                                         <option>DR</option>
                                                      </select>
                                                   </td>
                                                   <td class="">
                                                      <input title="51549.32" class="bordered-div-input_v01 w-300"
                                                         type="text" value="51549.32">
                                                      <span id="amount_01">₹ 71,785.52</span>
                                                   </td>
                                                   <td class="w-100  ">
                                                      <input title="51549.32" class="bordered-div-input_v01" type="text"
                                                         value="51549.32">
                                                   </td>
                                                   <td class="w-50">
                                                      <input type="checkbox" class="cus_mt-1" data-bs-toggle="modal" data-bs-target="#Export">
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="col-sm-12 h-15 bg-light"></div>
                                       <div class="col-md-12 px-3 mt-4">
                                          <div class="row">
                                             <div class="col-md-7 ps-0">
                                                <div class="floatfield form-group form-box" id="">
                                                   <label>Narration</label>
                                                   <textarea class="txtAreaFlLabel" type="text"
                                                      placeholder="Write your Narrations..."></textarea>
                                                </div>
                                             </div>
                                             <div class="col-md-5 text-end">
                                                <p>
                                                   <span class="total-dbt-amt"> Total Debit Amount :</span> <span
                                                      class="rs-ttl-dbt">$ 71,785.52</span>
                                                </p>
                                                <p>
                                                   <span class="total-dbt-amt"> Total Credit Amount :</span> <span
                                                      class="rs-ttl-dbt">$ 71,785.52</span>
                                                </p>
                                             </div>
                                             <div class="col-md-4 ps-sm-0">
                                                <div class="floatfield form-group form-box mt-2" id="">
                                                   <label>Attachment</label>
                                                   <input type="file" placeholder="Attached your Bill/Invoice"
                                                      required="">
                                                      <img src="assets/images/upload.svg" class="pull-right ri_cal_img" alt="">
                                                </div>
                                             </div>
                                           
                                          </div>
                                          <div class="col-sm-12 position-absolute bottom-0 px-50 pb-20">
                                                <div class="text-end" id="">
                                                   <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                                   <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">PRINT</button>
                                                   <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
                                                </div>
                                             </div>
                                          <!-- <div class="row">
                                             <div class="form-group form-box col-md-6 pe-0">
                                                 <label>Remarks</label>
                                                 <textarea class="form-control form-textbox" placeholder="Enter Your Remarks"></textarea>
                                             </div>
                                             <div class="col-md-6 text-end d-flex align-items-end justify-content-end mb-2">
                                                 <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                                 <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
                                             </div>
                                             </div> -->
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
            <div class="col-2">
               <div class="box box-default border-shadow">
                  <!-- /.box-header -->
                  <div class="box-body  pettytblBody p-0">
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <!--  tcRequest   section strat -->
                        <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-between m-0"
                           role="tablist">
                           <h2 class="intro-heading my-1">Voucher Type</h2>
                        </ul>
                        <div class="tab-pane active" id="studentLedgerAccount" role="tabpanel">
                           <div class="px-1">
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                    <div class="custom_heightmin_voucher">
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Contra</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Credit Note</button>
                                       <button type="button" class="btn btn-outline-secondary shadow-none btn_ri ">Debit
                                       Note</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri active">Journal</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Payment</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Payment</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Receipt</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Purchase</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Sale</button>
                                       <button type="button"
                                          class="btn btn-outline-secondary shadow-none btn_ri ">Others Vouchers</button>
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