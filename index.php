<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 8/31/18
 * Time: 12:43 PM
 */

include 'routing.php';

include 'src/about.php';
include 'src/index.php';

$route = new Route();


$route->add('/', 'Index');
$route->add('/about', 'About');


$route->submit();