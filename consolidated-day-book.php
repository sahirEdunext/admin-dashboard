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
               <h2 class="intro-heading my-0"><span class="sub-head-part">Report > Other Report ></span> Consolidated
                  Day Book </h2>
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
                                 <a class="sk_add_tc btn waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#ledgerFilter">
                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                    <span>Filter</span>
                                 </a>
                                 <div class="modal center-modal sk_modal fade" id="ledgerFilter" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
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
                                                         <option>Academic Year</option>
                                                         <option>2021</option>
                                                         <option>2020</option>
                                                         <option>2019</option>
                                                         <option>2018</option>
                                                         <option>2017</option>
                                                         <option>2016</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <select class="selectpicker" name="Class" id="">
                                                         <option>Class</option>
                                                         <option>1</option>
                                                         <option>2</option>
                                                         <option>3</option>
                                                         <option>4</option>

                                                      </select>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <select class="selectpicker" name="Section" id="">
                                                         <option>Section</option>
                                                         <option>A</option>
                                                         <option>B</option>
                                                         <option>C</option>
                                                         <option>D</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Student Type" id="">
                                                         <option>Student Type</option>
                                                         <option>Open</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Status" id="">
                                                         <option>Status</option>
                                                         <option>Pending</option>
                                                         <option>Pending</option>
                                                         <option>Pending</option>
                                                         <option>Pending</option>
                                                         <option>Pending</option>
                                                         <option>Pending</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <select class="selectpicker" name="Order by" id="">
                                                         <option>Order by</option>
                                                         <option>Odd</option>
                                                         <option>Odd</option>
                                                         <option>Odd</option>
                                                         <option>Odd</option>
                                                         <option>Odd</option>
                                                         <option>Odd</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="modal-footer text-end">
                                             <button type="button" data-bs-dismiss="modal"
                                                class="waves-effect waves-dark btn cancel-btn">CANCEL</button>
                                             <button type="button"
                                                class="waves-effect waves-light btn submit-btn">APPLY</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="dropdown tblClmFltr d-inline">
                                    <a class="pettyCashBtn waves-effect waves-light btn mx-2 hoverBtn dropdown-toggle"
                                       id="donwloadPopUp" data-bs-toggle="dropdown" aria-expanded="false">
                                       <span>Payment Report</span>
                                       <img src="./assets/images/down-arrow-icon.svg" alt="" class="btn-icon imgHover">
                                    </a>

                                    <div class="dropdown-menu clickNoHide dnloadDrp" aria-labelledby="donwloadPopUp">
                                       <div class="tblCheckHeading px-3 py-2">
                                          Payment Report
                                       </div>

                                       <div class="tblFltrScrDiv">
                                          <ul id="ldgrFltrTbl" class="ps-3 pe-1 m-0 bb-label-ul">
                                             <li>
                                                <input class="tblCheckBox" type="checkbox" id="s_no" name="s_no"
                                                   checked="">
                                                <label class="dropdown-item my-0 ps-0 tblCheckLabel pe-5r" href="#"
                                                   for="s_no">Payment Type Report (PDF)</label>
                                             </li>
                                             <li>
                                                <input class="tblCheckBox" type="checkbox" id="acad_year"
                                                   name="acad_year" checked="">
                                                <label class="dropdown-item my-0 ps-0 tblCheckLabel pe-5r" href="#"
                                                   for="acad_year">Payment Type Report (EXCEL)</label>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="px-3 py-3 d-flex justify-content-between btop-div">
                                          <button type="button"
                                             class="waves-effect waves-light btn submit-btn px-3 py-1 width-100 m-1">DOWNLOAD</button>
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
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                             </tr>

                                          </tbody>
                                       </table>

                                       <div class="py-3 mar-n13r div-sepr px-4">Fee Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>

                                       <div class="py-3 mar-n13r div-sepr px-4">Application Form Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>


                                       
                                    <div class="py-3 mar-n13r div-sepr px-4">Admission Registration Collection</div>
                                    <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                       <thead>
                                          <tr role="row">
                                             <th>Cash</th>
                                             <th>Cheque</th>
                                             <th>DD</th>
                                             <th>Debit/Credit Card</th>
                                             <th>NEFT</th>
                                             <th>Online</th>
                                             <th>Payment in bank</th>
                                             <th>Student Imprest Account</th>
                                             <th>Total</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">1825482</td>
                                             <td class="">420850</td>
                                             <td class="">54550</td>
                                             <td class="">4600</td>
                                             <td class="">1144130</td>
                                             <td class="">9472416</td>
                                             <td class="">9472416</td>
                                             <td class="">0</td>
                                             <td class="">9472416</td>
                                          </tr>

                                       </tbody>
                                    </table>

                                    <div class="py-3 mar-n13r div-sepr px-4">Inventory Sale Collection</div>
                                    <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                       <thead>
                                          <tr role="row">
                                             <th>Particular</th>
                                             <th>Cash</th>
                                             <th>Cheque</th>
                                             <th>DD</th>
                                             <th>Debit/Credit Card</th>
                                             <th>NEFT</th>
                                             <th>Online</th>
                                             <th>Payment in bank</th>
                                             <th>Student Imprest Account</th>
                                             <th>Total</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">Sale Item</td>
                                             <td class="">1825482</td>
                                             <td class="">420850</td>
                                             <td class="">54550</td>
                                             <td class="">4600</td>
                                             <td class=""></td>
                                             <td class="">9472416</td>
                                             <td class=""></td>
                                             <td class=""></td>
                                             <td class="">9472416</td>
                                          </tr>
                                          <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">GST</td>
                                             <td class="">1825482</td>
                                             <td class="">420850</td>
                                             <td class="">54550</td>
                                             <td class="">4600</td>
                                             <td class="">1144130</td>
                                             <td class="">9472416</td>
                                             <td class="">9472416</td>
                                             <td class="">0</td>
                                             <td class="">9472416</td>
                                          </tr>
                                          <tr class="footer-table-total" role="row">
                                             <td class="">Total</td>
                                             <td class="">16</td>
                                             <td class="">420850</td>
                                             <td class=""></td>
                                             <td class="">0</td>
                                             <td class=""></td>
                                             <td class="">9472416</td>
                                             <td class=""></td>
                                             <td class=""></td>
                                             <td class="">9472416</td>
                                          </tr>

                                       </tbody>
                                    </table>

                                    <table id=" " class="table sk_book_table dataTable width-90 mx-auto subTable cheques_tab">
                                       <thead>
                                          <tr role="row">
                                             <th>Store Name</th>
                                             <th>Cash</th>
                                             <th>Cheque</th>
                                             <th>DD</th>
                                             <th>Debit/Credit Card</th>
                                             <th>NEFT</th>
                                             <th>Online</th>
                                             <th>Payment in bank</th>
                                             <th>Student Imprest Account</th>
                                             <th>GST</th>
                                             <th>IGST</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                             <td class="">Sale Item</td>
                                             <td class="">1825482</td>
                                             <td class="">420850</td>
                                             <td class="">54550</td>
                                             <td class="">54550</td>
                                             <td class="">54550</td>
                                             <td class="">54550</td>
                                             <td class="">54550</td>
                                             <td class="">9472416</td>
                                             <td class="">54550</td>
                                             <td class="">9472416</td>
                                          </tr>
                                       </tbody>
                                    </table>

                                    <div class="py-3 mar-n13r div-sepr px-4">Library Fine Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>


                                       <div class="py-3 mar-n13r div-sepr px-4">Imprest Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>

                                       <div class="py-3 mar-n13r div-sepr px-4">Miscellaneous Fee Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Particular</th>
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">Misc Fee</td>
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>


                                       <div class="py-3 mar-n13r div-sepr px-4">Non Miscellaneous Fee Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Particular</th>
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">Misc Fee</td>
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>

                                       <div class="py-3 mar-n13r div-sepr px-4">Advance Fee Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
                                             </tr>

                                          </tbody>
                                       </table>


                                       <div class="py-3 mar-n13r div-sepr px-4">Refund Fee Collection</div>
                                       <table id=" " class="table sk_book_table dataTable font-hind cheques_tab">
                                          <thead>
                                             <tr role="row">
                                                <th>Cash</th>
                                                <th>Cheque</th>
                                                <th>DD</th>
                                                <th>Debit/Credit Card</th>
                                                <th>NEFT</th>
                                                <th>Online</th>
                                                <th>Payment in bank</th>
                                                <th>Student Imprest Account</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class=" std-impr-port sk_row_hover mv-tbl-book-history-row" role="row">
                                                <td class="">1825482</td>
                                                <td class="">420850</td>
                                                <td class="">54550</td>
                                                <td class="">4600</td>
                                                <td class="">1144130</td>
                                                <td class="">9472416</td>
                                                <td class="">9472416</td>
                                                <td class="">0</td>
                                                <td class="">9472416</td>
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