<?php
$query = "SELECT * FROM wallet WHERE wallet_status = 2 ORDER BY wallet_id DESC LIMIT 6";
$result = $conn->query($query);
if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<!-- Meeting Schedule -->
<div class="col-xl-4 col-md-6">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Pending Wallet Connect</h5>
            <div class="dropdown">
                <button
                    class="btn p-0"
                    type="button"
                    id="meetingSchedule"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="meetingSchedule">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <style>
                li.pd_hover:hover{
                    background-color: rgba(186, 184, 184, 0.05);
                    cursor: pointer;
                }
            </style>
            <ul class="p-0 m-0">
                <?php while ($data = $result->fetch_assoc()) { ?>
                    <?php $get_wallet_data = "SELECT * FROM wallet_data WHERE d_wallet_parent_id = '".$data['wallet_id']."'";
                    $d_result = $conn->query($get_wallet_data);
                    $wallet_data = $d_result->fetch_assoc()
                    ?>
                    <?php
                    $get_user_data = "SELECT * FROM users WHERE id = '".$data['wallet_owner_id']."'";
                    $u_result = $conn->query($get_user_data);
                    $user_data = $u_result->fetch_assoc()
                    ?>
                <li class="d-flex mb-4 pb-1 pd_hover" onclick="location.href='<?=adminUrl?>users/edit_user?user_acct_id=<?= $user_data['id'] ?>'">
                        <div class="avatar flex-shrink-0 me-3">
                            <?php
                                if ($data['wallet_key'] == 1) {
                                    ?>
                                    <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image" class="rounded">
                                    <?php
                                } elseif ($data['wallet_key'] == 2) {
                                    ?>
                                    <img src="/assets/images/svg/icon-wallet-2.svg" alt="Image" class="rounded">
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0"><?=$wallet_data['d_wallet_name']?></h6>
                            <small>
                                <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                <span><?=$wallet_data['d_wallet_date_updated']?>| <?=$wallet_data['d_wallet_time_updated']?></span>
                            </small>
                        </div>
                        <div class="badge bg-label-primary rounded-pill">@<?=$user_data['user_name']?></div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div style="cursor: pointer; border-bottom-left-radius: 0.625rem; border-bottom-right-radius: 0.625rem" class="py-2 px-3 bg-info text-white text-center mt-3 w-100" onclick="location.href='<?=adminUrl?>wallet'">view more</div>
    </div>
</div>
<!--/ Meeting Schedule -->