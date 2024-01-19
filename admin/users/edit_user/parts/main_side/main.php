<?php
$get_user_wallets = "SELECT * FROM wallet WHERE wallet_owner_id = '$user_acct_id'";
$result = $conn->query($get_user_wallets);

if (!$result) {
    die('Query Error: ' . $conn->error);
}

$user_wallet = $result->fetch_assoc();
?>
<div class="col-xl-8 col-lg-7 col-md-7 order-0 order-sm-1 order-md-1">
    <!-- Project table -->
   <?php include_once (adminRootDir . 'users/edit_user/parts/main_side/user_wallet/main.php') ?>
    <!-- /Project table -->
    <div class="row">
        <!-- Meeting Schedule -->
        <?php include_once (adminRootDir . 'users/edit_user/parts/main_side/pending_deposit/main.php') ?>
        <!--/ Meeting Schedule -->
    </div>