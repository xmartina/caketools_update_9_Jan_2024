<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $userToDelete = intval($_POST['delete_user']);

    // Add appropriate validation and error handling here if needed

    $deleteQuery = "DELETE FROM users WHERE id = $userToDelete";
    $deleteResult = $conn->query($deleteQuery);

    if ($deleteResult) {
        header("Location: " . adminUrl . "users?user_delete_success");
        exit();
    } else {
        die('Error deleting user: ' . $conn->error);
    }
}
include_once (adminRootDir.'users/edit_user/parts/side_bar/main.php');
include_once (adminRootDir.'users/edit_user/parts/main_side/main.php');