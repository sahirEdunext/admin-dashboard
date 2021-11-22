<?php
   include("header.php"); 
   
   ?>
   <title>Student Imprest Dataport</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full font-hind">
      <!-- Main content -->
      <section class="content">
         <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
            <div>
               <h2 class="intro-heading my-0"><span class="sub-head-part">Data Port ></span> Student Imprest Dataport </h2>
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
                                 <p class="py-1 m-0 tab-div-heading">Sequence of Columns in Excel file:</p>
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
                                             <th>Enrollment No.</th>
                                             <th>Amount</th>
                                             <th>Fee Deposit Date</th>
                                             <th>Payment Type</th>
                                             <th>Cheque No.</th>
                                             <th>Date of Issue</th>
                                             <th>Branch</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">51500</td>
                                             <td class="">51500</td>
                                             <td class="">17 Nov, 2021</td>
                                             <td class="">DD</td>
                                             <td class="">ICIC1236500285</td>
                                             <td class="">19 Nov, 2021</td>
                                             <td class="">ICICI Bank Ltd.</td>
                                             <td class="">Sec 62, Noida, Uttar Pradesh</td>
                                          </tr>
                                 
                                       </tbody>
                                    </table>

                                    <div class="table-footer-content ps-1">
                                       <p class="t-footer-para">Kindly find the <a class="t-footer-anchor" href="">Format of file</a></p>
                                       <p class="d-flex align-items-center"><span class="has-header pe-2">Has Header:</span> <input type="checkbox" name="hasHeader" id=""></p>
                                       <div class="upload-area-container">
                                          <div class="upload-area d-flex">
                                             <div class="uploaded-file-box"></div>
                                             <input multiple onchange="uploadFilesShow(this)" type="file" name="upload-attachment" class="d-none" id="uploadAttachment">
                                             <label for="uploadAttachment" class="file-input-container waves-effect waves-dark"><img class="pe-3" src="assets/images/upload.svg" alt=""> Upload<br> Attachment</label>
                                          </div>
                                          <p class="only-excel mt-1 mb-0">(Only .xls file support)</p>
                                          <div class="text-end">
                                             <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SUBMIT</button>
                                          </div>
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