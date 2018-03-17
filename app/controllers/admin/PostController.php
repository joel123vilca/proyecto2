<?php
namespace App\Controllers\Admin;

class PostController{
  public function getIndex(){
    //admin/post or Admin/post/index
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM usuarios ORDER BY id DESC');
    $query->execute();
    $blog=$query->fetchAll(\PDO::FETCH_ASSOC);
    return render('../views/admin/post.php',['blog'=>$blog]);
  }
  public function getCreate(){
    //admin/post/create
    return render('../views/admin/insert_post.php');
  }
  public function postCreate(){
    global $pdo;
    $sql= 'INSERT INTO usuarios (titulo,contenido) VALUES (:titulo, :contenido) ';
    $query=$pdo->prepare($sql);
    $blog=$query->execute([
      'titulo'=>$_POST['titulo'],
      'contenido'=>$_POST['contenido']
    ]);
    return render('../views/admin/insert_post.php',['blog'=>$blog]);
  }
}
 ?>
