<ul class="linklist">
  <?php
  $rows = $block->rows()->toStructure();

  foreach ($rows as $row): ?>
    <?php if ($link = $row->link()->toValidLink()) : ?>
      <li>
        <a href="<?= $link->href() ?>" target="<?= $link->popup() ?>">
          <?= $link->text() ? : $link->href() ?>
        </a>
        <p>⟶</p>
      </li>
    <?php else: ?>
      <li>
        <p class="error">Invalid Link! Is the url field empty?</p>
      </li>
    <?php endif ?>
  <?php endforeach ?>
</ul>