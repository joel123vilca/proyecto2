
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
        <h2>NUEVO POST</h2>

        <div class="col-md-8">
          <a href="<?php echo BASE_URL;?>/admin/posts" class="btn btn-default">ATRAS</a><br><br>
          <?php if(isset($blog) && $blog){
            echo '<div class="alert alert-success">guardado exitosamente :)</div>';
          }?>
          <form method="post">
            <div class="form-group">
              <label class="inputtitulo">
                <input type="text" name="titulo" id="">
              </label>
            </div>
            <textarea class="form-control" name="contenido" id="inputcontent">
            </textarea>
            <br>
            <input type="submit" value="guardar">
          </form>
        </div>
        <div class="col-md-4">
          Las riquezas mal habidas no sirven de nada,
pero la justicia libra de la muerte.
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <footer>
          <a href="">admin</a>
        </footer>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
