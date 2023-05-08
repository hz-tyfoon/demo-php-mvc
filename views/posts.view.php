<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>    
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
        <?php foreach ($posts as $key => $post) : ?>
            <li class="mb-2" ><a class="text-blue-500 hover:underline" href="post?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</main>
<?php require 'partials/footer.php' ?>
 