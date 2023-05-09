<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="mb-6">
            post details: <?= htmlspecialchars( $post['title'] ); ?>
        </h1> 
        <a class="text-blue-500 hover:underline" href="posts">Back 2 All The posts</a>
    </div>
</main>
<?php require basePath('views/partials/footer.php') ?>
