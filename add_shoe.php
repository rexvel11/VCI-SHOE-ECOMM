<?php
@include 'db.php';

// Check if we are editing an existing shoe
$shoe = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the shoe details by id
    $result = mysqli_query($conn, "SELECT * FROM shoe_tbl WHERE id = '$id'");
    $shoe = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $shoe ? 'Edit Shoe' : 'Add New Shoe'; ?></title>
  <link rel="stylesheet" href="add_shoe.css">
</head>
<body>

<div class="form-container">
  <h1 class="form-title"><?php echo $shoe ? 'Edit Shoe' : 'Add New Shoe'; ?></h1>
  <form action="add_shoe_process.php" method="POST" enctype="multipart/form-data" class="shoe-form">
    
    <div class="form-group">
      <label for="name">Shoe Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $shoe ? htmlspecialchars($shoe['name']) : ''; ?>" required>
    </div>

    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" id="color" name="color" value="<?php echo $shoe ? htmlspecialchars($shoe['color']) : ''; ?>" required>
    </div>

    <div class="form-group">
      <label for="price">Price ($):</label>
      <input type="text" id="price" name="price" value="<?php echo $shoe ? number_format($shoe['price'], 2) : ''; ?>" step="0.01" required>
    </div>

    <div class="form-group">
      <label for="image">Shoe Image:</label>
      <?php if ($shoe && !empty($shoe['image'])) { ?>
        <div>
          <img src="uploads/<?php echo htmlspecialchars($shoe['image']); ?>" alt="Shoe" style="width: 100px;">
        </div>
      <?php } ?>
      <input type="file" id="image" name="image" accept="image/*">
    </div>

    <input type="hidden" name="id" value="<?php echo $shoe ? $shoe['id'] : ''; ?>">

    <div class="form-actions">
      <button type="submit" class="submit-btn"><?php echo $shoe ? 'Update Shoe' : 'Add Shoe'; ?></button>
    </div>

  </form>
</div>

</body>
</html>
