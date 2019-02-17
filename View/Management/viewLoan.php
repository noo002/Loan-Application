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
                                <li><span class="bread-blod">View Loan</span>
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
                            <h1>View <span class="table-project-n">All </span> Loan</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <form method="post" action="../../Control/Management/actionViewLoan.php">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th>Customer Name</th>
                                            <th>Staff Name</th>
                                            <th>Instalment (left)</th>
                                            <th>Total Instalment</th>

                                            <th>Amount</th>
                                            <th>Instalment Type</th>
                                            <th>Next Pay Date</th>
                                            <th>Penalty</th>
                                            <th data-field="action" data-editable="false">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loanDetail = $_SESSION['loanDetail'];
                                        foreach ($loanDetail as $row) {
                                            $detail = '<button class="btn btn-custon-four btn-primary btn-xs" value="' . $row['customerId'] . '" name="detail">Detail</button>';
                                            echo "<tr>";
                                            echo "<td> " . $row['customerId'] . " </td>";
                                            echo "<td>" . $row['customerName'] . " </td>";
                                            echo "<td>" . $row['staffName'] . " </td>";
                                            echo "<td>" . $row['instalmentLeft'] . " </td>";
                                            echo "<td>" . $row['totalInstalment'] . " </td>";

                                            echo "<td>RM " . $row['amountperinstalment'] . " </td>";
                                            if ($row['instalmentType'] == 1) {
                                                echo "<td> Daily </td>";
                                            } else if ($row['instalmentType'] == 2) {
                                                echo "<td> Weekly </td>";
                                            } else if ($row['instalmentType'] == 3) {
                                                echo "<td> Monthly </td>";
                                            } else {
                                                echo "<td>Problem Occur</td>";
                                            }
                                            echo "<td>" . $row['nextDatePay'] . " </td>";
                                            echo "<td>RM " . $row['penalty'] . " </td>";
                                            echo "<td>$detail</td>";
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
