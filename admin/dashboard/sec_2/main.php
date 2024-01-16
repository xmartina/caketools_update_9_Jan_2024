<?php
$query = "SELECT * FROM deposit WHERE dep_status = 0 ORDER BY dep_id DESC LIMIT 4";
$result = $conn->query($query);
if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<!-- Social Network Visits -->
<div class="col-xl-4 col-md-6">
    <div class="card h-100">
        <div class="pt-3 px-3 d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Deposit Request</h5>
            <div class="dropdown">
                <button
                    class="btn p-0"
                    type="button"
                    id="socialNetworkList"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="socialNetworkList">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-body mt-1 pt-1" >
            <div class="mb-3">
                <small class="pb-4" style="cursor: pointer" onclick="location.href='/admin/deposit';">view all request</small>
            </div>
            <div class="my-3"></div>
            <ul class="p-0 m-0">
                <style>
                    li.pd_hover:hover{
                        background-color: rgba(90, 85, 85, 0.05);
                        color: #aea8a8;
                        transition: all 320ms ease-in-out;
                        border-radius: 0.65em;
                    }
                </style>
                <?php while ($data = $result->fetch_assoc()) {
                ?>
                    <?php
                        $get_user_data = "SELECT * FROM users WHERE id = '".$data['dep_user_id']."'";
                        $u_result = $conn->query($get_user_data);
                        $user_data = $u_result->fetch_assoc()

                    ?>
                <li style="cursor: pointer;" class="d-flex mb-3 pd_hover" onclick="location.href='<?=adminUrl?>deposit/edit_deposit?<?=$data['dep_id']?>'">
                    <div class="flex-shrink-0">
                        <img
                            src="<?=adminUrl?>assets/img/icons/brands/facebook-rounded.png"
                            alt="facebook"
                            class="me-3"
                            height="34" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0 text-capitalize"><?=$data['dep_currency']?></h6>
                            <small>@<?=$user_data['user_name']?></small>
                        </div>
                        <div class="d-flex align-items-center">
                            <?php
                                if ($data['dep_currency'] == 'ethereum') {
                                    $currency_symbol = "<i class='fab fa-ethereum'></i>";
                                }elseif ($data['dep_currency'] == 'usdt') {
                                    $currency_symbol = '₮';
                                }elseif ($data['dep_currency'] == 'bitcoin') {
                                    $currency_symbol = "<i class='fab fa-bitcoin'></i>";
                                }
                            ?>
                            <span class="h6 mb-0"><?=$currency_symbol.$data['dep_amount']?></span>
                            <div class="ms-3 badge bg-label-success rounded-pill"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!--/ Social Network Visits -->