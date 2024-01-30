<?php
session_start();
ob_start();
if (!isset($_SESSION['admin_id'])) { ?>
    <script>
        window.location.href = '/admin_auth';
    </script>
<?php } ?>
<?php
$admin_id = $_SESSION['admin_id'];
error_reporting(E_ALL);
ini_set('display_errors', 1);
const adminRootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/admin/';
const adminUrl = 'https://caketoolnftmarketplace.com/admin/';
$pageName = 'Dashboard';
include_once (adminRootDir.'includes/adminCore.php');
include_once (adminRootDir.'includes/generalAdminSettings.php');
include_once (adminRootDir.'partials/header/main.php');
?>

<!-- Content Wrapper. Contains page content -->
<?php include_once(adminRootDir . 'dashboard/main.php'); ?>

<?php include_once (adminRootDir.'partials/footer/main.php'); ?>