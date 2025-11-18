<?php


// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController
// ACTION: home

// VERSION 1
// $pagesController = new \App\Controllers\PagesController();
// $pagesController->homeAction($conn);

// VERSION 2
\App\Controllers\PagesController::homeAction($conn);