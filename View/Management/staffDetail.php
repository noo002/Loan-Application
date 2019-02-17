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
                                <li><span class="bread-blod">Staff Detail</span>
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
<form method="post" action="registerStaff.php">
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Staff Detail</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>

                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <!--         write your code inside here    ------->
                                    <table id="" class="table table-bordered table-striped">
                                        <tr>
                                            <th>Name</th>
                                            <td>
                                                <?php echo $_SESSION['staffDetail']['name']  ?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <?php echo $_SESSION['staffDetail']['email']  ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td>
                                                <?php if($_SESSION['staffDetail']['gender'] ==1){
                                                    echo "Male";
                                                }
                                                else{
                                                    echo "Female";
                                                }
                                                    
                                                
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Home Address</th>
                                            <td>
                                                <?php echo $_SESSION['staffDetail']['address']  ?>
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
</form>

<?php
require_once 'footer.php';
?>