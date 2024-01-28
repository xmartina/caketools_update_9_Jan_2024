<?php
session_start();
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

//get currency
$g_currency_sql = "SELECT * FROM currency";
$g_currency_result = $conn->query($g_currency_sql);

//get Category data
$g_category_sql = "SELECT * FROM category";
$g_category_result = $conn->query($g_category_sql);
//$user_name = $g_c_row['user_name'];

//get nft properties data

//insert New NFT

// Assuming the form is submitted and the "create_new_nft" button is clicked
if (isset($_POST['create_new_nft'])) {
    // Get the form data
    $category_id = $_POST['category_id']; // Replace with the actual name attribute of your category dropdown
    $name = $_POST['name'];
    $description = $_POST['description'];
    $available_quantity = $_POST['available_quantity'];

    // File upload mechanism
    $uploadDirectory = rootDir.'assets/images/nfts/';
    $uploadedFile = $_FILES['nft_img'];

    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        $filename = basename($uploadedFile['name']);
//        $targetPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDirectory . $filename;
        $targetPath = $uploadDirectory . $filename;

//        if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
        if (move_uploaded_file($filename, $targetPath)) {
            // Continue processing

            $nft_currency = $_POST['nft_currency'];
            $nft_price = $_POST['nft_price'];
            $p_background = $_POST['p_background'];
            $p_mouth_grade = $_POST['p_mouth_grade'];
            $p_head = $_POST['p_head'];
            $p_body = $_POST['p_body'];

            // Add your validation and sanitation logic here

            function generateAlphanumericCode($length = 10) {
                $uniqueID = uniqid();
                $alphanumericCode = strtoupper(substr($uniqueID, 0, $length));
                return $alphanumericCode;
            }

            $hot_pick_category = rand(1, 4);
            $ref_id = 'caketool_' . generateAlphanumericCode() . '_nft';

            // Insert data into the nft_parent table
            $insertNftParentSql = "INSERT INTO nft_parent (ref_id, created_user_id, current_owner_id, service_fee, is_hot_pick, hot_pick_category, category_id, name, description, available_quantity, nft_img, nft_currency, nft_price) VALUES ('$ref_id','$user_id','$user_id','0.0025','1','$hot_pick_category','$category_id', '$name', '$description', '$available_quantity', '$filename', '$nft_currency', '$nft_price')";

            if ($conn->query($insertNftParentSql) === TRUE) {
                // Get the last inserted nft_parent ID
                $lastNftParentId = $conn->insert_id;

                // Insert data into the nft_properties table
                $insertNftPropertiesSql = "INSERT INTO nft_properties (p_parent_id, p_background, p_mouth_grade, p_head, p_body) VALUES ('$lastNftParentId', '$p_background', '$p_mouth_grade', '$p_head', '$p_body')";

                if ($conn->query($insertNftPropertiesSql) === TRUE) {
                    // Get the recently added data
                    $get_nft_sql = "SELECT * FROM nft_parent WHERE created_user_id = '$user_id' ORDER BY date_created DESC LIMIT 1";
                    $get_nft_result = $conn->query($get_nft_sql);

                    if ($get_nft_result->num_rows > 0) {
                        $get_nft_row = $get_nft_result->fetch_assoc();
                        $recent_nft_ref_id = $get_nft_row['ref_id'];

                        // Success! Redirect to a success page
                        header("Location: /add_nft?nft_added_success=$recent_nft_ref_id");
                        exit(); // Ensure no further code execution after redirection
                    } else {
                        // Handle the case when no data is found
                        echo "No recently added data found.";
                    }
                } else {
                    echo "Error inserting data into nft_properties table: " . $conn->error;
                }
            } else {
                echo "Error inserting data into nft_parent table: " . $conn->error;
            }
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "Error uploading file.";
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