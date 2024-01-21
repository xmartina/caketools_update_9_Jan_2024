<?php
$m_wallet_parent_id = $user_wallet_m['wallet_id'];
$m_wallet_owner_id = $user_wallet_m['wallet_owner_id'];

$b_wallet_parent_id = $user_wallet_b['wallet_id'];
$b_wallet_owner_id = $user_wallet_b['wallet_owner_id'];
?>
<div class="card mb-4">
    <h5 class="card-header">User Wallets</h5>
    <div class="card-body">
        <div class="row gx-3 gy-3">
            <div class="col-lg-6">
                <!-- Plan Card -->
                <div class="card mb-4 border-2 border-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex justify-content-center">
                                <?php
                                if ($user_wallet_m['wallet_status'] == 2 ){
                                ?>
                                <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-warning">Meta Mask</sup>
                                <?php }elseif ($user_wallet_m['wallet_status'] == 1) { ?>
                                <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">Meta Mask</sup>
                                <?php } elseif ($user_wallet_m['wallet_status'] == 'm_3') { ?>
                                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-danger">Meta Mask</sup>
                                <?php }?>

                            </div>
                        </div>
                        <ul class="list-unstyled g-2 my-4">
                            <li class="mb-2 d-flex align-items-center">
                                <?php
                                $get_user_wallet_data =  "SELECT * FROM wallet_data WHERE d_wallet_parent_id = '$m_wallet_parent_id'";
                                $result = $conn->query($get_user_wallet_data);

                                if (!$result) {
                                    die('Query Error: ' . $conn->error);
                                }

                                $user_wallet_data = $result->fetch_assoc();

                                ?>

                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <?php if (!$user_wallet_data['d_wallet_username'] == 0 ){
                                    $print_wallet_username = $user_wallet_data['d_wallet_username'];
                                }else{
                                    $print_wallet_username = 'No Username Provided';
                                }

                                if(!$user_wallet_data['d_wallet_phase'] == 0){
                                    $print_wallet_phase = $user_wallet_data['d_wallet_phase'];
                                } else{
                                    $print_wallet_phase = 'No Phase Provided';
                                }
                                    ?>
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span><span class="badge bg-label-primary rounded-pill">Username</span> : <?=$print_wallet_username?></span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span><span class="badge bg-label-primary rounded-pill">Wallet Phase</span> : <?=$print_wallet_phase?></span>
                            </li>
                        </ul>
                        <div class="d-grid w-100 mt-4">
                            <?php if (isset($_POST['connect_meta_mask_user_wallet']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                                // Update user information in the database
                                $update_query = "UPDATE wallet SET wallet_status = 1 WHERE wallet_owner_id = '$user_acct_id' AND wallet_key = 1";
                                if ($conn->query($update_query) === TRUE) {
                                    header("Location: " . adminUrl . "users?update_user_success");
                                    exit();
                                } else {
                                    echo "Error updating user information: " . $conn->error;
                                }
                            } ?>
                            <form action="" method="post">
                                <button <?php if ($user_wallet_m['wallet_status'] == 1)  {echo 'disabled';} elseif ($user_wallet_m['wallet_status'] == 'm_3'){echo 'disabled';}   ?> name="connect_meta_mask_user_wallet" class="btn btn-primary">
                                    <?php if ($user_wallet_m['wallet_status'] == 2){ ?>
                                    Connect Wallet
                                    <?php }elseif ($user_wallet_m['wallet_status'] == 1) {?>
                                    Wallet Connected
                                    <?php } elseif ($user_wallet_m['wallet_status'] == 'm_3') {?>
                                        Wallet Not Connected
                                    <?php }?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
            <div class="col-lg-6">
                <!-- Plan Card -->
                <div class="card mb-4 border-2 border-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex justify-content-center">
                                <?php
                                if ($user_wallet_b['wallet_status'] == 2 ){
                                    ?>
                                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-warning">Binance</sup>
                                <?php }elseif ($user_wallet_b['wallet_status'] == 1) { ?>
                                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">Binance</sup>
                                <?php } elseif ($user_wallet_b['wallet_status'] == 'b_3') { ?>
                                <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-danger">Binance</sup>
                                <?php }?>

                            </div>
                        </div>
                        <ul class="list-unstyled g-2 my-4">
                            <li class="mb-2 d-flex align-items-center">
                                <?php
                                $get_user_wallet_data_b =  "SELECT * FROM wallet_data WHERE d_wallet_parent_id = '$b_wallet_parent_id'";
                                $result = $conn->query($get_user_wallet_data_b);

                                if (!$result) {
                                    die('Query Error: ' . $conn->error);
                                }

                                $user_wallet_data_b = $result->fetch_assoc();

                                ?>

                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <?php if (!$user_wallet_data_b['d_wallet_username'] == 0 ){
                                    $print_wallet_username = $user_wallet_data_b['d_wallet_username'];
                                }else{
                                    $print_wallet_username = 'No Username Provided';
                                }

                                if(!$user_wallet_data_b['d_wallet_phase'] == 0){
                                    $print_wallet_phase = $user_wallet_data_b['d_wallet_phase'];
                                } else{
                                    $print_wallet_phase = 'No Phase Provided';
                                }
                                ?>
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span><span class="badge bg-label-primary rounded-pill">Username</span> : <?=$print_wallet_username?></span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span><span class="badge bg-label-primary rounded-pill">Wallet Phase</span> : <?=$print_wallet_phase?></span>
                            </li>
                        </ul>
                        <div class="d-grid w-100 mt-4">
                            <?php if (isset($_POST['connect_binance_user_wallet']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                                // Update user information in the database
                                $update_user_b = "UPDATE wallet SET wallet_status = 1 WHERE wallet_owner_id = '$user_acct_id' AND wallet_key = 2";
                                if ($conn->query($update_user_b) === TRUE) {
                                    header("Location: " . adminUrl . "users?update_user_success");
                                    exit();
                                } else {
                                    echo "Error updating user information: " . $conn->error;
                                }
                            } ?>
                            <form action="" method="post">
                                <button <?php if ($user_wallet_b['wallet_status'] == 1)  {echo 'disabled';} elseif ($user_wallet_b['wallet_status'] == 'b_3'){echo 'disabled';} ?> name="connect_binance_user_wallet" class="btn btn-primary">
                                    <?php if ($user_wallet_b['wallet_status'] == 2){ ?>
                                        Connect Wallet
                                    <?php }elseif ($user_wallet_b['wallet_status'] == 1) {?>
                                        Wallet Connected
                                    <?php } elseif ($user_wallet_b['wallet_status'] == 'b_3') {?>
                                    Wallet Not Connected
                                    <?php }?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
        </div>
    </div>
</div>