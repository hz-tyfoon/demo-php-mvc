<?php require basePath('views/partials/header.php') ?>

<form class="add-task-form px-5 my-10" method="post" action="/todos">
    <input type="hidden" name="__request_method" value="patch" >
    <input type="hidden" name="id" value="<?php echo $id ?>" >
    <label for="title-input" class="block my-2">
        Title:
    </label>
    <input name="title" type="text" placeholder="Task Title" id="title-input" value="<?php echo $title ?>">
    <label for="description-input" class="block my-2 mt-5">
        Description:
    </label>
    <textarea name="description" placeholder="Description" id="description-input" cols="30" rows="10"><?php echo $description ?></textarea>
    <label for="deadline_date_time" class="block my-2 mt-5">
        Deadline_Date_Time:
    </label>
    <input value="<?php echo $deadline ?>" name="deadline_date_time" type="datetime-local" id="deadline_date_time">
    <label class="block my-2"></label>
    <button class="my-6 ounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">Update</button>
    <?php if (isset($errors['generic'])) : ?>
        <p class="text-red-600 mt-5"><?php echo $errors['generic']; ?></p>
    <?php endif; ?>
    <?php if (isset($errors['title'])) : ?>
        <p class="text-red-600 mt-5"><?php echo $errors['title']; ?></p>
    <?php endif; ?>
    <?php if (isset($errors['description'])) : ?>
        <p class="text-red-600 "><?php echo $errors['description']; ?></p>
    <?php endif; ?>
</form>

<?php require basePath('views/partials/footer.php') ?>