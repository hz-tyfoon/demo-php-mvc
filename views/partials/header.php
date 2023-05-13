<?php $base_uri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' ?>
<!DOCTYPE html>
<html>

<head>
  <title>To do list App</title>
  <!-- <script src="https://cdn.tailwindcss.com?plugins=forms"></script> -->
  <link rel="stylesheet" href="<?php echo $base_uri ?>assets/css/style.css">
  <script src="<?php echo $base_uri ?>assets/scripts/tailwind-with-forms.js"></script>

</head>


<body>
  <h1 class="top-head my-5">To do list</h1>