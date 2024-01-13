<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
const adminRootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/admin/';
const adminUrl = 'https://caketoolnftmarketplace.com/admin/';
$pageName = 'All Users';
include_once (adminRootDir.'includes/adminCore.php');
include_once (adminRootDir.'includes/generalAdminSettings.php');
include_once (adminRootDir.'partials/header/main.php');
?>

    <!-- Content Wrapper. Contains page content -->
<?php include_once (adminRootDir.'list_users/index.php'); ?>

<?php include_once (adminRootDir.'partials/footer/main.php'); ?>