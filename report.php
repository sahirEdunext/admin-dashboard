<?php
   include("header.php"); 
?>

<title>Report</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div><h2 class="intro-heading my-0">Report</h2></div>
               
            </div>
            <div class="row">
                <div class="col-12 pr-0 pl-0">
                    <div class="box box-default border-shadow">
                        <!-- /.box-header -->
                        <div class="box-body  pettytblBody p-0">
               
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--  tcRequest   section strat -->
                                <div class="tab-pane active" id="tcFRequest" role="tabpanel">
                                  
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="ppt15">
                                                
                                                <div class="row">	
											
												  <div class="col-md-3">
                                                   <div class="frm1">
													  <div class="bx_txts">
	                                                 <h1>Financial Year </h1>
													 </div>
													 <ul>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="ledger.php">Ledgers</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="trial-balance.php">Trial Balance</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="#">Trial Ledgers Balance Report</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="#">Balance Sheet</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="#">Income and Expenditure</a></li>
													 
													 
													 
													 
													 </ul>
												     </div>
													 </div>
												

												 
												 		  	  <div class="col-md-3">
                                                   <div class="frm1">
													  <div class="bx_txts">
	                                                 <h1>Imprest Account</h1>
													 </div>
													 <ul>
													 <li> <i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="student-imprest-account.php">Student Imprest Account</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="account-class-imprest.php">Class wise Imprest Account Report</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="account-imprest-day-book.php">Imprest Day Book</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="account-report.php">Class Wise Imprest Account</a></li>
													
													 
													 
													 
													 </ul>
												     </div>
													 </div>
												 
												 		 	   <div class="col-md-3">
                                                   <div class="frm1">
													  <div class="bx_txts">
	                                                 <h1>Other Report</h1>
													 </div>
													 <ul>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="multiple-voucher-report.php">Multiple Voucher Report</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="single-voucher-report.php">Single Voucher Report</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="consolidated-day-book.php">Consolidated Day Book</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="voucher-summary.php">Voucher Summary</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="#">Others Report</a></li>
													 <li><i class="fa fa-caret-right" aria-hidden="true"></i> &nbsp; <a href="ledger-vouchers.php">Ledger Report</a></li>
													 
													 
													 
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