<?php
session_start();
if (!isset($_SESSION['user_id'])) { ?>
    <script>
        window.location.href = '/auth/login';
    </script>
    <?php
    exit();
}
const pageName = 'Create New NFT';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
include_once (rootDir.'partials/front/header/main.php');

//get Category data
$g_category_sql = "SELECT * FROM category ORDER BY c_id";
$g_category_result = $conn->query($g_category_sql);
$g_c_row = $g_category_result->fetch_assoc();
//$user_name = $g_c_row['user_name'];

//get nft properties data

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

                <h4 class="page-title-heading">Add New NFT</h4>

            </div>
        </div>
    </div>
</section>

<section class="tf-add-nft">
    <div class="tf-container">
        <div class="row ">
            <?php
            include_once (rootDir.'add_nft/left/main.php');
            include_once (rootDir.'add_nft/right/main.php');
            ?>
        </div>

    </div>
</section>
    <!-- Footer -->
<?php include_once (rootDir.'partials/front/footer/main.php');?>