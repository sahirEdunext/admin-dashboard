<?php
   include("header.php"); 
   
   ?>
   <title>Report Other Report Single Voucher Report</title>
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
               <h2 class="intro-heading my-0"><span class="h2span">Report > Other Report > </span> Single Voucher Report</h2>
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
                                <span class="text-dark">Single Voucher Information</span>
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
                                                         <option>Please Enter Voucher No.</option>
                                                         <option>Please Enter Voucher No.</option>
                                                      </select>
                                                   </div>
                                                 
                                                   <div class="col-sm-6">
                                                   <p class="ps-3">Select File Type</p>
                                                   <div class="d-flex">
                                                      <div class="radion_01 me-20 active" onclick="onSelectUserType(1)">
                                                         <span class="me-5 ri_input_color"><img src="assets/images/excel.svg" alt="user-img"> Excel</span>
                                                         <input type="radio" id="html" name="fav_language" value="HTML" checked="">
                                                      </div>
                                                      <div class="radion_01" onclick="onSelectUserType(2)">
                                                         <span class="me-5 ri_input_color"><img src="assets/images/pdf.svg" alt="user-img"> PDF</span>
                                                         <input type="radio" id="html2" name="fav_language" value="HTML">
                                                      </div>
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="col-sm-12 text-end mt-4">
                                                   <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn fs-6 py-5"><img src="assets/images/download.svg" alt="user-img"> Download</button>
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