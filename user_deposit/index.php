<?php
session_start();
ob_start();
if (!isset($_SESSION['user_id'])) { ?>
    <script>
        window.location.href = '/auth/login';
    </script>
    <?php
    exit();
}
$user_id = $_SESSION['user_id'];
const pageName = 'Create New NFT';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
include_once (rootDir.'partials/front/header/main.php');
?>

<!-- title page -->
<div class="py-5"></div>
<section class="tf-page-title">
    <div class="tf-container">
        <div class="row">
            <div class="col-md-12">

                <!--                <ul class="breadcrumbs">-->
                <!--                    <li><a href="index.html">Home</a></li>-->
                <!--                    <li>Create</li>-->
                <!--                </ul>-->

                <h4 class="page-title-heading">Deposit Funds</h4>

            </div>
        </div>
    </div>
</section>

<?php
include_once (rootDir.'user_deposit/parts/main.php');
include_once(rootDir . 'partials/front/footer/main.php'); ?>
?>
