<?php include ("menu2.php"); ?>

<div class="col-xl-9 col-md-8">
    <h4 class="widget-title">Dashboard</h4>
    <div class="row">
        <div class="col-lg-4">
            <a href="wallet.php" class="dash-widget dash-bg-1">
                <img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img">NGN <?php echo number_format(intval($balance *1),2);?>

                <div class="dash-widget-info">
                    <span>Balance</span>
                </div>
            </a>
        </div>
        <?php
        $query="SELECT  sum(amount) FROM bill_payment where username = '".$loggedin_session."'";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
            $sp=$row[0];


        }
        ?>
        <div class="col-lg-4">
            <a href="myinvoice.php" class="dash-widget dash-bg-2">
            <img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img">NGN <?php echo number_format(intval($sp *1),2);?>

                <div class="dash-widget-info">
                    <span>Total Bills</span>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <div class="dash-widget dash-bg-3">
                <?php
                if ($account_no==1 && $account_name==1) {
                    echo " <div> <a href=virtual.php>create Virtual account </a></div>";
                }
                else {
                    echo "<div> <a> Bank Name:".$account_name."  
Account No:".$account_no."
</a></div>";
//                    echo "<span>Account No:".$account_no."</span>";
                }
                ?>
                <div class="dash-widget-info">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
                <div class="card mb-0">
                    <div class="row no-gutters">
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h6 class="title">Plan Details</h6>
                                <div class="sp-plan-name">
                                    <h6 class="title">
                                        Gold <span class="badge badge-success badge-pill">Active</span>
                                    </h6>
                                    <p>Subscription ID: <span class="text-base">100394949</span></p>
                                </div>
                                <ul class="row">
                                    <li class="col-6 col-lg-6">
                                        <p>Started On 15 Jul, 2020</p>
                                    </li>
                                    <li class="col-6 col-lg-6">
                                        <p>Price $1502.00</p>
                                    </li>
                                </ul>
                                <h6 class="title">Last Payment</h6>
                                <ul class="row">
                                    <li class="col-sm-6">
                                        <p>Paid at 15 Jul 2020</p>
                                    </li>
                                    <li class="col-sm-6">
                                        <p><span class="text-success">Paid</span>  <span class="amount">$1502.00</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sp-plan-action card-body">
                                <div class="mb-2">
                                    <a href="provider-subscription.html" class="btn btn-primary"><span>Change Plan</span></a>
                                </div>
                                <div class="next-billing">
                                    <p>Next Billing on <span>15 Jul, 2021</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>﻿
<?php include ("footer.php"); ?>
