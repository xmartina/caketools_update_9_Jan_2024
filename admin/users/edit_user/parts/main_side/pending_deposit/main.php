<?php
$query = "SELECT * FROM deposit WHERE dep_user_id = '$user_acct_id' AND dep_status = 0 ORDER BY dep_id DESC";
$result = $conn->query($query);
if (!$result) {
    die('Query Error: ' . $conn->error);
}

$get_approved_deposit = "SELECT * FROM deposit WHERE dep_user_id = '$user_acct_id' AND dep_status = 1 ORDER BY dep_id DESC";
$a_result = $conn->query($get_approved_deposit);
if (!$a_result) {
    die('Query Error: ' . $conn->error);
}
?>
<div class="col-xl-6 col-md-6">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Pending Deposits</h5>
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
            <ul class="p-0 m-0">
                <?php while ($data = $result->fetch_assoc()) { if (empty($data['dep_currency'])) { ?>
                    <li class="d-flex mb-4 pb-1">User has not made any deposit</li>
                    <?php
                } else { ?>
                <?php
                $get_user_data = "SELECT * FROM users WHERE id = '".$data['dep_user_id']."'";
                $u_result = $conn->query($get_user_data);
                $user_data = $u_result->fetch_assoc()

                ?>
                <?php  if (empty($data['dep_currency'])) { ?>
                    <li class="d-flex mb-4 pb-1">User has not made any deposit</li>
                <?php } ?>
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <?php
                        if ($data['dep_currency'] == 'ethereum') {
                            $method_img = "eth.png";
                        }elseif ($data['dep_currency'] == 'usdt') {
                            $method_img = "usdt.png";
                        }elseif ($data['dep_currency'] == 'bitcoin') {
                            $method_img = "btc.png";
                        }
                        ?>
                        <img src="<?=adminUrl?>assets/img/crypto/rounded_circle/<?=$method_img?>" alt="avatar" class="rounded" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0"><?=$data['dep_currency']?></h6>
                            <?php
                            if ($data['dep_currency'] == 'ethereum') {
                                $currency_symbol = "<i class='fab fa-ethereum'></i>";
                            }elseif ($data['dep_currency'] == 'usdt') {
                                $currency_symbol = '₮';
                            }elseif ($data['dep_currency'] == 'bitcoin') {
                                $currency_symbol = "<i class='fab fa-bitcoin'></i>";
                            }
                            ?>
                            <small>
                                <span><?=$currency_symbol.$data['dep_amount']?> | <i class="mdi mdi-calendar-blank-outline mdi-14px"></i> <?=$data['dep_request_time'] . ' | ' . $data['dep_request_date'] ?></span>
                            </small>
                        </div>
                        <?php
                        if (isset($_POST['update_user_deposit_bal']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Start a transaction
                            $conn->begin_transaction();

                            // Update deposit status
                            $update_query = "UPDATE users SET dep_status = 1 WHERE dep_user_id = ? AND dep_id = ?";
                            $stmt = $conn->prepare($update_query);
                            $stmt->bind_param("ii", $user_acct_id, $data['dep_id']);

                            if ($stmt->execute()) {
                                // Update user balance
                                $depo_amount = $data['dep_amount'];

                                $update_bal_query = "";
                                switch ($data['dep_currency']) {
                                    case 'ethereum':
                                        $update_bal_query = "UPDATE users SET eth_bal = eth_bal + ? WHERE id = ?";
                                        break;
                                    case 'usdt':
                                        $update_bal_query = "UPDATE users SET usdt_bal = usdt_bal + ? WHERE id = ?";
                                        break;
                                    case 'bitcoin':
                                        $update_bal_query = "UPDATE users SET btc_bal = btc_bal + ? WHERE id = ?";
                                        break;
                                    // Add more cases as needed

                                    default:
                                        // Handle unsupported currency
                                        break;
                                }

                                if (!empty($update_bal_query)) {
                                    $update_bal_stmt = $conn->prepare($update_bal_query);
                                    $update_bal_stmt->bind_param("ii", $depo_amount, $user_acct_id);

                                    if ($update_bal_stmt->execute()) {
                                        // Commit the transaction if everything is successful
                                        $conn->commit();
                                        header("Location: " . adminUrl . "users?update_user_success");
                                        exit();
                                    } else {
                                        // Rollback the transaction in case of an error
                                        $conn->rollback();
                                        echo "Error updating user balance: " . $update_bal_stmt->error;
                                    }
                                } else {
                                    // Handle unsupported currency
                                }
                            } else {
                                echo "Error updating user information: " . $stmt->error;
                            }

                            // Close the statements
//                            $stmt->close();
                            if (isset($update_bal_stmt)) {
                                $update_bal_stmt->close();
                            }
                        }
                        ?>



                        <form action="" method="post">
                            <button type="submit" class="badge bg-label-primary rounded-pill" name="update_user_deposit_bal">Approve</button>
                        </form>
                    </div>
                </li>
                <?php } }?>
            </ul>
        </div>
    </div>
</div>
<!--List Approved deposits-->


<div class="col-xl-6 col-md-6">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Approved Deposits</h5>
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
            <ul class="p-0 m-0">
                <?php while ($data = $a_result->fetch_assoc()) { if (empty($data['dep_currency'])) { ?>
                    <li class="d-flex mb-4 pb-1">Don't have any approved deposit</li>
                    <?php
                } else { ?>
                    <?php
                    $get_user_data = "SELECT * FROM users WHERE id = '".$data['dep_user_id']."'";
                    $u_result = $conn->query($get_user_data);
                    $user_data = $u_result->fetch_assoc()

                    ?>
                    <?php  if (empty($data['dep_currency'])) { ?>
                        <li class="d-flex mb-4 pb-1">User has not made any deposit</li>
                    <?php } ?>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <?php
                            if ($data['dep_currency'] == 'ethereum') {
                                $method_img = "eth.png";
                            }elseif ($data['dep_currency'] == 'usdt') {
                                $method_img = "usdt.png";
                            }elseif ($data['dep_currency'] == 'bitcoin') {
                                $method_img = "btc.png";
                            }
                            ?>
                            <img src="<?=adminUrl?>assets/img/crypto/rounded_circle/<?=$method_img?>" alt="avatar" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0"><?=$data['dep_currency']?></h6>
                                <?php
                                if ($data['dep_currency'] == 'ethereum') {
                                    $currency_symbol = "<i class='fab fa-ethereum'></i>";
                                }elseif ($data['dep_currency'] == 'usdt') {
                                    $currency_symbol = '₮';
                                }elseif ($data['dep_currency'] == 'bitcoin') {
                                    $currency_symbol = "<i class='fab fa-bitcoin'></i>";
                                }
                                ?>
                                <small>
                                    <span><?=$currency_symbol.$data['dep_amount']?> | <i class="mdi mdi-calendar-blank-outline mdi-14px"></i> <?=$data['dep_request_time'] . ' | ' . $data['dep_request_date'] ?></span>
                                </small>
                            </div>
                             <div class="badge bg-label-primary rounded-pill" >Successful</div>
                        </div>
                    </li>
                <?php } }?>
            </ul>
        </div>
    </div>
</div>