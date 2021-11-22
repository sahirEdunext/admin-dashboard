<?php

   include("header.php"); 

?>
<title>Add Petty Cash</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full font-hind">
        <!-- Main content -->
        <section class="content">
            <div class="d-flex justify-content-between bd-highlight align-items-center my-3 px-1_25">
                <div>
                    <h2 class="intro-heading my-0"><span class="h2span">Petty Cash ></span> Add Petty Cash</h2>
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

                            <!-- Add Petty Cash Section Start Here -->

                            <section class="petty-cash-section">

                                <div class="petty-cash-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form-box pb-3">
                                                <label>Date</label>
                                                <input type="text" placeholder="Select Date" id="input-date"
                                                    class="form-control form-textbox">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form-box pb-3">
                                                <label>Opening Balance</label>
                                                <input type="text" value="5,40,000" class="form-control form-textbox"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="info-box-wrapper">
                                    <div
                                        class="info-box-detail d-flex align-items-center justify-content-between bg-light-blue">
                                        <h3>Income Information</h3>
                                        <h5>Total Income Amount: <span class="lbl-price">149658.00</span></h5>
                                    </div>

                                    <form action="" name="incomeForm">
                                    <div class="table-responsive tbl-wrapper">
                                        <table id="tblIncomeInfo"
                                            class="table sk_book_table dataTable font-hind tbl-common-petty-cash">
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" id="Checkbox_1" onclick="checkAllCheckBox(document.incomeForm.incCheBox, this)">
                                                            <label for="Checkbox_1"></label>
                                                        </div>
                                                    </th>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                    <th>Remarks</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="sk_row_hover mydivouter" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="incCheBox">
                                                            <label></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
																 <a data-bs-toggle="modal"  data-bs-target="#ledgerFilter"><button type="button" class="mybuttonoverlap btn btnDelete">					
																		<img src="assets/images/delete.svg" alt="">
																		</a>
                                                    </td>
													
                                            

                                                </tr>

                                                <tr class="sk_row_hover mydivouter" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="incCheBox">
                                                            <label ></label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
																<a data-bs-toggle="modal"  data-bs-target="#ledgerFilter"><button type="button" class="mybuttonoverlap btn" class="mybuttonoverlap btn btnDelete">						
																		<img src="assets/images/delete.svg" alt="">
																		</a>
                                                    </td>


                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                    </form>

                                    <div class="add-row-wrapper">
                                        <button class="btn-add-row" onclick="insertNewRow('tblIncomeInfo', 'incCheBox')">
                                            <img src="assets/images/add-row-icon.svg" alt="add-row-icon">
                                            <span>Add Row</span>
                                        </button>
                                    </div>


                                </div>

                                <div class="info-box-wrapper mt-4">
                                    <div
                                        class="info-box-detail d-flex align-items-center justify-content-between bg-light-red">
                                        <h3>Expenses Information</h3>
                                        <h5>Total Expenses Amount: <span class="expense-price">149658.00</span></h5>
                                    </div>

                                    <form action="" name="expenseForm">
                                    <div class="table-responsive tbl-wrapper">
                                        <table id="tblExpenseInfo"
                                            class="table sk_book_table dataTable font-hind tbl-common-petty-cash">
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" onclick='checkAllCheckBox(document.expenseForm.expeSelIn, this)'>
                                                            
                                                        </div>
                                                    </th>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                    <th>Remarks</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="sk_row_hover" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="expeSelIn" >
                                                            <label ></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
                                                    </td>


                                                </tr>

                                                <tr class="sk_row_hover" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="expeSelIn" >
                                                            <label ></label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
                                                    </td>


                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                    </form>

                                    <div class="add-row-wrapper">
                                        <button class="btn-add-row" onclick="insertNewRow('tblExpenseInfo', 'expeSelIn')">
                                            <img src="assets/images/add-row-icon.svg" alt="add-row-icon">
                                            <span>Add Row</span>
                                        </button>
                                    </div>


                                </div>

                                <div class="info-box-wrapper mt-4">
                                    <div
                                        class="info-box-detail d-flex align-items-center justify-content-between bg-light-green">
                                        <h3>Deposit Information</h3>
                                        <h5>Total Deposit Amount: <span class="deposit-price">149658.00</span></h5>
                                    </div>

                                    <form action="" name="depositForm">
                                    <div class="table-responsive tbl-wrapper">
                                        <table id="tbxDepositInfo"
                                            class="table sk_book_table dataTable font-hind tbl-common-petty-cash">
                                            <thead>
                                            <tr role="row">
                                                    <th>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" onclick='checkAllCheckBox(document.depositForm.depoCheBox, this)'>
                                                            <label></label>
                                                        </div>
                                                    </th>
                                                    <th>Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Amount</th>
                                                    <th>Remarks</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="sk_row_hover" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="depoCheBox" >
                                                            <label ></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
                                                    </td>


                                                </tr>

                                                <tr class="sk_row_hover" role="row">
                                                    <td>
                                                        <div class="checkbox checkCenter">
                                                            <input type="checkbox" name="depoCheBox">
                                                            <label ></label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        1
                                                    </td>
                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="Aditya Birla Group" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="149658.00" readonly>
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="tbl-input-field">
                                                            <input type="text" class="form-control txt-field"
                                                                value="lipsum as it is sometimes known, is dummy text..."
                                                                readonly> </div>
                                                    </td>


                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                    </form>

                                    <div class="add-row-wrapper">
                                        <button class="btn-add-row" onclick="insertNewRow('tbxDepositInfo', 'depoCheBox')">
                                            <img src="assets/images/add-row-icon.svg" alt="add-row-icon">
                                            <span>Add Row</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group form-box">
                                            <label>Closing Balance</label>
                                            <input type="text" placeholder="Enter Closing Balance" class="form-control form-textbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-box col-md-6 pe-0">
                                            <label>Remarks</label>
                                            <textarea class="form-control form-textbox" placeholder="Enter Your Remarks"></textarea>
                                        </div>
                                        <div class="col-md-6 text-end d-flex align-items-end justify-content-end mb-2">
                                            <button type="button" data-bs-dismiss="modal" class="waves-effect waves-light btn cancel-btn">CANCEL</button>
                                            <button type="button" class="waves-effect waves-light btn bg-gradient-primary submit-btn">SAVE</button>
                                        </div>
                                    </div>
                                </div>


                            </section>

                            <!-- Add Petty Cash Section End Here -->


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