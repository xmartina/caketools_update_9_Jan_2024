<?php
//GET MetaMask Wallet Data
$sql = "SELECT * FROM wallet_data WHERE d_wallet_parent_id = $m_wallet_id AND d_wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$d_wallet_id  = $row['d_wallet_id'];
$d_wallet_parent_id  = $row['d_wallet_parent_id'];
$d_wallet_name  = $row['d_wallet_name'];
$d_wallet_phase  = $row['d_wallet_phase'];
$d_wallet_owner_id  = $row['d_wallet_owner_id'];
$d_wallet_username  = $row['d_wallet_username'];

//GET Binance Wallet Data
$sql = "SELECT * FROM wallet_data WHERE d_wallet_parent_id = $b_wallet_id AND d_wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$d_wallet_id  = $row['d_wallet_id'];
$d_wallet_parent_id  = $row['d_wallet_parent_id'];
$d_wallet_name  = $row['d_wallet_name'];
$d_wallet_phase  = $row['d_wallet_phase'];
$d_wallet_owner_id  = $row['d_wallet_owner_id'];
$d_wallet_username  = $row['d_wallet_username'];