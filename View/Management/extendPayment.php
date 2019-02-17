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
                                <li><span class="bread-blod">Extend Payment</span>
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
                            <h1>Extend <span class="table-project-n">Next </span> Payment</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <form action="../../Control/Management/extendPayment.php" method="post">
                            <table id="" class="table table-bordered table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>CUSTOMER1</td>
                                </tr>
                                <tr>
                                    <th>Date Extend</th>
                                    <td>
                                        <input type="text" required id="dateExtend" name="dateExtend" value="" readonly="readonly" class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-success btn-xs">Submit</button>&nbsp;
                                        <button class="btn btn-danger btn-xs">Reset</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once './footer.php';
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(document).ready(function () {
        $("#dateExtend").datepicker();
    });
</script>