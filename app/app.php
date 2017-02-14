<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
    "twig.path" => __DIR__."/../views"
    ));

    $app['debug'] = true;

    session_start();
    if (empty($_SESSION['list_of_anagrams'])){
        $_SESSION['list_of_anagrams'] = array();
    }


    $app->get("/", function() use ($app) {
        $anagram_array = Anagram::getAll();
        return $app["twig"]->render("anagram_form.html.twig", array('show_results' => $anagram_array));
    });

    $app->post("/result", function() use ($app){

        $new_user_input1 = $_POST['user_input1'];
        $new_user_input2 = $_POST['user_input2'];
        $new_anagram = new Anagram($new_user_input1, $new_user_input2);
        $new_anagram->save();

        return $app["twig"]->render("result.html.twig", array('results' => $new_anagram));
    });

    $app->get("/delete", function() use ($app) {
        Anagram:: deleteAll();
        return $app["twig"]->render("anagram_form.html.twig", array('show_results' => Anagram::getAll()));
    });

    return $app;
