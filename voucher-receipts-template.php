<?php
   include("header.php"); 
   
   ?>
   <title>Voucher Receipts Template</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0"><span class="h2span">Setup &gt;</span> Voucher Receipts Template</h2>
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
                     <!-- Nav tabs -->
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <!--  tcRequest   section strat -->
                        <div class="tab-pane active" id="tcFRequest" role="tabpanel">
                           <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center justify-content-start m-0"
                              role="tablist">
                              <li class="mb-0">
                                 <p class="my-0">Due Student Fee Voucher Information</p>
                              </li>
                           </ul>
                           <div class="px-1">
                              <div class="box-body pt-2 py-4">
                                 <div class="">
                                    <div class="custom_heightmin">
                                       <div class="col-md-3">
                                          <p>Voucher Type</p>
                                          <select class="selectpicker" name="Cheque Signed"
                                             id="">
                                             <option>Select Voucher Type</option>
                                             <option>Open</option>
                                          </select>
                                       </div>
                                       <div class="col-sm-12 mt-3">
                                          <p>Header</p>
                                          <div id="editor"></div>
                                       </div>
                                       <div class="col-sm-12 mt-3">
                                          <p>Footer</p>
                                          <div id="editor1"></div>
                                       </div>
                                    </div>
                                    <div class="row mt-3">
                                       <div class="col-md-2">
                                          <p>Voucher Type</p>
                                          <select class="selectpicker" name="Cheque Signed"
                                             id="">
                                             <option>Select Voucher Type</option>
                                             <option>Open</option>
                                          </select>
                                          <div class="d-flex align-items-center">  <input type="checkbox" checked>
                                             <label for="Landscaped" class="ms-2">Landscaped</label>
                                          </div>
                                       </div>
                                       <div class="col-md-2">
                                          <p>Report Name</p>
                                          <select class="selectpicker" name="Cheque Signed"
                                             id="">
                                             <option>Enter Report Name</option>
                                             <option>Open</option>
                                          </select>
                                          <div class="d-flex align-items-center">  <input type="checkbox" >
                                             <label for="Other Report" class="ms-2">Other Report</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                       <p>Receipt in HTML</p>
                                       <textarea id="w3review" class="form-control h-80" name="w3review"></textarea>
                                    </div>
                                    <div class="col-sm-2 px-0 py-10 bg_color mt-4">
                                       <p class="my-0 px-3">Auto Number Scheme for Bill No.</p>
                                    </div>
                                    <div class="col-md-3 mt-3 d-flex justify-content-between">
                                       <p>Is Auto</p>
                                       <button type="button" class="btn btn-sm btn-secondary btn-toggle" data-toggle="button" aria-pressed="true" autocomplete="off">
                                          <div class="handle"></div>
                                       </button>
                                    </div>
                                    <div class="row mt-3">
                                       <div class="col">
                                          <input type="text" class="form-control" placeholder="Prefix">
                                       </div>
                                       <div class="col">
                                          <input type="text" class="form-control" placeholder="Separator">
                                       </div>
                                       <div class="col">
                                          <input type="text" class="form-control" placeholder="Starting No.">
                                       </div>
                                       <div class="col">
                                          <input type="text" class="form-control" placeholder="Zero Padding">
                                       </div>
                                       <div class="col">
                                          <input type="text" class="form-control" placeholder="Zero Padding">
                                       </div>
                                       <div class="col-sm-12 mt-4 text-end">
                                          <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                          <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
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