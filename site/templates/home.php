<?php snippet('header', ['entry' => 'home']); ?>
<h1 class="text-4xl"><?= $page->title() ?></h1>
<p><?= $page->text()->html() ?></p>
<?php snippet('footer', ['entry' => 'home']); ?>