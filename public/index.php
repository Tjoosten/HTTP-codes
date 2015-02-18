<?php

  require __DIR__.'/../vendor/autoload.php';

  $app = new Slim\Slim();

  $app->get('/', function() use($app) {
    $variables = array(
      'title' => 'Home',
    );

    $app->render('/header.tpl.php', $variables);
    $app->render('/navbar.tpl.php', $variables);
    $app->render('/home.tpl.php');
    $app->render('/footer.tpl.php');
  });

  $app->get('/informal', function() use($app) {
    $variables = array(
      'title' => 'Informal'
    );

    $app->render('/header.tpl.php', $variables);
    $app->render('/navbar.tpl.php', $variables);
    $app->render('/results.tpl.php', $variables);
    $app->render('/footer.tpl.php');
  });

  $app->get('/results', function() use($app) {
    $variables = array(
      'title' => 'Search results'
    );

    $app->render('/header.tpl.php', $variables);
    $app->render('/navbar.tpl.php', $variables);
    $app->render('/results.tpl.php', $variables);
    $app->render('/footer.tpl.php');
  });

  // Bootstrap the app
  $app->run();
