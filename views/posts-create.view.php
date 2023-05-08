<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="post">
            <div>
                <label for="postBody">
                    <textarea name="postBody" cols="30" rows="10" placeholder="your post name"></textarea>
                </label>
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
</main>
<?php require 'partials/footer.php' ?>