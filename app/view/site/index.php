<!DOCTYPE html>
<html>
<head>
    <title>Snake Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="<?=__BASEPATH__?>img/snakepng2.png">
    <link rel="stylesheet" type="text/css" href="<?=__BASEPATH__?>css/<?=$view['module']?>.style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
  <?php if (!in_array($view['module'], ['login', 'registro'])) {?>
    <div class="principal">
      <div class="head">
        <?php include "header.php"?>
      </div>
      <div class="main">
        <?php include "container.php"?>
      </div>
      <div class="foot">
        <?php include "footer.php"?>
      </div>
    </div>
  <?php } else { 
            include dirname(__FILE__) . "/module." . $view['module'] . ".php";
        } ?>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: none">
      <defs>
        <filter id="deuteranopia">
          <feColorMatrix type="matrix" values="0.625, 0.375, 0, 0, 0 0.7, 0.3, 0, 0, 0 0, 0.3, 0.7, 0, 0 0, 0, 0, 1, 0"/>
        </filter>
        <filter id="protanopia">
          <feColorMatrix type="matrix" values="0.567, 0.433, 0, 0, 0 0.558, 0.442, 0, 0, 0 0, 0.242, 0.758, 0, 0 0, 0, 0, 1, 0"/>
        </filter>
        <filter id="tritanopia">
          <feColorMatrix type="matrix" values="0.95, 0.05, 0, 0, 0 0, 0.433, 0.567, 0, 0 0, 0.475, 0.525, 0, 0 0, 0, 0, 1, 0"/>
        </filter>
      </defs>
    </svg>
  </body>

<?php include "plugins/vlibras/vlibras.php"?>
<script src="<?=__BASEPATH__?>js/site.scripts.js"></script>