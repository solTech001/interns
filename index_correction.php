<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/config/CustomForm.php';

    $custom = new CustomForm();

    $custom->validateForm();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>

    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">


</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" >
        

        <div class="alert <?= $custom->form->getClass() ?>">
            <?=  $custom->form->getMessage() ?>
        </div>

        <!-- include csrf token -->
        <?php csrf() ?>

        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?= $custom->form->old('name') ?>">
        </div>
        <br> <br>
        
        <div>
            <label>Age</label>
            <input type="number" name="age" placeholder="Age" value="<?= $custom->form->old('age') ?>">
        </div>

        
        <div class="activities">
            <p class="title">
                Activities you're interested in:
            </p>

            <label for="reading">
                Reading
                <input type="checkbox" name="activities[]" value="reading" id="reading" <?= $custom->validateCheckbox('activities', 'reading') ?>>
            </label>
            <label for="writing">
                Writing
                <input type="checkbox" name="activities[]" value="writing" id="writing" <?= $custom->validateCheckbox('activities', 'writing') ?>>
            </label>
            <label for="running">
                Running
                <input type="checkbox" name="activities[]" value="running" id="running" <?= $custom->validateCheckbox('activities', 'running') ?>>
            </label>
            <label for="swimming">
                Swimming
                <input type="checkbox" name="activities[]" value="swimming" id="swimming" <?= $custom->validateCheckbox('activities', 'swimming') ?>>
            </label>
        </div>

        <p class="title">
            Upload Img:
        </p>
        <input type="file" id="img" name="file" >
        <br> 
        <br>

        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>