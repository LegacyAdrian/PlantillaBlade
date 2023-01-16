<?php 
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$frutas = ['manzanas','peras','limon','España'];

echo $blade -> view()->make('layouts.child2', compact('frutas'))->render();