<?php
include "config/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <form action="config/form_config.php" method="post" enctype="multipart/form-data" >
        <?php
        echo error_msg(); sucess_msg();
        ?>
        <br><br>
        <label>Name</label>
        <input type="text" placeholder = "name" name = "name" >
        <br> <br>
        <label for="age">Age</label>
        <input type="number" name = "age" placeholder = "Age" id = "age">
        <br> <br>
        <p>Activities you're interested in:</p>
        <input type="checkbox" name = "activities[]" value = "reading"> <label for="">reading</label>
        <input type="checkbox" name = "activities[]" value = "writing"> <label for="">writing</label>
        <input type="checkbox" name = "activities[]" value = "runinig"> <label for="">runinig</label>
        <input type="checkbox" name = "activities[]" value = "runinig"> <label for="">runinig</label>
        <br> <br>
        <label for="img">Upload Img</label> <br> <br>
        <input type="file" id = "img" name = "file" >
        <br> <br>
        <button type="submit" name = "submit">submit</button>

    </form>
</body>
</html>