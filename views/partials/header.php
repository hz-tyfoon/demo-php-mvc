<?php $base_uri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' ?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked UI</title>
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms"></script> -->
    <script src="<?php echo $base_uri ?>assets/scripts/tailwind-with-forms.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">