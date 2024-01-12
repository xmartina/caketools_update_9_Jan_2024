<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

//Get Users data from users table
//$sql = "SELECT btc_bal, eth_bal, usdt_bal FROM users WHERE id = $user_id";
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user_name = $row['user_name'];
    $email = $row['email'];
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $fullName = $firstName . " " . $lastName;
    $gender = $row['gender'];
    $dob = $row['dob'];
    $address = $row['address'];
    $btc_bal = $row['btc_bal'];
    $eth_bal = $row['eth_bal'];
    $usdt_bal = $row['usdt_bal'];
    $userImg = $row['user_img'];

//    get defuilt settings
    $get_default_settings = "SELECT * FROM default_settings";
    $g_result = $conn->query($get_default_settings);
    $g_row = $g_result->fetch_assoc();
    $default_user_img = $g_row['default_user_img'];
    $default_gender = $g_row['default_gender'];
    $default_dob = $g_row['default_dob'];
    $default_address = $g_row['default_address'];

//    get wallet data
//    Metamask
    $get_wallet_data = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_key = 1";
    $result = $conn->query($get_wallet_data);
    $row = $result->fetch_assoc();
    $m_wallet_id = $row['wallet_id'];
    $m_wallet_ref_id = $row['wallet_ref_id'];
    $m_wallet_owner_id = $row['wallet_owner_id'];
    $m_wallet_key = $row['wallet_key'];
    $m_wallet_status = $row['wallet_status'];

//    binance
    $sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_key = 2";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $b_wallet_id = $row['wallet_id'];
    $b_wallet_ref_id = $row['wallet_ref_id'];
    $b_wallet_owner_id = $row['wallet_owner_id'];
    $b_wallet_key = $row['wallet_key'];
    $b_wallet_status = $row['wallet_status'];
}