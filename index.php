<?php

/**Create a food order form*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//fat-free debugging
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function() {
    //echo "Home Page";
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
    //echo '<img src="images/food2.jpg">';
});

//Define a order route
$f3->route('GET /order', function() {
    echo "Order Route";
    //$view = new Template();
    //echo $view->render('views/breakfast.html');
});

//Define an order2 route
$f3->route('GET /order2', function() {
    echo "Order 2 Route";
    //$view = new Template();
    //echo $view->render('views/lunch.html');
});

//Define a summary route
$f3->route('GET /summary', function() {
    echo "Summary Route";
    //$view = new Template();
    //echo $view->render('views/lunch.html');
});


//Run fat free
$f3->run();