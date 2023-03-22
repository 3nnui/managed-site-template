<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

$image = $block->image()->toFile();
$alt = $alt ?? $image->alt();
$src = $image->url();
$webp = $image->picture('w-full object-cover', $alt);

?>
<?php if ($src): ?>
<figure class="relative w-full">
  <?php if ($link->isNotEmpty()): ?>
  <a href="<?= Str::esc($link->toUrl()) ?>">
    <?php echo $webp ?>
  </a>
  <?php else: ?>
    <?php echo $webp ?>
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="absolute bottom-2 left-2">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>