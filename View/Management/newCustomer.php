<?php
require_once 'header.php';
?>
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="breadcome-menu" style="float:left;">
                                <li><a href="#">Customer</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">New Customer</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'mobileContent.php';
?>
<form method="post" action="../../Control/Management/actionGuarantor.php" enctype="multipart/form-data">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>New Customer</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <!--         write your code inside here    ------->
                                    <table id="customerRegistration" align="center" class="table table-bordered table-striped table hover-table">
                                        <tr>
                                            <th>Name : </th>
                                            <td><input type="text" name="name" value="" required="" class="form-control" autofocus/></td>
                                        </tr>
                                        <tr>
                                            <th>Picture : </th>
                                            <td>
                                                <input type="file" name="fileToUpload"  class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ic No :</th>
                                            <td><input type="text"  name="icNo" required="" value="" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Home Address :</th>
                                            <td><input type="text" name="address" required="" value="" size="40"class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Contact No : </th>
                                            <td><input type="number" name="contactNo" required="" value="" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Work :</th>
                                            <td><input type="text" name="work"  size="40"class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Work Address :</th>
                                            <td><input type="text" name="workAddress"  size="40" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor : </th>
                                            <td>
                                                <input type="radio" required id="guarantor" name="guarantor" value="1"  /> <label for="guarantor">yes</label>
                                                <input type="radio" required id="noGuarantor" name="guarantor" value="2"/> <label for="noGuarantor">No</label>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline10-list shadow-reset mg-t-30">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Loan Application</h1>
                                <div class="sparkline10-outline-icon">
                                    <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline10-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="basic-login-inner inline-basic-form">


                                            <!---------- write your form inside here    ---------->
                                            <table id="loanApplication" align="center" class="table table-bordered table-striped">
                                                <tr>
                                                    <th><label for="borrowAmount">Borrow Amount</label></th>
                                                    <td><input type="number" required="" class="form-control" id="borrowAmount" name="borrowAmount" value="" /></td>
                                                </tr>
                                                <tr>
                                                    <th><label for="deposit">Deposit</label></th>
                                                    <td><input type="number" required="" id="deposit" name="deposit" value="" class="form-control"/></td>
                                                </tr>
                                                <tr>
                                                    <th><label for="interestRate">Interest rate</label></th>
                                                    <td><input type="number" required="" id="interestRate" name="interestRate" value="" class="form-control"/></td>
                                                </tr>
                                                <tr>
                                                    <th><label for=instalment">Instalment</label></th>
                                                    <td><input type="number" required  id="instalment" name="instalment" maxlength="50" value=""class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th><label for=instalment">Amount per instalment</label></th>
                                                    <td><input type="number" required  id="amountPerInstalment" name="amountPerInstalment" maxlength="50" value=""class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th><label for="instalmentType">instalment Type</label></th>
                                                    <td><select id="instalmentType" name="instalmentType" class="form-control">
                                                            <option value="1">Daily</option>
                                                            <option value="2">Weekly</option>
                                                            <option value="3">Monthly</option>
                                                        </select>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>

                                                        <input type="submit" value="Submit" class='btn btn-success btn-xs success'/>&nbsp;&nbsp;
                                                        <input type="reset" value="Reset"class='btn btn-danger btn-xs delete' />
                                                    </td>
                                                </tr>
                                            </table>
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
</form>

<?php
require_once 'footer.php';
?>