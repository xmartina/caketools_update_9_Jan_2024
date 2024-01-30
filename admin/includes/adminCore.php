<?php
session_start();
if (!isset($_SESSION['admin_id'])) { ?>
    <script>
        window.location.href = '/admin_auth';
    </script>
    <?php
    exit();
}
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/core.php');