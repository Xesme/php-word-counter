<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/wordcount.php";

    // session_start();
    // if (empty($_SESSION['sentence_word_count']){
    //     $_SESSION['sentence_word_count'] = new RepeatCounter();
    // }

    $app = new Silex\Application();
        $app->regist(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

?>
