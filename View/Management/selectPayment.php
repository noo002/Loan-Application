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
                                <li><a href="#">Payment</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Select Customer</span>
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
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Select <span class="table-project-n">One </span> Customer</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <form action="../../Control/Management/selectPayment.php" method="post">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Loan ID</th>
                                            <th data-field="name" data-editable="false">Name</th>
                                            <th data-field="staffIncharge" data-editable="false">staff in charge</th>
                                            <th data-field="instalment" data-editable="false">Instalment (left) </th>
                                            <th>Total Instalment</th>
                                            <th data-field="amountPerInstalment" data-editable="false">amount</th>
                                            <th data-field="nextDatePayment" data-editable="false"> Next Date pay</th>
                                            <th>Instalment Type</th>
                                            <th data-field="action" data-editable="false">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $customerList = $_SESSION['customerList'];
                                        foreach ($customerList as $row) {
                                            $payment = '<button value="'.$row['loanId'].'" name="loanId" class="btn btn-custon-four btn-primary btn-xs">Payment</button>';
                                            echo "<tr>";
                                            echo "<td>" . $row['loanId'] . "</td>";
                                            echo "<td>" . $row['customerName'] . "</td>";
                                            echo "<td>" . $row['staffName'] . "  </td>";
                                            echo "<td>" . $row['instalmentLeft'] . "</td>";
                                            echo "<td>" . $row['totalInstalment'] . "</td>";
                                            echo "<td>RM " . $row['amountPerInstalment'] . "</td>";
                                            echo "<td>" . $row['nextDatePay'] . "</td>";
                                            if ($row['instalmentType'] == 1) {
                                                echo "<td>Daily</td>";
                                            } else if ($row['instalmentType'] == 2) {
                                                echo "<td>Weekly</td>";
                                            } else {
                                                echo "<td>Monthly</td>";
                                            }
                                            echo "<td>" . $payment . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once './footer.php';
