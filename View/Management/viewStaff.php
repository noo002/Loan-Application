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
                                <li><span class="bread-blod">View Staff</span>
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
/*
  <?php
  $detail = '<button class="btn btn-primary btn-xs" name="detail">Detail</button>&nbsp';
  $inactive = '<button class="btn btn-success btn-xs" name="inactive">Inactive</button>';
  ?>
 *  */
?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>View <span class="table-project-n">All </span> Staff</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <form method="post" action="../../Control/Management/actionViewStaff.php">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th>Name</th>
                                            <th>Total Customer</th>
                                            <th>Contact No</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $staffList = $_SESSION['staffList'];
                                        foreach ($staffList as $row) {
                                            $detail = '<button class="btn btn-primary btn-xs" value="' . $row['staffId'] . '" name="detail">Detail</button>&nbsp';
                                            $inactive = '<button class="btn btn-success btn-xs" value="' . $row['staffId'] . '" name="inactive">Inactive</button>';
                                            echo "<tr>";
                                            echo "<td>" . $row['staffId'] . "  </td>";
                                            echo "<td>". $row['staffName'] ."</td>";
                                            echo "<td>". $row['totalCustomer']  ."</td>";
                                            echo "<td>". $row['contactNo']  ."</td>";
                                            if($row['status'] == 1){
                                                echo "<td>Active </td>";
                                            }else{
                                                echo "<td>Inactive </td>";
                                            }
                                            echo "<td>".$detail ,$inactive."</td>";
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
