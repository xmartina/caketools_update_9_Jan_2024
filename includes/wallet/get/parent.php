<?php
//Get Wallet Data
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];
$wallet_ref_id = $row['wallet_ref_id'];
$wallet_owner_id = $row['wallet_owner_id'];
$wallet_key = $row['wallet_key'];
$wallet_status = $row['wallet_status'];