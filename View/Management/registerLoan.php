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
                                <li><a href="#">Register Loan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod"><?php echo $_SESSION['temp']['customerName'] ?></span>
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
<form method="post" action="../../Control/Management/registerNewLoan.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
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
                                                    <td><input type="number" required  id="instalment" name="instalment" value=""class="form-control" /></td>
                                                </tr>
                                                <tr>
                                                    <th><label for=amountPerInstalment">Amount Per Instalment</label></th>
                                                    <td><input type="number" required  id="amountPerInstalment" name="amountPerInstalment" value=""class="form-control" /></td>
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