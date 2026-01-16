<?php require("layouts/head.php"); ?>
<?php require("layouts/nav.php"); ?>
<?php require("layouts/banner.php"); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id']; ?>" class="hover:underline font-medium hover:text-blue-600">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach; ?>

    </div>
</main>
<?php require("layouts/footer.php"); ?>
