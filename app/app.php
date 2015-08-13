<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app){
        return $app['twig']->render('scrabble_input.html.twig');
    });

    $app->get('/results', function() use ($app){
        $new = new ScrabbleScore;
        $output = $new->scrabbleScoreCalculator($_GET['word']);
        $output2 = $new->scrabbleRanking($output);
        return $app['twig']->render('scrabble_results.html.twig', array('score' => $output, 'rank' => $output2));
    });
    return $app;
?>
