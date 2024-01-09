<?php
include_once (rootDir.'includes/db_connect.php');
function generateRandomString($length = 12) {
    $characters = '0123456789abTF';
    $w_ref_id = '';

    for ($i = 0; $i < $length; $i++) {
        $w_ref_id .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $w_ref_id;
}

$w_ref_id = generateRandomString();

if (isset($_POST['register'])) {
    // Collect user input
    $user_name = $_POST['user_name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Check if email already exists
    $emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

    if (mysqli_num_rows($emailCheckResult) > 0) {
        // Email already exists
        header('Location:' . siteUrl . 'auth/register?email-exists');
        exit();
    }

    // Check if username already exists
    $usernameCheckQuery = "SELECT * FROM users WHERE user_name = '$user_name'";
    $usernameCheckResult = mysqli_query($conn, $usernameCheckQuery);

    if (mysqli_num_rows($usernameCheckResult) > 0) {
        // Username already exists
        header('Location:' . siteUrl . 'auth/register?username-exists');
        exit();
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (user_name, password, email, first_name, last_name) VALUES ('$user_name', '$password', '$email', '$first_name', '$last_name')";

    if (mysqli_query($conn, $sql)) {
        $get_user_id = mysqli_insert_id($conn);


        // Add MetaMask Wallet
        $add_wallet_meta_mask = "INSERT INTO wallet (wallet_ref_id, wallet_owner_id, wallet_key, wallet_status) VALUES ('$w_ref_id', $get_user_id, 1, 3)";

        if (mysqli_query($conn, $add_wallet_meta_mask)) {
            $get_wallet_id = mysqli_insert_id($conn);
            $get_wallet_key = 1;

            // Check and update wallet key
            if ($get_wallet_key == 1) {
                $get_wallet_key = 'meta_mask';
            }

            $add_wallet_data = "INSERT INTO wallet_data (d_wallet_parent_id, d_wallet_name, d_wallet_phase, d_wallet_owner_id, d_wallet_username) VALUES ($get_wallet_id, '$get_wallet_key', 0, $get_user_id, 0)";

            if (mysqli_query($conn, $add_wallet_data)) {

                // Add Binance Wallet
                $add_wallet_binance = "INSERT INTO wallet (wallet_ref_id, wallet_owner_id, wallet_key, wallet_status) VALUES ('$w_ref_id', $get_user_id, 2, 3)";
                if (mysqli_query($conn, $add_wallet_binance)) {
                    $get_wallet_id = mysqli_insert_id($conn);
                    $get_wallet_key = 2;

                    // Check and update wallet key
                    if ($get_wallet_key == 2) {
                        $get_wallet_key = 'binance';
                    }

                    $add_wallet_data_binance = "INSERT INTO wallet_data (d_wallet_parent_id, d_wallet_name, d_wallet_phase, d_wallet_owner_id, d_wallet_username) VALUES ($get_wallet_id, '$get_wallet_key', 0, $get_user_id, 0)";

                    if (mysqli_query($conn, $add_wallet_data_binance)) {
                        // Registration success
                        header('Location:' . siteUrl . 'auth/register?reg-success');
                        exit();
                    }
                }
            }
        }
    } else {
        // Registration failed
        header('Location:' . siteUrl . 'auth/register?error_reg');
        exit();
    }
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
elseif (isset($_POST['goto_my_dashboard'])){
    header("Location: /users");
}

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

//Get Users data from users table
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $fullName = $firstName . " " . $lastName;
}
// Close the database connection
mysqli_close($conn);