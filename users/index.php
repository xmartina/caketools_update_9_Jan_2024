<?php
session_start();
if (!isset($_SESSION['user_id'])) { ?>
    <script>
        window.location.href = '/auth/login';
    </script>
    <?php
    exit();
}
const pageName = 'My Inventory';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
include_once (rootDir.'partials/users/header/main.php');
?>

    <style>
        .tf-connect-wallet .tf-wallet {
            min-height: 144px;
            padding: 38px;
        }
        .tf-wallet .title {
            color: var(--primary-color5);
            font-size: 30px;
            line-height: 12px;
            margin-bottom: 2px;
        }
    </style>
<!-- title page -->
<div class="py-5"></div>
        <section class="tf-page-title ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
<!--                        <ul class="breadcrumbs">-->
<!--                            <li><a href="/">Home</a></li>-->
<!--                            <li>Profile</li>-->
<!--                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="thumb-pagetitle">
                        <img src="/assets/images/background/thumb-pagetitle.jpg" alt="images">
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-dashboard tf-tab">
            <div class="tf-container">
                <div class="row ">
                    <?php include_once (rootDir.'users/sidebar/main.php');?>
                    <div class="col-xl-9 col-lg-12 col-md-12 overflow-table">
                        <div class="dashboard-content inventory content-tab">
                            <div class="inner-content inventory">
                                <h4 class="title-dashboard">Inventory</h4>
                                <?php include_once (rootDir.'users/inventory/main.php'); ?>
                            </div>
                            <div class="inner-content wallet">
                                <h4 class="title-dashboard">Connect Wallet</h4>
                                <?php include_once (rootDir.'users/parts/wallet/wallet_list.php');?>
                            </div>
                            <div class="inner-content profile">
                                <h4 class="title-dashboard">Edit Profile</h4>
                                <?php include_once (rootDir.'users/edit_profile/main.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
<?php include_once(rootDir . 'partials/users/footer/main.php'); ?>