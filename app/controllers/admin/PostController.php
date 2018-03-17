<?php
namespace App\Controllers\Admin;
 use App\Controllers\BaseController;
class PostController extends BaseController{
  public function getIndex(){
    //admin/post or Admin/post/index
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM usuarios ORDER BY id DESC');
    $query->execute();
    $blog=$query->fetchAll(\PDO::FETCH_ASSOC);
    return $this->render('/admin/post.twig',['blog'=>$blog]);
  }
  public function getCreate(){
    //admin/post/create
    return $this->render('admin/insert_post.twig');
  }
  public function postCreate(){
    global $pdo;
    $sql= 'INSERT INTO usuarios (titulo,contenido) VALUES (:titulo, :contenido) ';
    $query=$pdo->prepare($sql);
    $blog=$query->execute([
      'titulo'=>$_POST['titulo'],
      'contenido'=>$_POST['contenido']
    ]);
    return render('admin/insert_post.twig',['blog'=>$blog]);
  }
}
 ?>
