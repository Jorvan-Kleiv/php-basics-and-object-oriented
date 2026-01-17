<?php require("layouts/head.php"); ?>
<?php require("layouts/nav.php"); ?>
<?php require("layouts/banner.php"); ?>
<main>
    <div class="mx-auto max-w-7xl min-h-full px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id']; ?>" class="hover:underline font-medium hover:text-blue-600">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <a href="#" class="text-blue-600 hover:underline">Create note</a>
        </p>
    </div>
</main>
<?php require("layouts/footer.php"); ?>
