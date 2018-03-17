
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
        <div class="col-md-8">
          <?php foreach ($blog as $blog) {?>
          <div class="blog-post">
            <h2><? echo $blog['titulo'];?></h2>
            <p>ene 1, 2018 <a href="">joel</a></p>
            <div class="blog-post-image">
              <img src="images/joel.jpg" alt="" style="max-width: 700px; max-height: 600px"  />
            </div>
            <div class="blog-post-content">
              <? echo $blog['contenido'];?>
            </div>
          </div>
          <?}?>
        </div>
        <div class="col-md-4">
          Las riquezas mal habidas no sirven de nada,
pero la justicia libra de la muerte.
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <footer>
          <a href="<?php echo BASE_URL;?>/admin">admin</a>
        </footer>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
