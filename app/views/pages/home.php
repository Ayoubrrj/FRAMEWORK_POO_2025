<?php Core\Template::startSection('title') ?>
HomePage
<?php Core\Template::endSection() ?>

<?php Core\Template::startSection('content') ?>
<?php include "../app/views/books/_recents.php" ?>
<?php include "../app/views/authors/_recents.php" ?>
<?php Core\Template::endSection() ?>
