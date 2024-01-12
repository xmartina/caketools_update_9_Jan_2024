<?php
// Check if form data is submitted
if(isset($_POST['update_user_profile'])) {
    // Retrieve form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Check if a profile image is uploaded
    if(isset($_FILES['user_photo'])) {
        $userPhoto = $_FILES['user_photo']['name'];

        // Save the uploaded photo to the specified directory
        $targetDirectory = rootDir."assets/images/author/";
        $targetFile = $targetDirectory . $userPhoto;

        if(move_uploaded_file($_FILES['user_photo']['tmp_name'], $targetFile)) {
            // Prepare the update statement
            $sql = "UPDATE users SET
                    first_name = '$firstName',
                    last_name = '$lastName',
                    gender = '$gender',
                    dob = '$dob',
                    email = '$email',
                    address = '$address',
                    user_img = '$userPhoto'
                    WHERE id = '$user_id'";

            if ($conn->query($sql) === TRUE) {
                echo "User profile updated successfully.";
            } else {
                echo "Error updating user profile: " . $conn->error;
            }
        } else {
            echo "Error uploading the profile photo.";
        }
    } elseif(!isset($_FILES['user_photo']) && isset($_POST['update_user_profile'])) {
        // Prepare the update statement without changing the profile image
        $sql = "UPDATE users SET
                first_name = '$firstName',
                last_name = '$lastName',
                gender = '$gender',
                dob = '$dob',
                email = '$email',
                address = '$address'
                WHERE id = '$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo "User profile updated successfully.";
        } else {
            echo "Error updating user profile: " . $conn->error;
        }
    }
}
?>

<form method="post" action="#" class="form-edit-profile" enctype="multipart/form-data">
    <div class="user-profile">
        <div class="title">Contact details</div>
        <fieldset>
            <div class="row">
                <div class="col-lg-6">
                    <h6>First Name</h6>
                    <input type="text" name="first_name" placeholder="<?=$firstName?>" required value="<?=$firstName?>">
                </div>
                <div class="col-lg-6">
                    <h6>Last Name</h6>
                    <input type="text" name="last_name" placeholder="<?=$lastName?>" required value="<?=$lastName?>">
                </div>
            </div>
        </fieldset>
        <fieldset>
            <h6>Gender</h6>
            <input type="text" placeholder="<?=$gender?>" name="gender" required value="<?=$gender?>">
        </fieldset>
        <fieldset>
            <h6>Date of birth</h6>
            <input type="text" placeholder="<?=$dob?>" name="dob" required value="<?=$dob?>">
        </fieldset>
    </div>
    <div class="user-profile">
        <div class="title">Contact details</div>
        <fieldset>
            <h6>Email Address</h6>
            <input type="email" placeholder="<?=$email?>" name="email" required value="<?=$email?>">
        </fieldset>
        <fieldset>
            <h6>Address</h6>
            <input type="text" placeholder="<?=$address?>" name="address" required value="<?=$address?>">
        </fieldset>
        <fieldset>
            <h6>Profile Image</h6>
            <div class="row">
                <div class="col-4">
                    <input type="file" name="user_photo">
                </div>
                <div class="col-4"><?=$user_img_status?></div>
            </div>

        </fieldset>
    </div>
    <button class="btn-form" type="submit" name="update_user_profile">
        Update Settings
    </button>
</form>