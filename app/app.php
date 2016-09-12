
<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/Leetspeak.php";

 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));

 $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
 });

 $app->post("/results", function() use ($app){
   $newLeetspeak = new Leetspeak;
   $results = $newLeetspeak->convertToLeetspeak($_POST['input_string']);
   return $app['twig']->render('results.html.twig', array("results"=> $results));
 });

 return $app;
?>
