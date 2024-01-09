<?php
//Get Meta Mask Wallet Data
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_key = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$m_wallet_id = $row['wallet_id'];
$m_wallet_ref_id = $row['wallet_ref_id'];
$m_wallet_owner_id = $row['wallet_owner_id'];
$m_wallet_key = $row['wallet_key'];
$m_wallet_status = $row['wallet_status'];

//Get Binance Wallet Data
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_key = 2";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$b_wallet_id = $row['wallet_id'];
$b_wallet_ref_id = $row['wallet_ref_id'];
$b_wallet_owner_id = $row['wallet_owner_id'];
$b_wallet_key = $row['wallet_key'];
$b_wallet_status = $row['wallet_status'];