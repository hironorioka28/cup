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
  <div id="testButton">
    <button type="button" class="start">開始</button>
    <button type="button" class="stop">停止</button>
  <div><!-- /#testButton  -->
  <div id="carousel" class="carouselWrapper">
    <div class="prevNextWrapper">
      <button type="button" class="prev">prev</button>
    </div><!-- /.prevNextWrapper -->
    <div class="prevNextWrapper">
      <button type="button" class="next">next</button>
    </div><!-- /.prevNextWrapper -->
    <div class="mainImg">
      <ul>
        <li class="current">
          <div class="imgWrapper" style="background-image:url(assets/img/kawa.jpg)"></div>
          <h2>11111111111111111111</h2>
          <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
        </li>
        <li>
          <div class="imgWrapper" style="background-image:url(assets/img/kinoko.jpg)"></div>
          <h2>2222222222222222222</h2>
          <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
        </li>
        <li>
          <div class="imgWrapper" style="background-image:url(assets/img/sawa.jpg)"></div>
          <h2>3333333333333333333</h2>
          <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
        </li>
        <li>
          <div class="imgWrapper" style="background-image:url(assets/img/taki.jpg)"></div>
          <h2>444444444444444444</h2>
          <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
        </li>
        <li>
          <div class="imgWrapper" style="background-image:url(assets/img/inu.jpg)"></div>
          <h2>5555555555555555555</h2>
          <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
        </li>
      </ul>
    </div><!-- /.mainImg -->
    <div id="thumbnail" class="thumbnail">
      <ul>
        <li class="current" style="background-image:url(assets/img/kawa.jpg)"><button type="button"></button></li>
        <li style="background-image:url(assets/img/kinoko.jpg)"><button type="button"></button></li>
        <li style="background-image:url(assets/img/sawa.jpg)"><button type="button"></button></li>
        <li style="background-image:url(assets/img/taki.jpg)"><button type="button"></button></li>
        <li style="background-image:url(assets/img/inu.jpg)"><button type="button"></button></li>
      </ul>
    </div><!-- /#thumbnail -->
  </div><!-- /#carousel -->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
