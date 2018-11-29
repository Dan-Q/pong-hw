<!DOCTYPE html>
<html>
<head>
  <title>Pong</title>
  <link rel="stylesheet" type="text/css" href="pong.css">
</head>
<body>
  <main>
    <canvas id="pong"></canvas>
    <div id="slides">
      <?php
        $slides = array_reverse(glob('slides/*.{png,jpg,jpeg,gif,webp}', GLOB_BRACE));
        foreach($slides as $slide){
          echo "<div class=\"slide\" style=\"background-image: url('", $slide, "');\"></div>";
        }
      ?>
    </div>
  </main>

  <script type="text/javascript" src="pong.js"></script>
  <script type="text/javascript" src="slides.js"></script>
</body>
</html>
