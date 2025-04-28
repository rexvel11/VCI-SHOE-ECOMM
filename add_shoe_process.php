<?php
@include 'db.php';

// Check if it's an update or an insert
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $id = isset($_POST['id']) ? $_POST['id'] : null;

    // Handle image upload
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        // Save the image to the 'uploads' folder (you must create this folder)
        $uploadDirectory = 'uploads/';
        $imagePath = $uploadDirectory . basename($imageName);

        // Check if uploads folder exists, if not create it
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // Image upload successful
        } else {
            echo "<script>alert('Failed to upload image.'); window.history.back();</script>";
        }
    }

    // If id is present, update the shoe, otherwise insert
    if ($id) {
        // Update the shoe record
        $query = "UPDATE shoe_tbl SET name = '$name', color = '$color', price = '$price'";
        if ($imagePath) {
            $query .= ", image = '$imagePath'";
        }
        $query .= " WHERE id = '$id'";

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Shoe updated successfully!'); window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Failed to update shoe.'); window.history.back();</script>";
        }
    } else {
        // Insert the shoe record
        if ($imagePath) {
            $insert = "INSERT INTO shoe_tbl (name, color, price, image) VALUES ('$name', '$color', '$price', '$imagePath')";
        } else {
            $insert = "INSERT INTO shoe_tbl (name, color, price) VALUES ('$name', '$color', '$price')";
        }

        $result = mysqli_query($conn, $insert);

        if ($result) {
            echo "<script>alert('Shoe added successfully!'); window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Failed to add shoe.'); window.history.back();</script>";
        }
    }
}
?>
