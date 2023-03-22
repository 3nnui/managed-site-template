<?php snippet('header', ['entry' => 'home']); ?>
<main class="container mx-auto max-w-prose">
  <h1><?= $site->title() ?></h1>
  <p><?= $page->layout()->toBlocks() ?></p>
</main>
<?php snippet('footer', ['entry' => 'home']); ?>