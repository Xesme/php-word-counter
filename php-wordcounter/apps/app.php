<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/wordcount.php";

    // session_start();
    // if (empty($_SESSION['sentence_word_count']){
    //     $_SESSION['sentence_word_count'] = new RepeatCounter();
    // }

    $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('search_form.html.twig');
    });

    $app->post("/display_result", function() use($app){
        $word = $_POST['word'];
        $sentence = $_POST['sentence'];
        $new_repeat = new RepeatCounter($word, $sentence);
        $result = $new_repeat->countRepeats($word, $sentence);
        return $app['twig']->render('display_result.html.twig' , array('result' => $result, 'word' => $word, 'sentence' => $sentence));
    });

    return $app;
?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search a word!</title>
    </head>
    <body>
        <h3>Use the inputs below to check the fequency that  a work appears in a sentence or a paragraph below:</h3>
        <form action="/display_results" method="post">
            <label for="word"> Enter a word:
                <input type="text" name="word" value="">
            </label>
            <label for="sentence"> Enter a sentence or paragraph below:
                <input type="text" name="sentence" value="">
            </label>
            <button type="submit">Search!</button>
        </form>
    </body>
</html> -->

<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search a word results!</title>
    </head>
    <body>
        <h2>You searched through this body of text:</h2>
        <span id="textbody">{{RepeatCounter.getSentence}}</span>
        <p> the word {{RepeatCounter.getWord}} appears this many {{RepeatCounter.getCounter}} times.</p>
        <form  action="/" method="get">
            <button type="submit">Try it again!</button>
        </form>
    </body> -->
</html>
