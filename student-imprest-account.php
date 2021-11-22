<?php
   include("header.php"); 
   
   ?>
   <title>Report  Imprest Account  Student Imprest Account</title>
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
               <h2 class="intro-heading my-0"><span class="h2span">Report > Imprest Account ></span> Student Imprest Account</h2>
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
                                <span class="text-dark">Student Imprest Information</span>
                              </li>
                             
                           </ul>
                           <div class="px-1">
                              <div class="box-body inner-digital-tabs pt-2 py-4">
                                 <div class="">
                                 <div class="custom_heightmin">
                                    <div class="row">
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Academic Year" class="ps-3 pb-1 color_label">Academic Year</label>
                                                      <select class="selectpicker" name="Cheque Signed"
                                                         id="">
                                                         <option>2021-2022</option>
                                                         <option>2021</option>
                                                         <option>2020</option>
                                                         <option>2019</option>
                                                         <option>2018</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Class" class="pb-1 color_label">Student Status</label>
                                                      <div class="d-flex">                                                      
                                                         <div class="radion_01 me-20 w-110 d-flex justify-content-between" onclick="onSelectUserType(1)">
                                                         <span class="me-5 ri_input_color">All</span>
                                                         <input type="radio" id="html" name="fav_language" value="HTML">
                                                      </div>
                                                      <div class="radion_01 active me-20 w-110 d-flex justify-content-between" onclick="onSelectUserType(2)">
                                                         <span class="me-5 ri_input_color">Active</span>
                                                         <input type="radio" id="html2" name="fav_language" value="HTML" checked="">
                                                      </div>
                                                      <div class="radion_01 w-110 d-flex justify-content-between" onclick="onSelectUserType(3)">
                                                         <span class="me-5 ri_input_color">Inactive</span>
                                                         <input type="radio" id="html3" name="fav_language" value="HTML">
                                                      </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6 mt-2">
                                                      <label for="Admission No. /Student Name" class="ps-3 pb-1 color_label">Admission No. /Student Name</label>
                                                      <input type="text" name="" class="form-control" placeholder="Search with Admission No. /Student Name" vlaue="Search with Admission No. /Student Name">
                                                            <i class="fa fa-search pull-right ri_cal_icon color_label"" aria-hidden="true"></i>
                                                   </div>
                                                   <div class="col-sm-6 mt-2 d-flex">
                                                      <div class="">
                                                         <label for="Student Name" class="pb-1 color_label">Student Name</label>
                                                         <p class="mt-2 text-dark">Sushant Maurya</p>
                                                      </div>
                                                      <div class="">
                                                         <label for="Father Name" class="ps-30 pb-1 color_label">Father Name</label>
                                                         <p class="mt-2 ps-30 text-dark">Rajeshwar Maurya</p>
                                                      </div>
                                                      <div class="">
                                                         <label for="Class-Section" class="ps-25 pb-1 color_label">Class-Section</label>
                                                         <p class="mt-2 ps-25 text-dark">VI-A</p>
                                                      </div>
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
                                                   <div class="col-sm-12 mt-1 d-flex align-items-center">
                                                      <label for="No Header Required" class="ps-3">No Header Required </label>
                                                      <input type="checkbox" value="" class="ms-3">
                                                   </div>
                                                   
                                                   <div class="col-sm-12 text-end mt-4">
                                                   <button type="button" class="btn btn-outline-secondary shadow-none active fs-6 py-5 border-0 me-2"><img src="assets/images/download_01.svg" alt="user-img"> Student Wise Imprest Report</button>
                                                   <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn fs-6 py-5"><img src="assets/images/download.svg" alt="user-img"> Generate Report</button>
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