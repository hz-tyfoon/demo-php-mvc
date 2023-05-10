<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="mb-6">
            post details: <?= htmlspecialchars($post['title']); ?>
        </h1>

        <a class="text-gray-500 border border-current px-4 py-2 rounded" href="/post/edit?id=<?php echo $post['id'] ?>">Edit</a>

        <form method="post" action="/post" class="mb-6 mt-10">
            <input type="hidden" name="__request_method" value="delete">
            <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
            <button class="text-red-500" type="submit">delete</button>
        </form>

        <a class="block my-5 text-blue-500 hover:underline" href="/posts">Back 2 All The posts</a>
    </div>
</main>
<?php require basePath('views/partials/footer.php') ?>