<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br>
    <div class="container">
    <?php
        // Check if the cookie exists
        if(isset($_COOKIE['color'])) {
        $color_scheme = $_COOKIE['color'];
        } else {
        // Set the default color scheme to light
        $color_scheme = 'light';
        }

        // Check if the form has been submitted
        if(isset($_POST['color'])) {
        // Set the color scheme from the form data
        $color_scheme = $_POST['color'];

        // Set the cookie with the selected color scheme
        setcookie('color', $color_scheme, time() + 60 * 60 * 24 * 7);

        // Display a message indicating that the color scheme has been saved
        echo "Your color scheme has been saved.";
        }
        ?>

<!-- Color Scheme Form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label>
    <input type="radio" name="color" value="light" <?php if($color_scheme == 'light') echo 'checked'; ?> />
    Light
  </label>
  <label>
    <input type="radio" name="color " value="dark" <?php if($color_scheme == 'dark') echo 'checked'; ?> />
    Dark
  </label>
  <button type="submit">Save</button>
</form>
    </div>
</body>
</html>
