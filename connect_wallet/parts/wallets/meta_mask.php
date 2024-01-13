<?php

include_once (rootDir.'includes/wallet/get/main.php');
?>
<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#metaMask">
    <div class="tf-wallet">
        <div class="icon align-items-center">
            <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">

        </div>
        <h6 class="title d-flex align-items-center"><a href="#"><span class="name" style="max-width: 230px min-width: 230px">Meta Mask</span> </a> <?php if ($m_wallet_status == '2') { ?><div class="ml-3 p-2 bg-info text-white rounded" style="font-size: 10px; max-width: 100px; min-width: 100px;"> Pending Approval</div><?php }elseif ($m_wallet_status == '1') { ?><div class="ml-3 p-2 text-success rounded" style="font-size: 12px; max-width: 120px; background-color: #fff!important;"> Connected</div> <?php } ?>
        </h6>
    </div>
</div>