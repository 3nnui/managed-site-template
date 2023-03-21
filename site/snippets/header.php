<?php $entryFile = isset($entry) ? "templates/$entry/index.js" : null ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$site->title()->text() ?></title>
  <!-- Include the shared css ... -->
  <?= vite()->css() ?>
  <!-- ... and the template's css (if it exists) -->
  <?php e($entryFile, vite()->css($entryFile)) ?>

  <?php snippet('meta_information'); ?>
  <?php snippet('robots'); ?>
</head>

<body>