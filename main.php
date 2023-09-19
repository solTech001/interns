<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/FormConfig.php';

$form = new FormConfig();

$form->validateForm();
// var_dump($form);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style_main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
  <form action = "<?= $_SERVER["PHP_SELF"];?>" method = "post" enctype="multipart/form-data" class="card p-3 mx-auto shadow" style="max-width: 600px;">
        <div class = "error_Msg <?= $form->form->getClass(); ?> mb-3">
        <?= $form->form->getMessage(); ?>
        </div>
        <!-- include csrf token -->
        <?php csrf() ?>
        
        <div class="mb-3">
          <label for="InputName" class="form-label">Enter Name</label>
          <input type="text" name = "name" class="form-control" id="InputName" value = <?= $form->form->old("name");?>>
        </div>
        <div class="mb-3">
          <label for="InputAge" class="form-label">Enter Age</label>
          <input type="text" name = "age" class="form-control"  id="InputAge" value = <?= $form->form->old("age");?>>
        </div>
        <div class="mb-3">
          <label for="InputEmail" class="form-label">Email address</label>
          <input type="email" name = "email" class="form-control"  id="InputEmail" aria-describedby="emailHelp" value = <?= $form->form->old("email");?>>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 form-check">
          <label class="form-check-label" for="reading">Reading</label>
          <input type="checkbox" class="form-check-input" name = "activities[]"    value = "reading" id="reading" <?= $form->validateCheckbox('activities', 'reading')?>>
        </div>
        <div class="mb-3 form-check">
          <label class="form-check-label" for="writing">Writing</label>
          <input type="checkbox" class="form-check-input"  name = "activities[]" value = "writing" id="writing" <?= $form->validateCheckbox('activities', 'writing')?>>
        </div>
        <div class="mb-3 form-check">
          <label class="form-check-label" for="running">Running</label>
          <input type="checkbox" class="form-check-input" name = "activities[]"  value = "running" id="running" <?= $form->validateCheckbox('activities', 'running')?>>
        </div>
        <div class="mb-3 form-check">
          <label class="form-check-label" for="cooking">Cooking</label>
          <input type="checkbox" class="form-check-input"  name = "activities[]"  value = "cooking" id="cooking" <?= $form->validateCheckbox('activities', 'cooking')?>>
        </div>
        <div class="mb-3">
          <label for="InputPassword" class="form-label">Password</label>
          <input type="text" name = "password" class="form-control" id="InputPassword" value = <?= $form->form->old("password");?>>
        </div>
        <div class="mb-3">
          <label for="InputPassword" class="form-label">Retype Password</label>
          <input type="text" name = "re_password" class="form-control" id="InputPassword">
        </div>
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</body>
</html>