<html>
<head>
    <title>blog luz y verdad</title>
    <!-- usando bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>BLOG DE LUZ Y VERDAD</h1>
        </div>
      </div>
      <div class="row">
        <h2>POST</h2>
        <div class="col-md-8">
          <a class="btn btn-primary" href="<?php echo BASE_URL;?>/admin/posts/create">agregar nuevo post</a>
          <table class="table">
            <tr>
              <th>TITULO</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          <?php foreach ($blog as $blog) {?>
            <tr>
              <td><?echo $blog['titulo'];?></td>
              <td>editar</td>
              <td>eliminar</td>
            </tr>
          <?}?>
        </table>
        </div>
        <div class="col-md-4">
          Las riquezas mal habidas no sirven de nada,
pero la justicia libra de la muerte.
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <footer>
        
        </footer>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
