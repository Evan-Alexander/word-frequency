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
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/view_results", function() use ($app) {
        $create_search = new RepeatCounter;
        $get_occurences = $create_search->CountRepeats($_POST['sentence'], $_POST['search_word']);
        return $app['twig']->render('result.html.twig', array('result' => $get_occurences));
    });

    return $app;
