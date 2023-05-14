<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/todo_input_form.php') ?>

<ul class="task-list mb-10">
    <?php 
    $todos = array_reverse($todos);
    foreach ($todos as $key => $todo) : 
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
                <button onclick="confirmDeleteTaksItem(this, <?php echo $todo_id ?>)" class="delete-button mx-5 py-2 px-5">Delete</button>
                <form action="/todos/<?php echo $todo_id ?>" method="post">
                    <input type="hidden" name="__request_method" value="PATCH">
                    <button type="submit" class="mx-5 py-2 px-5" >Edit</button>
                </form>

            </div>
        </li>
    <?php endforeach; ?>
</ul>


<?php require basePath('views/partials/footer.php') ?>