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
                                <li><span class="bread-blod">View payment</span>
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
                            <h1>View <span class="table-project-n">All </span> Payment</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="false">Name</th>
                                        <th>Staff in Charge</th>
                                        <th data-field="amountPerInstalment" data-editable="false">Amount Received</th>
                                        <th data-field="nextDatePayment" data-editable="false">Date Paid</th>
                                        <th data-editable="false">Payment Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $paymentList = $_SESSION['payment'];
                                    foreach ($paymentList as $row) {
                                        $edit = ' <button name="edit" value="' . $row['paymentId'] . '" class="btn btn-success btn-xs">Edit</button>';
                                        echo "<tr>";
                                        echo "<td>" . $row['paymentId'] . "</td>";
                                        echo "<td>" . $row['customerName'] . "</td>";
                                        echo "<td>" . $row['staffName'] . "</td>";
                                        echo "<td>RM " . $row['amountReceived'] . "</td>";
                                        echo "<td>" . $row['datePaid'] . "</td>";
                                        if ($row['paymentType'] == 1) {
                                            echo "<td>1 Instalment</td>";
                                        } else if ($row['paymentType'] == 2) {
                                            echo "<td>Partially Instalment</td>";
                                        } else if ($row['paymentType'] == 3) {
                                            echo "<td>Penalty</td>";
                                        } else {
                                            echo "<td>Contact Me</td>";
                                        }
                                        echo "<td>$edit</td>";
                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once './footer.php';
