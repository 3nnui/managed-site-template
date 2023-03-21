<?php

Kirby::plugin('ennui/custom', [
  'blueprints' => [
    'blocks/highlight' => __DIR__ . '/blocks/blueprints/blocks/highlight.yml',
    'blocks/linklist' => __DIR__ . '/blocks/blueprints/blocks/linklist.yml'
  ],
  'snippets' => [
    'blocks/highlight' => __DIR__ . '/blocks/snippets/blocks/highlight.php',
    'blocks/linklist' => __DIR__ . '/blocks/snippets/blocks/linklist.php'
  ]
]);