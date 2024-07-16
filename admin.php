<?php
// Database connection parameters
$servername = "localhost:3306";
$username = "root";
$password = ""; // Default password is empty in XAMPP
$dbname = "contact_form_db"; // Ensure this database exists

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, image_url, link_url FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .image-gallery .image-item {
            flex: 1 1 150px;
            text-align: center;
        }

        .image-gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1>Upload New Image</h1>
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <label for="link">Link URL:</label>
        <input type="url" name="link" id="link" required>
        <br>
        <button type="submit">Upload</button>
    </form>

    <h2>All Images</h2>
    <div class="image-gallery">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="image-item">';
                echo '<img src="' . $row["image_url"] . '" alt="Image">';
                echo '<br>';
                echo '<a href="' . $row["link_url"] . '" target="_blank"><button>Go to Link</button></a>';
                echo '<form action="/upload.php" method="post" style="display:inline;">';
                echo '<input type="hidden" name="delete_id" value="' . $row["id"] . '">';
                echo '<button type="submit">Delete</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo "No images found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
