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
                                <li><span>New Customer</span>
                                    <span class="bread-slash">/</span> 
                                </li>
                                <li><span class="bread-blod">New Guarantor</span></li>
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
<form method="post" action="../../Control/Management/newCustomer.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Guarantor</h1>
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
                                            <th>Guarantor Name : </th>
                                            <td><input type="text" name="guarantorName" value="" required autofocus class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Picture : </th>
                                            <td>
                                                <input type="file" name="fileToUpload" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Ic No :</th>
                                            <td><input type="number"  name="guarantorIcNo" required="" value="" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Home Address :</th>
                                            <td><input type="text" name="guarantorHomeAddress" required="" value="" size="40"class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Contact No : </th>
                                            <td><input type="number" name="guarantorContactNo" required="" value="" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Work :</th>
                                            <td><input type="text" name="guarantorWork"  size="40" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <th>Guarantor Work Address :</th>
                                            <td><input type="text" name="guarantorWorkAddress"  size="40" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="javascript:history.go(-1)" class="btn btn-primary btn-xs">Back</a>&nbsp;&nbsp;
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
</form>

<?php
require_once 'footer.php';
?>