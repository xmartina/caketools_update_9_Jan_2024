<?php
session_start();
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
const adminUrl = 'https://caketoolnftmarketplace.com/admin/';
include_once(rootDir . 'includes/generalConfig.php');
include_once (rootDir.'includes/db_connect.php');
//$get_admin_details = "SELECT * FROM admin";
//$result = $conn->query($get_admin_details);
//$row = $result->fetch_assoc();
//$admin_email = $row['admin_email'];

if (isset($_POST['admin_login'])) {
    // Collect user input
    $user_input = $_POST['user_input'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM admin WHERE user_name = '$user_input' OR email = '$user_input'";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Redirect to the dashboard
            $_SESSION['admin_id'] = $row['id'];
            header("Location:".siteUrl. "admin_auth?login-success");
//            sleep(3);
//            $_SESSION['user_id'] = $row['id'];
//            header("Location:". siteUrl. "users/dashboard");
            exit();
        } else {
            header("Location:" .siteUrl. "admin_auth?wrong-pass");
            exit();
        }
    } else {
        header("Location:".siteUrl. "admin_auth?no-user");
        exit();
    }
}

include_once (rootDir . 'admin_auth/login/main.php');

?>
