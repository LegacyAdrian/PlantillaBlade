<?php 
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);
$titulo = 'Info de Pepe aqui';
$nombre = 'Pepe Pepón';
$edad = 12;
$maximo = 5;
$aficiones = ['PHP','JavaSCript','Blade','AJAX'];
$aficiones2 = [];
echo $blade ->view()->make('plantilla1', compact('nombre','titulo','edad','maximo','aficiones','aficiones2'))->render();
?>