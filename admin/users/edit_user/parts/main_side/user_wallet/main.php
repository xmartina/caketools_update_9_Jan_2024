<?php
$m_wallet_parent_id = $user_wallet_m['wallet_id'];
$m_wallet_owner_id = $user_wallet_m['wallet_owner_id'];
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
                                <button <?php if ($user_wallet_m['wallet_status'] == 1)  {echo 'disabled';} ?> name="connect_meta_mask_user_wallet" class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                                    <?php if ($user_wallet_m['wallet_status'] == 2){ ?>
                                    Connect Wallet
                                    <?php }elseif ($user_wallet_m['wallet_status'] == 1) {?>
                                    Wallet Connected
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
                            <span class="badge bg-label-primary rounded-pill">Standard</span>
                            <div class="d-flex justify-content-center">
                                <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                                <h1 class="mb-0 text-primary">99</h1>
                                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                            </div>
                        </div>
                        <ul class="list-unstyled g-2 my-4">
                            <li class="mb-2 d-flex align-items-center">
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>10 Users</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Up to 10 GB storage</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center">
                                <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Basic Support</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="h6 mb-0">Days</span>
                            <span class="h6 mb-0">65% Completed</span>
                        </div>
                        <div class="progress mb-1 rounded" style="height: 6px">
                            <div
                                class="progress-bar rounded"
                                role="progressbar"
                                style="width: 65%"
                                aria-valuenow="65"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <span>4 days remaining</span>
                        <div class="d-grid w-100 mt-4">
                            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                                Upgrade Plan
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
        </div>
    </div>
</div>