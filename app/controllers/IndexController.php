<?php
namespace App\Controllers;


class IndexController extends BaseController
{
  public function getIndex(){
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM usuarios ORDER BY id DESC');
    $query->execute();
    $blog=$query->fetchAll(\PDO::FETCH_ASSOC);
    //include '../views/index.php';
    return $this->render('index.twig',['blog'=>$blog]);
  }
}

 ?>
