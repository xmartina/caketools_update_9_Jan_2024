<?php
if ($m_wallet_status == 'm_3'){
    $m_wallet_status = 'Not Connected';
}elseif ($m_wallet_status == 2){
    $m_wallet_status = 'Pending Approval';
}elseif ($m_wallet_status == 1){
    $m_wallet_status = 'Connected';
}

if ($b_wallet_status == 'b_3'){
    $b_wallet_status = 'Not Connected';
}elseif ($b_wallet_status == 2){
    $b_wallet_status = 'Pending Approval';
}elseif ($b_wallet_status == 1){
    $b_wallet_status = 'Connected';
}
?>
<div class="wallet-list">
    <div class="tf-wallet" onclick="location.href='/connect_wallet'">
        <div class="icon">
            <img src="/assets/images/svg/icon-wallet-1.svg" alt="Image">
            <span class="label"><?=$m_wallet_status?></span>
        </div>
        <h6 class="title"><a href="#"> Meta Mask</a></h6>
    </div>
    <div class="tf-wallet" onclick="location.href='/connect_wallet'">
        <div class="icon">
            <img src="/assets/images/svg/icon-wallet-2.svg" alt="Image">
            <span class="label"><?=$b_wallet_status?></span>
        </div>
        <h6 class="title"><a href="#">Binance</a> </h6>
    </div>
</div>