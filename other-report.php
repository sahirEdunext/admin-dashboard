<?php
   include("header.php"); 
   
   ?>
   <title>Report Financial Report Other Reports</title>
   <style>
      .color_label{
         color: #7A86A5;
      }
      .w-110 {
    width: 110px;
}
   </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0"><span class="h2span">Report > Financial Report > </span> Other Reports</h2>
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
                                <span class="text-dark">Other Voucher Report Information</span>
                              </li>
                             
                           </ul>
                           <div class="px-1">
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                 <div class="custom_heightmin">
                                    <div class="row">
									<div class="col-sm-6 mt-2">
                                                      <label for="Voucher Type" class="ps-3 pb-1 color_label">Voucher Type</label>
                                                      <select class="selectpicker" name="Cheque Signed"
                                                         id="">
                                                         <option>Receipt</option>
                                                         <option>Receipt</option>
                                                      </select>
                                                   </div>
                                                 
                                
                                                   <div class="col-md-6 mt-2">
                                                   <label for="From Date" class="ps-3 pb-1 color_label">From Date</label>
                                                      <div class="filter-box">
                                                         <div class="selection-box">
                                                            <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="Select From Date">
                                                            <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                       <div class="col-md-6 mt-2">
                                                   <label for="To Date" class="ps-3 pb-1 color_label">To Date</label>
                                                      <div class="filter-box">
                                                         <div class="selection-box">
                                                            <input type="text" id="bulk-sms-datepicker" name="bulk-sms-datepicker" class="form-control" placeholder="Select To Date">
                                                            <i class="fa fa-calendar-check-o pull-right ri_cal_icon" aria-hidden="true"></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   
                                       
                                                   
                                                   <div class="col-sm-12 text-end mt-4">
                                                   <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn fs-6 py-5"><img src="assets/images/exl.svg" alt="user-img"> Generate Report</button>
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