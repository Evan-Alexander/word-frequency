<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    session_start();
    if (empty($_SESSION['sentence_input'])) {
        $_SESSION['sentence_input'] = array();
    }


    $app->get("/", function() use ($app){
        return "hello world";
    });



    return $app;
