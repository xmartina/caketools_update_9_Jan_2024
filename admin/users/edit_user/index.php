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
if (isset($_GET['user_acct_id'])) {
    $user_acct_id = $_GET['user_acct_id'];
    echo $user_acct_id;

    // Include the content and footer only if the edit_user parameter is set
    include_once(adminRootDir . 'users/edit_user/parts/main.php');
    include_once(adminRootDir . 'partials/footer/main.php');
}
?>
