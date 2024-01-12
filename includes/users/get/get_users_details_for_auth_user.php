<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

//Get Users data from users table
//$sql = "SELECT btc_bal, eth_bal, usdt_bal FROM users WHERE id = $user_id";
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $fullName = $firstName . " " . $lastName;
    $gender = $row['gender'];
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
}