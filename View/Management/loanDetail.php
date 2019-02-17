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
                                <li><a href="#">Loan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Loan Detail</span>
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
<form method="post" action="../../Control/Management/actionGuarantor.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Loan Detail</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <!--         write your code inside here    ------->
                                    <?php
                                    $result = $_SESSION['loanInfomation'];
                                    ?>
                                    <table id="customerRegistration" class="table table-bordered table-striped table hover-table">
                                        <tr>
                                            <th>Total Payback Amount </th>
                                            <td>RM <?php echo $result['totalPaybackAmount'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Borrow Amount</th>
                                            <td>RM <?php echo $result['borrowAmount'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Amount per Instalment</th>
                                            <td>RM <?php echo $result['amountPerInstalment'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Interest</th>
                                            <td>RM <?php echo $result['interest'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Deposit</th>
                                            <td>RM <?php echo $result['deposit'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Penalty</th>
                                            <td>RM <?php echo $result['Penalty'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Instalment</th>
                                            <td> <?php echo $result['totalInstalment'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Instalment left</th>
                                            <td> <?php echo $result['instalmentLeft'] ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Instalment Type</th>
                                            <td> 

                                                <?php
                                                if ($result['instalmentType'] == 1) {
                                                    echo "Daily";
                                                }
                                                if ($result['instalmentType'] == 2) {
                                                    echo "Weekly";
                                                }
                                                if ($result['instalmentType'] == 3) {
                                                    echo "Monthly";
                                                }
                                                ?></td>
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