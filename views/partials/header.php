

<!DOCTYPE html>
<html>
<head>
  <title>To do list App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    .task-list {
      list-style-type: none;
      padding: 0;
    }

    .task-item {
      border: 1px solid #ccc;
      margin-bottom: 10px;
      padding: 10px;
    }

    .task-item .title {
      font-weight: bold;
    }

    .task-item .expired {
      color: red;
    }

    .task-item .description {
      margin-top: 5px;
    }

    .task-item .deadline {
      margin-top: 5px;
      font-size: 0.9em;
    }

    .task-item .actions {
      margin-top: 5px;
    }

    .add-task-form {
      margin-top: 20px;
    }

    .add-task-form input[type="text"],
    .add-task-form input[type="date"] {
      width: 200px;
      padding: 5px;
      margin-right: 10px;
    }

    .add-task-form button {
      padding: 5px 10px;
    }

    .delete-button {
      background-color: #ff0000;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .checkmark {
      margin-right: 5px;
    }
  </style>
</head>


<body>
  <h1>To do list App</h1>
