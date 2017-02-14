<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
    "twig.path" => __DIR__."/../views"
    ));


    session_start();
    if (empty($_SESSION['list_of_anagrams'])){
        $_SESSION['list_of_anagrams'] = array();
    }


    $app->get("/", function() use ($app) {
        return "hello";
    });

    return $app;
