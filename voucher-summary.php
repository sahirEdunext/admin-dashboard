<?php
   include("header.php"); 
   
   ?>
<title>Voucher Summary</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0"><span class="sub-head-part">Report > Financial Report ></span> Voucher
                  Summary </h2>
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
                                 <p class="py-1 m-0 tab-div-heading">Student Details</p>
                              </li>
                              <li class="mb-0 sk_p_rela">
                                 <div class="d-sm-flex">

                                    <div class="me-3">
                                       <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker"
                                          class="form-control head-input" placeholder="Please Enter From Date">
                                       <img src="./assets/images/calendar-icon-sm.svg"  class="cal-sm-icon" alt="">
                                    </div>

                                    <div class="me-3">
                                       <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker"
                                          class="form-control head-input" placeholder="Please Enter To Date">
                                          <img src="./assets/images/calendar-icon-sm.svg"  class="cal-sm-icon" alt="">
                                    </div>

                                    <a class="pettyCashBtn waves-effect waves-light btn px-3" data-bs-toggle="modal">
                                       <span>GO</span>
                                    </a>
                                 </div>
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
                                                <th>Voucher Type</th>
                                                <th>Count</th>
                                                <th>Amount</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>

                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>

                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>

                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>

                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>

                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1</td>
                                                <td class="">DLN09987665</td>
                                                <td class="">98</td>
                                                <td class="">0.0</td>
                                             </tr>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="medium_font">Total</td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="">0.0</td>
                                             </tr>
                                          </tbody>
                                       </table>
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