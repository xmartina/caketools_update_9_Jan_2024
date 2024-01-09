<?php
include_once (rootDir.'includes/db_connect.php');
function generateRandomString($length = 14) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

// Example usage:
$w_ref_id = generateRandomString();
if (isset($_POST['register'])) {
    // Collect user input
    $user_name = $_POST['user_name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Use prepared statements to check email existence
    $emailCheckQuery = "SELECT * FROM users WHERE email = ?";
    $emailCheckStmt = $conn->prepare($emailCheckQuery);
    $emailCheckStmt->bind_param("s", $email);
    $emailCheckStmt->execute();
    $emailCheckResult = $emailCheckStmt->get_result();

    if ($emailCheckResult->num_rows > 0) {
        // Email already exists
        header('Location:' . siteUrl . 'auth/register?email-exists');
        exit();
    }

    // Use prepared statements to check username existence
    $usernameCheckQuery = "SELECT * FROM users WHERE user_name = ?";
    $usernameCheckStmt = $conn->prepare($usernameCheckQuery);
    $usernameCheckStmt->bind_param("s", $user_name);
    $usernameCheckStmt->execute();
    $usernameCheckResult = $usernameCheckStmt->get_result();

    if ($usernameCheckResult->num_rows > 0) {
        // Username already exists
        header('Location:' . siteUrl . 'auth/register?username-exists');
        exit();
    }

    // Start a transaction
    mysqli_begin_transaction($conn);

    // Insert user data into the database
    $insertUserQuery = "INSERT INTO users (user_name, password, email, first_name, last_name) VALUES (?, ?, ?, ?, ?)";
    $insertUserStmt = $conn->prepare($insertUserQuery);
    $insertUserStmt->bind_param("sssss", $user_name, $password, $email, $first_name, $last_name);

    if ($insertUserStmt->execute()) {
        // Get user ID
        $get_user_id = $insertUserStmt->insert_id;

        // Insert wallet data
        $add_wallet_query = "INSERT INTO wallet (wallet_ref_id, wallet_owner_id, wallet_key, wallet_status) VALUES (?, ?, 1, 3)";
        $add_wallet_stmt = $conn->prepare($add_wallet_query);
        $add_wallet_stmt->bind_param("ii", $w_ref_id, $get_user_id);

        if ($add_wallet_stmt->execute()) {
            // Get wallet ID
            $get_wallet_id = $add_wallet_stmt->insert_id;
            $get_wallet_key = 1;

            // Check and update wallet key
            if ($get_wallet_key == 1) {
                $get_wallet_key = 'meta_mask';
            }

            // Insert wallet data
            $add_wallet_data_query = "INSERT INTO wallet_data (d_wallet_parent_id, d_wallet_name, d_wallet_phase, d_wallet_owner_id, d_wallet_username) VALUES (?, ?, 0, ?, 0)";
            $add_wallet_data_stmt = $conn->prepare($add_wallet_data_query);
            $add_wallet_data_stmt->bind_param("isi", $get_wallet_id, $get_wallet_key, $get_user_id);

            if ($add_wallet_data_stmt->execute()) {
                // Commit the transaction
                mysqli_commit($conn);

                // Registration success
                header('Location:' . siteUrl . 'auth/register?reg-success');
                exit();
            }
        }
    }

    // Rollback the transaction if any step fails
    mysqli_rollback($conn);

    // Registration failed
    header('Location:' . siteUrl . 'auth/register?error_reg');
    exit();
}


elseif (isset($_POST['login'])) {
    // Collect user input
    $user_input = $_POST['user_input'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE user_name = '$user_input' OR email = '$user_input'";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Redirect to the dashboard
            $_SESSION['user_id'] = $row['id'];
            header("Location:".siteUrl. "auth/login?login-success");
//            sleep(3);
//            $_SESSION['user_id'] = $row['id'];
//            header("Location:". siteUrl. "users/dashboard");
            exit();
        } else {
            header("Location:" .siteUrl. "auth/login?wrong-pass");
            exit();
        }
    } else {
        header("Location:".siteUrl. "auth/login?no-user");
        exit();
    }
}
elseif (isset($_POST['logout'])){

    session_start();

// Unset all session variables
    $_SESSION = array();

// Destroy the session
    session_destroy();

// Redirect to the login page or any other desired page after logout
    header("Location:" . siteUrl . "auth/login");
    exit();

}
// Close the database connection
mysqli_close($conn);