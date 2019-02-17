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
                                <li><span class="bread-blod">Customer Detail</span>
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
<form method="post" action="">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Customer Detail</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                </div>
                            </div>
                        </div>
                        <?php
                        $customerDetail = $_SESSION['customerDetail'];
                        $loanDetail = $_SESSION['loanDetails'];
                        ?>
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <!--         write your code inside here    ------->
                                    <table id="" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Name</th>
                                            <td>
                                                <?php echo $customerDetail->name ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Picture</th>
                                            <td>
                                                <!------------
                                                echo '<img src="data:image/jpeg;base64,' . $activityDetail->image . '" width="60px" height="60px"/>';
                                                --------->
                                                <?php
                                                if (!empty($customerDetail->picture)) {
                                                    echo '<img src="data:image/jpeg;base64,' . $customerDetail->picture . '" width="60px" height="60px"/>';
                                                } else {
                                                    ?>
                                                    <img src="noimage.png" width="50px" height="50px"/>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ic No</th>
                                            <td>
                                                <?php echo $customerDetail->icNo ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Home Address</th>
                                            <td>
                                                <?php echo $customerDetail->homeAddress ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Contact No</th>
                                            <td>
                                                <?php echo $customerDetail->contactNo ?>
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
                                <h1>Loan Detail</h1>
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
                                            <table id="" class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Name</th>
                                                    <td>
                                                        <?php echo $customerDetail->name ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Staff in Charge</th>
                                                    <td>
                                                        <?php echo $loanDetail['staffName'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Total Payback Amount</th>
                                                    <td>
                                                        RM <?php echo $loanDetail['totalPaybackAmount'] ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Borrow Amount</th>
                                                    <td>
                                                        RM <?php echo $loanDetail['borrowAmount'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Interest</th>
                                                    <td>RM <?php echo $loanDetail['interest'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Instalment </th>
                                                    <td><?php echo $loanDetail['totalInstalment'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Amount per Instalment </th>
                                                    <td>RM <?php echo $loanDetail['amountPerInstalment'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Instalment left</th>
                                                    <td><?php echo $loanDetail['instalmentLeft'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Instalment Type</th>
                                                    <td>
                                                        <?php
                                                        if ($loanDetail['instalmentType'] == 1) {
                                                            echo "Daily";
                                                        } else if ($loanDetail['instalmentType'] == 2) {
                                                            echo "Weekly";
                                                        } else if ($loanDetail['instalmentType'] == 3) {
                                                            echo "Monthly";
                                                        } else {
                                                            echo "Problem Occur,Contact me";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> Penalty</th>
                                                    <td>
                                                        RM <?php echo $loanDetail['penalty'] ?>
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