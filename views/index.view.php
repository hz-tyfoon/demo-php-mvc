<?php require basePath('views/partials/header.php') ?>

<form class="add-task-form px-5 my-10" method="post" action="/" >
    <label for="title-input" class="block my-2">
        Title: 
    </label>
    <input name="title" type="text" placeholder="Task Title" id="title-input" 
    value="<?php echo isset($_POST['title']) ? trim($_POST['title']) : ""; ?>" >
    <label for="description-input" class="block my-2 mt-5">
        Description: 
    </label>
    <textarea name="description" placeholder="Description" id="description-input" cols="30" rows="10"><?php echo isset($_POST['description']) ? trim($_POST['description']) : ""; ?></textarea>
    <label for="deadline_date_time" class="block my-2 mt-5">
        Deadline_Date_Time: 
    </label>
    <input name="deadline_date_time" type="datetime-local" id="deadline_date_time" >
    <label class="block my-2"></label>
    <button class="my-6 ounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">Add Task</button>
    <?php if(isset($errors['title'])): ?>
        <p class="text-red-600 mt-5"><?php echo $errors['title']; ?></p>
    <?php endif; ?>
    <?php if(isset($errors['description'])): ?>
        <p class="text-red-600 "><?php echo $errors['description']; ?></p>
    <?php endif; ?>
</form>

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
                <button onclick="confirmDeleteTaksItem(<?php echo $todo_id ?>)" class="delete-button mx-5 py-2 px-5">Delete</button>
            </div>
        </li>
    <?php endforeach; ?>
</ul>


<?php require basePath('views/partials/footer.php') ?>