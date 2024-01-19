<?php
$query = "SELECT * FROM users WHERE id = $user_acct_id ";
$result = $conn->query($query);
$user_data = $result->fetch_assoc();

if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<!-- User Sidebar -->
<div class="col-xl-4 col-lg-5 col-md-5 order-1 order-sm-0 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <img
                        class="img-fluid rounded-circle mb-3 mt-4" style="object-fit:cover;"
                        <?php if ($user_data['user_img'] == '')  { ?>
                        src="/assets/images/author/author-db.jpg" height="120" width="120" alt="User avatar" />
                    <?php } else { ?>
                        src="/assets/images/author/<?=$user_data['user_img']?>" height="120" width="120" alt="User avatar" />
                    <?php }?>
                    <div class="user-info text-center">
                        <h4 class="text-capitalize"><?=$user_data['first_name']." ".$user_data['last_name']?></h4>
                        <span class="badge bg-label-danger rounded-pill">@<?=$user_data['user_name']?></span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                <div class="d-flex align-items-center me-4 mt-3 gap-3">
                    <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-cash mdi-24px"></i>
                        </div>
                    </div>
                    <div>
                        <?php
                        $user_total_balance = $user_data['eth_bal'] + $user_data['btc_bal'] + $user_data['usdt_bal'];
                        ?>
                        <h4 class="mb-0">$<?=$user_total_balance?></h4>
                        <span>Total Balance</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3 gap-3">
                    <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-briefcase mdi-24px"></i>
                        </div>
                    </div>
                    <div>
                        <?php
                        $get_nft_count = "SELECT COUNT(*) as total_rows FROM nft_parent WHERE current_owner_id = $user_acct_id";
                        $result = $conn->query($get_nft_count);

                        // Check if the query was successful
                        if ($result) {
                        $row = $result->fetch_assoc();
                        $user_total_nft = $row['total_rows'];
                        ?><?php
                            if ($user_total_nft == 0) {
                                $user_total_nft = 0;
                            }
                        ?>
                        <h4 class="mb-0"><?=$user_total_nft?></h4>
                        <span>Total NFTs</span>
                        <?php
                        } else {
                            echo "Error executing the query: " . $conn->error;
                        }

                        ?>

                    </div>
                </div>
            </div>
            <h5 class="pb-3 border-bottom mb-3">Details</h5>
            <div class="info-container">
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Username:</span>
                        <span><?=$user_data['user_name']?></span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Email:</span>
                        <span><?=$user_data['email']?></span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Status:</span>
                        <?php if ($user_data['user_status'] == 0) { ?>
                            <span class="badge bg-label-danger rounded-pill">Inactive</span>
                        <?php } elseif($user_data['user_status'] == 1) { ?>
                            <span class="badge bg-label-success rounded-pill">Active</span>
                        <?php } ?>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Role:</span>
                        <?php if ($user_data['role'] == 1) { ?>
                            <span class="badge bg-label-primary rounded-pill">Admin</span>
                        <?php } elseif ($user_data['role'] == 2) { ?>
                            <span class="badge bg-label-secondary rounded-pill">User</span>
                        <?php } ?>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Address:</span>
                        <?php if ($user_data['address'] == '') { ?>
                            <span>No address set</span>
                        <?php } else { ?>
                            <span><?=$user_data['address']?></span>
                        <?php } ?>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Gender:</span>
                        <?php if ($user_data['gender'] == '') { ?>
                            <span>Gender not set</span>
                        <?php } else { ?>
                            <span><?=$user_data['gender']?></span>
                        <?php } ?>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Gender:</span>
                        <?php if ($user_data['dob'] == '') { ?>
                            <span>DOB not set</span>
                        <?php } else { ?>
                            <span><?=$user_data['dob']?></span>
                        <?php } ?>
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <a
                        href="javascript:;"
                        class="btn btn-primary me-3"
                        data-bs-target="#editUser"
                        data-bs-toggle="modal"
                    >Edit</a
                    >
                    <form method="post" action="">
                        <input type="hidden" name="delete_user" value="<?= $user_data['id'] ?>">
                        <button type="submit" class="btn btn-outline-danger suspend-user">
                            <i class="mdi mdi-delete-outline me-2"></i>
                            <span>Delete User</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /User Card -->
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
<!--/ User Sidebar -->