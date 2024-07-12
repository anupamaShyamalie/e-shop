
<?php

// Include DB Connection
include('../includes/connect.php');

// Insert Categories
if (isset($_POST['submit'])) {
    $categories = $_POST['categories'];
    
    if (empty($categories)) {
        echo '<div class="alert alert-danger" role="alert">All fields are required!</div>';
    } else {
        $select_cat = "SELECT * FROM `categories` WHERE `cat-title` = '$categories'";
        $result = mysqli_query($conn, $select_cat);
        
        if (!$result) {
            // Handle SQL error
            echo '<div class="alert alert-danger" role="alert">Error: ' . mysqli_error($conn) . '</div>';
        } else {
            $row = mysqli_num_rows($result);
            
            if ($row > 0) {
                echo '<div class="alert alert-danger" role="alert">Category already exists!</div>';
            } else {
                $insert_categories = "INSERT INTO `categories` (`cat-title`) VALUES ('$categories')";
                $insert_categories_result = mysqli_query($conn, $insert_categories);
                
                if ($insert_categories_result) {
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
            <h5> Insert Categories</h5>
        </Label>
        <input class="form-control" type="text" id="formFile" name="categories" placeholder=" Insert Categories">
        <button type="submit" name="submit" class="mt-3">Submit</button>
    </div>
</form>