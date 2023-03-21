<?php snippet('header', ['entry' => 'home']); ?>
<main>
  <h1><?= $page->title() ?></h1>
  <p><?= $page->text()->markdown() ?></p>
</main>
<?php snippet('footer', ['entry' => 'home']); ?>