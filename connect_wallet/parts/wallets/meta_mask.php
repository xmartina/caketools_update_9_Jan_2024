<?php

include_once (rootDir.'includes/wallet/get/main.php');
?>
<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#metaMask" id="trigMetaMask">
    <div class="tf-wallet">
        <div class="icon align-items-center">
            <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">

        </div>
        <h6 class="title d-flex align-items-center"><a href="#"> Meta Mask <?php if ($m_wallet_status == '2') { ?><div class="ml-3 p-2 bg-info text-white rounded-3" style="font-size: 12px;"> Pending Approval</div><?php } ?></a></h6>
    </div>
</div>