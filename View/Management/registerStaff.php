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
                                <li><a href="#">Staff</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">New Staff</span>
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
<form method="post" action="../../Control/Management/registerStaff.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>New Staff</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <!--         write your code inside here    ------->
                                    <table id="customerRegistration"  class="table table-bordered table-striped table hover-table">
                                        <tr>
                                            <th>Name : </th>
                                            <td><input  type="text" required name="name" value=""  class="form-control" autofocus/></td>
                                        </tr>
                                        <tr>
                                            <th>email : </th>
                                            <td>
                                                <input type="email" required name="email"  class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gender :</th>
                                            <td>
                                                <label><input type="radio" required checked name="gender" value="1" />Male</label>  &nbsp;
                                                <label><input type="radio" name="gender" value="2" />Female</label>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Home Address :</th>
                                            <td><input type="text" name="address" required value="" size="40"class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Contact No
                                            </th>
                                            <td>
                                                <input type="text" name="contactNo" required class="form-control" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>
                                                <ul>
                                                    <li>Email cannot change after registered.</li>
                                                    <li>Password will send through registered email.</li>
                                                </ul>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td></td>
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