<?php require basePath('views/partials/header.php') ?>

<ul class="task-list mb-10">
    <?php foreach ($todos as $key => $todo) : 
        $todo_id = $todo['id'];
        ?>
        <li class="task-item p-5">
            <div class="title"><?php echo $todo["title"] ?></div>
            <div class="description my-5"><?php echo $todo["description"] ?></div>
            <?php if(isset($todo["deadline"])): ?>
                <div class="deadline">Deadline: <?php echo $todo["deadline"] ?></div>
            <?php endif; ?>
            <div class="actions mt-5">
                <label>
                    <input type="checkbox" class="checkmark mr-2" id="task_<?php echo $todo_id ?>" onclick="handleCheckBoxClick(this, <?php echo $todo_id ?>);">
                    Completed
                </label>
                <button onclick="hanldeDeleteTaksItem($todo_id)" class="delete-button mx-5 py-2 px-5">Delete</button>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<form class="add-task-form my-10">
    <input type="text" placeholder="Task Title" id="title-input">
    <input type="text" placeholder="Description" id="description-input">
    <input type="date" id="deadline-input">
    <button type="submit">Add Task</button>
</form>

<?php require basePath('views/partials/footer.php') ?>