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
                                <li><a href="#">Profile</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Change Password</span>
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
<form method="post" action="../../Control/Management/changePassword.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Change Password</h1>
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
                                            <th>Old Password</th>
                                            <td>
                                                <input type="password" name="oldPassword" value="" class="form-control"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>New Password</th>
                                            <td>
                                                <input type="password" name="newPassword" value="" class="form-control"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Confirm Password</th>
                                            <td>
                                                <input type="password" name="confirmPassword" value="" class="form-control"/>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>
                                                <button class="btn btn-success btn-xs">Submit</button>&nbsp;
                                                <button class="btn btn-danger btn-xs">Reset</button>
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