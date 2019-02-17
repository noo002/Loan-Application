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
                            <h1>Completed <span class="table-project-n">Loan </span> Customer</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <form action="../../Control/Management/actionCompletedCustomer.php" method="post">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="name" data-editable="false">Name</th>
                                            <th data-field="action" data-editable="false">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $customerList = $_SESSION['completedLoan'];
                                        foreach ($customerList as $row) {
                                            $select = '<button name="customerId" class="btn btn-custon-four btn-primary btn-xs" value="'. $row['customerId']  .'">Select</button>';
                                            echo "<tr>";
                                            echo "<td>". $row['customerId']  ."</td>";
                                            echo "<td>".$row['customerName']   ."</td>";
                                            echo "<td>$select</td>";
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
