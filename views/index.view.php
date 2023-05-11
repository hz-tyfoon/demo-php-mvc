<?php require basePath('views/partials/header.php') ?>

<ul class="task-list">
    <li class="task-item">
        <div class="title">Task 1</div>
        <div class="description">This is the description for Task 1.</div>
        <div class="deadline">Deadline: 2023-05-15</div>
        <div class="actions">
            <input type="checkbox" class="checkmark" id="task1">
            <label for="task1">Completed</label>
            <button class="delete-button">Delete</button>
        </div>
    </li>
    <!-- Repeat the task-item for each task -->

</ul>

<form class="add-task-form">
    <input type="text" placeholder="Task Title" id="title-input">
    <input type="text" placeholder="Description" id="description-input">
    <input type="date" id="deadline-input">
    <button type="submit">Add Task</button>
</form>

<?php require basePath('views/partials/footer.php') ?>