<?php
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
const adminUrl = 'https://caketoolnftmarketplace.com/admin/';
include_once(rootDir . 'includes/generalConfig.php');
include_once (rootDir.'includes/db_connect.php');
$get_admin_details = "SELECT * FROM admin";
$result = $conn->query($get_admin_details);
$row = $result->fetch_assoc();
$admin_email = $row['admin_email'];

include_once (rootDir . 'admin_auth/login/main.php');

?>
