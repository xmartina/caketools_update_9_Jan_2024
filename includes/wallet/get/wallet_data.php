<?php
$sql = "SELECT * FROM wallet_data WHERE d_wallet_owner_id = $user_id";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $d_wallet_id  = $row['d_wallet_id'];
        $d_wallet_parent_id  = $row['d_wallet_parent_id'];
        $d_wallet_name  = $row['d_wallet_name'];
        $d_wallet_phase  = $row['d_wallet_phase'];
        $d_wallet_owner_id  = $row['d_wallet_owner_id'];
        $d_wallet_username  = $row['d_wallet_username'];

        // Continue with your processing here...

    } else {
        // No rows found, handle accordingly
        return '';
    }
} else {
    // Query failed, handle accordingly (display an error message, log, etc.)
    echo "Error: " . $conn->error;
}