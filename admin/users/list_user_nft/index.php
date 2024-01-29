<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
const adminRootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/admin/';
const adminUrl = 'https://caketoolnftmarketplace.com/admin/';
$pageName = 'Edit User';
include_once (adminRootDir.'includes/adminCore.php');
include_once (adminRootDir.'includes/generalAdminSettings.php');
include_once (adminRootDir.'partials/header/main.php');
?>


<?php
if (isset($_GET['user_nft_id'])) {
    include_once(adminRootDir . 'includes/adminCore.php');
    $user_nft_id = $_GET['user_nft_id'];
    $get_user_nft_sql = "SELECT * FROM user_nft WHERE id = '$user_nft_id'";
    $nft_result = $conn->query($get_user_nft_sql);




// Include the content and footer only if the edit_user parameter is set
    include_once(adminRootDir . 'users/list_user_nft/parts/card.php');
    include_once(adminRootDir . 'partials/footer/main.php');
}
?>