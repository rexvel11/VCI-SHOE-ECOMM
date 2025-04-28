<?php
@include 'db.php';
session_start(); // Start the session

// Handle delete if a delete request is made
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // First, fetch the image to delete the file
    $select = mysqli_query($conn, "SELECT image FROM shoe_tbl WHERE id = '$delete_id'");
    $row = mysqli_fetch_assoc($select);
    if ($row && file_exists('uploads/' . $row['image'])) {
        unlink('uploads/' . $row['image']);
    }

    // Now delete from database
    mysqli_query($conn, "DELETE FROM shoe_tbl WHERE id = '$delete_id'");

    // Redirect back to admin page after deleting
    header('location: admin.php');
    exit();
}

// Fetch all shoes
$shoes = mysqli_query($conn, "SELECT * FROM shoe_tbl");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel - List of Shoes</title>
  <link rel="stylesheet" href="adm.css">
</head>
<body>

<!-- Header -->
<div class="header">
  <div class="title">Admin</div>
  
</div>
<div class="logout-btn-container">
  <a href="logout.php" class="logout-btn">Logout</a>
</div>
<div class="page-title">List of Shoes</div>
<!-- Logout Button -->

<!-- Add Shoe Button -->
<div class="add-shoe-btn-container">
  <a href="add_shoe.php" class="add-btn">ADD SHOE</a>
</div>



<!-- Table -->
<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Color</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($shoes)) { ?>
      <tr>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['color']); ?></td>
        <td>$<?php echo number_format($row['price'], 2); ?></td>
        <td>
          <?php if (!empty($row['image'])) { ?>
            <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="Shoe" style="width: 50px; height: auto;">
          <?php } else { ?>
            No Image
          <?php } ?>
        </td>
        <td>
          <a href="add_shoe.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">Edit</a>
          <a href="admin.php?delete_id=<?php echo $row['id']; ?>" 
             class="action-btn delete-btn" 
             onclick="return confirm('Are you sure you want to delete this shoe?');">
             Delete
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
