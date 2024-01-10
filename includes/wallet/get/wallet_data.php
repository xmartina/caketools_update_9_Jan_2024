<?php
//GET MetaMask Wallet Data
$sql = "SELECT * FROM wallet_data WHERE d_wallet_parent_id = $m_wallet_id AND d_wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$m_d_wallet_id  = $row['d_wallet_id'];
$m_d_wallet_parent_id  = $row['d_wallet_parent_id'];
$m_d_wallet_name  = $row['d_wallet_name'];
$m_d_wallet_phase  = $row['d_wallet_phase'];
$m_d_wallet_owner_id  = $row['d_wallet_owner_id'];
$m_d_wallet_username  = $row['d_wallet_username'];

//GET Binance Wallet Data
$sql = "SELECT * FROM wallet_data WHERE d_wallet_parent_id = $b_wallet_id AND d_wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$b_d_wallet_id  = $row['d_wallet_id'];
$b_d_wallet_parent_id  = $row['d_wallet_parent_id'];
$b_d_wallet_name  = $row['d_wallet_name'];
$b_d_wallet_phase  = $row['d_wallet_phase'];
$b_d_wallet_owner_id  = $row['d_wallet_owner_id'];
$b_d_wallet_username  = $row['d_wallet_username'];