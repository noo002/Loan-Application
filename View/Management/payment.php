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
                                <li><a href="#">payment</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Make Payment</span>
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
                            <h1>Make <span class="table-project-n">Payment </span> </h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <form action="../../Control/Management/createPayment.php" method="post">
                            <table id="" class="table table-bordered table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $_SESSION['loan']['customerName'] ?></td>
                                </tr>
                                <tr>
                                    <th>Amount  Received</th>
                                    <td>
                                        <input type="number" value="<?php echo $_SESSION['loan']['amountPerInstalment'] ?>" name="amountReceived" required autofocus class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Payment Type
                                    </th>
                                    <td>
                                        <label><input type="radio" required name="paymentType" value="1" />&nbsp; Payment&nbsp;</label>
                                        <label><input type="radio" name="paymentType" value="2" />&nbsp; Partial Payment&nbsp;</label>
                                        <label><input type="radio" name="paymentType" value="3" />&nbsp; Penalty</label>
                                    </td>
                                </tr>                  
                                <tr>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-success btn-xs" >Submit</button>&nbsp;
                                        <input type="reset" value="Reset" class="btn btn-danger btn-xs" />
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
