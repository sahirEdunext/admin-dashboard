<?php

   include("header.php"); 

?>

<title>Ledgers</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
			<div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
				<h2 class="intro-heading my-0"><span class="h2span">Report &gt; Financial Report &gt; </span> Ledgers</h2>
				</div>
                <div><p class="help my-0"><i class="fa fa-question-circle-o me-1" aria-hidden="true"></i> Help</p></div>
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
                                    <ul class="px-1_25 py-2 d-flex sk_header_bg align-items-center m-0"
                                        role="tablist">
                                        <li class="mb-0">
                                            <div class="lookup lookup-left">
                                                <input class="inputSearch_petty" type="text" name="homework_search"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="px-1">
                                        <div class="box-body pt-2 py-4">
                                            <div class="">
                                                <table id="example5" class="table sk_book_table dataTable font-hind">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>Sr. No.</th>
                                                            <th>Ledger Name</th>
                                                            <th>Debit Amount</th>
                                                            <th class="">Credit Amount</th>															
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
                                                       
														  <td class="">
                                                                1
                                                            </td>
                                                            <td class="">
                                                                Agrawal Digital Printers
                                                            </td>
                                                            <td class="pettyRed">
                                                                140485
                                                            </td>
                                                            <td class="pettyGrn text-end">
                                                                140485
                                                            </td>

                                                        </tr>

                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
														  <td class="">
                                                                2
                                                            </td>
                                                            <td class="">
                                                               TDS Contractor
                                                            </td>
                                                            <td class="pettyRed">
                                                                550
                                                            </td>
                                                            <td class="pettyGrn text-end">
                                                                550
                                                            </td>
                                                        </tr>	
														
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
														  <td class="">
                                                                3
                                                            </td>
                                                            <td class="">
                                                               GST
                                                            </td>
                                                            <td class="pettyRed">
                                                                1247
                                                            </td>
                                                            <td class="pettyGrn text-end">
                                                                1247
                                                            </td>
                                                        </tr>
														
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
														  <td class="">
                                                                4
                                                            </td>
                                                            <td class="">
                                                               GST
                                                            </td>
                                                            <td class="pettyRed">
                                                                2145
                                                            </td>
                                                            <td class="pettyGrn text-end">
                                                                2145
                                                            </td>
                                                        </tr>	
														
                                                        <tr class="sk_row_hover mv-tbl-book-history-row" role="row">
														  <td class="">
                                                                5
                                                            </td>
                                                            <td class="">
                                                               TDS Contractor
                                                            </td>
                                                            <td class="pettyRed">
                                                                2500
                                                            </td>
                                                            <td class="pettyGrn text-end">
                                                                2500
                                                            </td>
                                                        </tr>														
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_info" id="complex_header_info"
                                                            role="status" aria-live="polite">Page 1 of 200
														</div>
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