<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');
?>
<figure class="relative">
  <ul>
    <?php foreach ($block->images()->toFiles() as $image):
      
      if($crop && $ratio && $ratio != 'auto') {
        $n_ratio = explode( '/', $ratio);
        if($n_ratio[0] == 1) {
          $factor = 1000;
        } else {
          $factor = 500;
        }
        $c_image = $image->crop($n_ratio[0] * $factor, $n_ratio[1] * $factor);
      } else { $c_image = $image; }
      
      ?>
    <li>
      <img class="w-full object-cover" alt="<?=$caption?>" src="<?= $c_image->url() ?>" />
    </li>
    <?php endforeach ?>
  </ul>
  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="absolute bottom-2 left-2">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>