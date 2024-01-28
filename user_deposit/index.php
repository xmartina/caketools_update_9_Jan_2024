<?php
session_start();
ob_start();
if (!isset($_SESSION['user_id'])) { ?>
    <script>
        window.location.href = '/auth/login';
    </script>
<?php } ?>
<?php
$user_id = $_SESSION['user_id'];
const pageName = 'Create New NFT';
const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
include_once (rootDir.'includes/generalConfig.php');
include_once (rootDir.'includes/core.php');
include_once (rootDir.'partials/front/header/main.php');

$get_currency_sql = "SELECT * FROM currency";
$get_currency_result = $conn->query($get_currency_sql);

if (isset($_POST['create_new_deposit'])) {

    function generateAlphanumericCode($length = 10) {
        $uniqueID = uniqid();
        $alphanumericCode = strtoupper(substr($uniqueID, 0, $length));
        return $alphanumericCode;
    }

//    $hot_pick_category = rand(1, 4);
    $dep_ref_id = 'DEP_' . generateAlphanumericCode() . '_ccd';

    $deposit_currency = $_POST['deposit_currency'];
    $deposit_amount = $_POST['deposit_amount'];
    $user_id = $_SESSION['user_id'];
    $deposit_sql = "INSERT INTO deposit (dep_ref_id, dep_user_id, dep_currency, dep_amount, dep_status, dep_request_time, dep_request_date) VALUES ('$dep_ref_id', '$user_id', '$deposit_currency', '$deposit_amount', '0', CURTIME(), CURDATE())";
    $deposit_result = $conn->query($deposit_sql);
    if ($deposit_result) {
        ?>
        <script>
            window.location.href = '/user_deposit?deposit_success';
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = '/user_deposit?deposit_failed';
        </script>
        <?php
    }
}
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
