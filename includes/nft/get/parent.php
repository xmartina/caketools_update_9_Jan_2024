<?php
////if ($directory == '/admin/edit_nft/ref_id/') {
////    $sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id";
////    return $sql;
////} else {
////Get NFT Parent data
//
//$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id";
//
////    $sql = "SELECT * FROM nft_parent WHERE current_owner_id = $user_id";
////    return $sql;
////}
//
////$sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id OR current_owner_id = $user_id";
//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
//$nft_id = $row['id'];
//$nft_ref_id = $row['ref_id'];
//$nft_creator_id = $row['created_user_id'];
//$nft_name = $row['name'];
//$nft_description = $row['description'];
//$available_quantity = $row['available_quantity'];
//$nft_img = $row['nft_img'];
//$nft_current_owner_id = $row['current_owner_id'];
//$nft_category_id = $row['category_id'];
//$nft_price = $row['nft_price'];
//$service_fee = $row['service_fee'];
//$nft_likes = $row['likes'];
//$nft_date_created = $row['date_created'];
//$nft_time_created = $row['time_created'];
//
//


// ... Your previous code ...
// Assuming $_GET['nft_details'] is an integer; adjust the validation based on your needs
// Assuming $_GET['nft_details'] is an integer; adjust the validation based on your needs
//$nft_ref_id = filter_input(INPUT_GET, 'nft_details', FILTER_VALIDATE_INT);

if ($nft_ref_id !== false && $nft_ref_id !== null) {
    // Sanitize and escape user input
    $nft_ref_id = intval($nft_ref_id);

    // Construct the SQL query with proper value
    $sql = "SELECT * FROM nft_parent WHERE ref_id = $nft_ref_id";
    $result = $conn->query($sql);

    if (!$result) {
        die('Query Error: ' . $conn->error);
    }

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Fetch the data
        $nft_id = $row['id'];
        $nft_ref_id = $row['ref_id'];
        $nft_creator_id = $row['created_user_id'];
        $nft_name = $row['name'];
        $nft_description = $row['description'];
        $available_quantity = $row['available_quantity'];
        $nft_img = $row['nft_img'];
        $nft_current_owner_id = $row['current_owner_id'];
        $nft_category_id = $row['category_id'];
        $nft_price = $row['nft_price'];
        $service_fee = $row['service_fee'];
        $nft_likes = $row['likes'];
        $nft_date_created = $row['date_created'];
        $nft_time_created = $row['time_created'];

        // ... (rest of the fields)

        // Rest of your code handling the fetched data
    } else {
        // Handle the case where no rows are returned
        die('No matching record found.');
    }
} else {
    // Handle the case where nft_details is not a valid integer
    die('Invalid nft_details value.');
}

