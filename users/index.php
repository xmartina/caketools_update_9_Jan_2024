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
                                <form action="#" class="form-edit-profile">
                                    <div class="user-profile">
                                        <div class="title">Contact details</div>
                                        <fieldset>
                                            <h6>Full Name</h6>
                                            <input type="text" placeholder="Francisco Maia" required>
                                        </fieldset>
                                        <fieldset>
                                            <h6>Gender</h6>
                                            <input type="text" placeholder="<?=$gender?>" required value="<?=$gender?>">
                                        </fieldset>
                                        <fieldset>
                                            <h6>Date of birth</h6>
                                            <input type="text" placeholder="January 24, 1983" required>
                                        </fieldset>
                                    </div>
                                    <div class="user-profile">
                                        <div class="title">Contact details</div>
                                        <fieldset>
                                            <h6>Email Address</h6>
                                            <input type="text" placeholder="Francisco Maia" required>
                                        </fieldset>
                                        <fieldset>
                                            <h6>Gender</h6>
                                            <input type="text" placeholder="seb.bennett@gmail.com" required>
                                        </fieldset>
                                        <fieldset>
                                            <h6>Address</h6>
                                            <input type="text" placeholder="83222 Dicki View, South Pasqualeview, RI 79216-3100" required>
                                        </fieldset>
                                    </div>
                                    <button class="btn-form" type="submit">
                                        Update Settings
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
<?php include_once(rootDir . 'partials/users/footer/main.php'); ?>