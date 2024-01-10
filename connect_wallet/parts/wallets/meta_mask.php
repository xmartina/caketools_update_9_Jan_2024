<?php

include_once (rootDir.'includes/wallet/get/main.php');
?>
<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#metaMask" id="trigMetaMask">
    <div class="tf-wallet">
        <div class="icon align-items-center">
            <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">

        </div>
        <h6 class="title"><a href="#"> Meta Mask <?php if ($m_wallet_status == '2') { ?><span class="p-2 bg-info text-muted" style="font-size: 12px;"> Pending Approval</span><?php } ?></a></h6>
    </div>
</div>