<ul class="linklist list-none">
  <?php
  $rows = $block->rows()->toStructure();

  foreach ($rows as $row): ?>
    <?php if ($link = $row->link()->toValidLink()) : ?>
      <li class="flex py-2">
        <a href="<?= $link->href() ?>" target="<?= $link->popup() ?>" class="underline">
          <?= $link->text() ? : $link->href() ?>
        </a>
        <p class="ml-2">⟶</p>
      </li>
    <?php else: ?>
      <li>
        <p class="error">Invalid Link! Is the url field empty?</p>
      </li>
    <?php endif ?>
  <?php endforeach ?>
</ul>