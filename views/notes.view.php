<?php require __DIR__ . "/../views/partials/header.php"; ?>

<?php require __DIR__ . "/../views/partials/nav.php"; ?>

<?php require __DIR__ . "/../views/partials/banner.php"; ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
          <li class="text-lg text-gray-200">
            <a href="/demo/note.php?id=<?= $note["id"] ?>" class="font-bold text-gray-300 hover:underline">  
              <?= $note["body"] ?>
            </a>
          </li>
      <?php endforeach; ?>
    </ul>

      <p class="mt-6 text-gray-400">
        <a href="/demo/notes/create.php" class="font-bold text-gray-300 hover:underline">Create Note</a>
      </p>
  </div>
</main>

 <?php require __DIR__ . "/../views/partials/footer.php"; ?>
