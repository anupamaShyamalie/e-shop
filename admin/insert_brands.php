<?php

// Include DB Connection
include('../includes/connect.php');

// Insert brands
if (isset($_POST['submit'])) {
    $brands = $_POST['brands'];

    if (empty($brands)) {
        echo '<div class="alert alert-danger" role="alert">All fields are required!</div>';
    } else {
        $select_cat = "SELECT * FROM `brands` WHERE `brand_title` = '$brands'";
        $result = mysqli_query($conn, $select_cat);

        if (!$result) {
            // Handle SQL error
            echo '<div class="alert alert-danger" role="alert">Error: ' . mysqli_error($conn) . '</div>';
        } else {
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                echo '<div class="alert alert-danger" role="alert">Category already exists!</div>';
            } else {
                $insert_brands = "INSERT INTO `brands` (`brand_title`) VALUES ('$brands')";
                $insert_brands_result = mysqli_query($conn, $insert_brands);

                if ($insert_brands_result) {
                    echo '<div class="alert alert-success" role="alert">Category inserted successfully!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error inserting category: ' . mysqli_error($conn) . '</div>';
                }
            }
        }
    }
}
?>


<form action="" method="post">
    <div class="mb-3 w-50">
        <Label for="formFile" class="form-label">
            <h5>Insert Brands</h5>
        </Label>
        <input class="form-control" type="text" id="formFile" name="brands" placeholder=" Insert Brands">
        <button type="submit" name="submit" class="mt-3">Submit</button>
    </div>
</form>