<!doctype html>
<html lang="ja">
<head>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<? include 'header.php'; ?>
<section>
  <h1>Test</h1>
  <div class="imgWrapper">
    <figure><img src="assets/img/kawa.jpg"></figure>
    <figure><img src="assets/img/kinoko.jpg"></figure>
    <figure><img src="assets/img/sawa.jpg"></figure>
    <figure><img src="assets/img/taki.jpg"></figure>
  </div><!-- /.imgWrapper -->
</section>

<section>
  <h1>Carousel</h1>
  <div id="carousel" class="carouselWrapper">
    <div class="prevNextWrapper">
      <button type="button" class="prev">prev</button>
    </div><!-- /.prevNextWrapper -->
    <ul>
      <li class="current" style="background-image:url(assets/img/kawa.jpg)"></li>
      <li style="background-image:url(assets/img/kinoko.jpg)"></li>
      <li style="background-image:url(assets/img/sawa.jpg)"></li>
      <li style="background-image:url(assets/img/taki.jpg)"></li>
      <li style="background-image:url(assets/img/inu.jpg)"></li>
    </ul>
    <div class="prevNextWrapper">
      <button type="button" class="next">next</button>
    </div><!-- /.prevNextWrapper -->
  </div><!-- /.carouselWrapper -->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
