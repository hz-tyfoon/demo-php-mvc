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

<form class="add-task-form px-5 my-10" method="post" action="/" >
    <input name="title" type="text" placeholder="Task Title" id="title-input" >
    <input name="description" type="text" placeholder="Description" id="description-input" >
    <input name="deadline" type="date" id="deadline-input" >
    <button type="submit">Add Task</button>
    <?php if(isset($errors['title'])): ?>
        <p class="text-red-600 mt-5"><?php echo $errors['title']; ?></p>
    <?php endif; ?>
    <?php if(isset($errors['description'])): ?>
        <p class="text-red-600 "><?php echo $errors['description']; ?></p>
    <?php endif; ?>
</form>

<?php require basePath('views/partials/footer.php') ?>