<?php
include('./dbconnect.php');

// if (isset($_FILES['photo'])) 
if (isset($_POST['submit'])) {
    $photo = $_FILES['photo'];
    $photo_name = $photo['name'];
    $photo_tmp_name = $photo['tmp_name'];
    $photo_size = $photo['size'];
    $photo_type = $photo['type'];

    // Check if photo is valid
    if ($photo_type == 'image/jpeg' || $photo_type == 'image/png' || $photo_type == 'image/gif') {
        // Upload photo to server
        $upload_dir = 'uploads/';
        $photo_path = $upload_dir . $photo_name;        // uploads/f1.png
        move_uploaded_file($photo_tmp_name, $photo_path);

        // Insert photo into database
        $sql = "INSERT INTO photos (photo_name, photo_path) 
        VALUES ('$photo_name', '$photo_path')";
        $conn->query($sql);

        echo "<br>Photo uploaded successfully!";
    } else {
        echo "Invalid photo type. Only JPEG, PNG, and GIF are allowed.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label for="file">Choose Your File:</label>
        <input type="file" name="photo" id="file">
        <button type="submit" name="submit">Upload Photo</button>
    </form>
</body>

</html>