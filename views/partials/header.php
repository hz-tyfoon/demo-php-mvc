<?php $base_uri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' ?>
<!DOCTYPE html>
<html>

<head>
  <title>To do list App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1.top-head {
      text-align: center;
      font-size: 30px;
      font-weight: 800;
    }

    .task-list {
      list-style-type: none;
      padding: 0;
    }

    .task-item {
      border: 1px solid #ccc;
    }

    .task-item .title {
      font-weight: bold;
    }

    .task-item .expired {
      color: red;
    }

    .task-item .deadline {
      font-size: 0.9em;
    }

    .task-item .actions {
      margin-top: 5px;
    }

    .add-task-form input[type="text"],
    .add-task-form input[type="date"] {
      width: 200px;
    }
    .delete-button {
      background-color: #ff0000;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .checkmark {
      margin-right: 5px;
    }
  </style>

  <!-- <script src="https://cdn.tailwindcss.com?plugins=forms"></script> -->
  <script src="<?php echo $base_uri ?>assets/scripts/tailwind-with-forms.js"></script>

</head>


<body>
  <h1 class="top-head my-5">To do list</h1>