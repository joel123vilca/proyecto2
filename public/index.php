<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once '../vendor/autoload.php';
include_once '../config.php';
$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].$baseDir;
define('BASE_URL',$baseUrl);

$route = $_GET['route']?? '/';
function render($fileName, $params = []){
  ob_start();
  extract($params);
  include $fileName;
  return ob_get_clean();
}
use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();
$router->controller('/', App\Controllers\IndexController::class);
$router->controller('/admin', App\Controllers\Admin\IndexController::class);
/*
$router->get('/admin/posts', function () use ($pdo){
  $query=$pdo->prepare('SELECT * FROM usuarios ORDER BY id DESC');
  $query->execute();
  $blog=$query->fetchAll(PDO::FETCH_ASSOC);
  return render('../views/admin/post.php',['blog'=>$blog]);
});*/
$router->controller('/admin/posts', App\Controllers\Admin\PostController::class);
/*$router->post('/admin/posts/create',function() use ($pdo){
  $sql= 'INSERT INTO usuarios (titulo,contenido) VALUES (:titulo, :contenido) ';
  $query=$pdo->prepare($sql);
  $blog=$query->execute([
    'titulo'=>$_POST['titulo'],
    'contenido'=>$_POST['contenido']
  ]);
  return render('../views/admin/insert_post.php',['blog'=>$blog]);
});*/
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);
echo $response;
 ?>
