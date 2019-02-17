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
                                <li><span class="bread-blod">View Customer</span>
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
                            <h1>View <span class="table-project-n">All </span> Customer</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <form method="post" action="../../Control/Management/actionViewCustomer.php">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Loan ID</th>
                                            <th data-field="name" data-editable="false">Name</th>
                                            <th data-field="staffIncharge" data-editable="false">staff handled</th>
                                            <th data-field="instalment" data-editable="false">Instalment (left) </th>
                                            <th>Total Instalment</th>
                                            <th data-field="amountPerInstalment" data-editable="false">amount</th>
                                            <th data-field="nextDatePayment" data-editable="false"> Next Date</th>
                                            <th>Instalment Type</th>
                                            <th>Status</th>
                                            <th data-field="action" data-editable="false">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $customerList = $_SESSION['customerList'];
                                        foreach ($customerList as $row) {
                                            $detail = '<button class="btn btn-custon-four btn-primary btn-xs" value="' . $row['loanId'] . '"  name="detail">Detail</button>&nbsp;';
                                            $transfer = '<button class="btn btn-custon-three btn-warning btn-xs" value="' . $row['loanId'] . '" name="transfer">Transfer</button>&nbsp;';
                                            $run = '<button class="btn btn-custon-three btn-warning btn-xs" value="' . $row['loanId'] . '" name="run">Run</button>';
                                            $unRun = '<button class="btn btn-custon-three btn-warning btn-xs" value="' . $row['loanId'] . '" name="unRun">unRun</button>';
                                            echo "<tr>";
                                            echo "<td>" . $row['loanId'] . "</td>";
                                            echo "<td>" . $row['customerName'] . "</td>";
                                            echo "<td>" . $row['staffName'] . "  </td>";
                                            if ($row['instalmentLeft'] == 0) {
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                                echo "<td>Settled</td>";
                                            } else {
                                                echo "<td>" . $row['instalmentLeft'] . "</td>";
                                                echo "<td>" . $row['totalInstalment'] . "</td>";
                                                echo "<td>" . $row['amountPerInstalment'] . "</td>";
                                                echo "<td>" . $row['nextDatePay'] . "</td>";
                                                if ($row['instalmentType'] == 1) {
                                                    echo "<td>Daily</td>";
                                                }
                                                if ($row['instalmentType'] == 2) {
                                                    echo "<td>Weekly</td>";
                                                }
                                                if ($row['instalmentType'] == 3) {
                                                    echo "<td>Monthly</td>";
                                                }
                                                if ($row['status'] == 1) {
                                                    echo "<td>Active</td>";
                                                    echo "<td>" . $detail, $transfer, $run . "</td>";
                                                } else if ($row['status'] == 2) {
                                                    echo "<td><strong>Run</strong></td>";
                                                    echo "<td>$unRun</td>";  
                                                } else if ($row['status'] == 3) {
                                                    echo "<td>Active</td>";
                                                    echo "<td>" . $detail, $transfer, $run . "</td>";
                                                }
                                            }

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
