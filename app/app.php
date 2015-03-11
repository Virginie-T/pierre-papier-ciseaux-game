<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('game.twig');
    });

    $app->get("/result", function() use ($app) {
        $my_RPS = new RockPaperScissors;
        $RPS = $my_RPS->play($_GET['weapon1'], $_GET['weapon2']);
        return $app['twig']->render('result.twig', array('results' => $RPS));
    });

    return $app;
?>
