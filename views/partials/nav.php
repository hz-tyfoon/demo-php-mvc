<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="./" class="<?= get_classname_from_uri_path('/') ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="./posts" class="<?= get_classname_from_uri_path('/posts') ?> rounded-md px-3 py-2 text-sm font-medium">posts</a>
                        <a href="./about" class="<?= get_classname_from_uri_path('/about') ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="./contact" class="<?= get_classname_from_uri_path('/contact') ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>