<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <script src="dist/bundle.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="banner">
        <h1>Baptême Alexandra</h1>
    </div>
    <div class="grid hide">
    <?php 
    $handle = opendir(dirname(realpath(__FILE__)).'/dist/img/');
    while($file = readdir($handle)){
        $randomNumber = rand(-5,5);
        if($file !== '.' && $file !== '..'){ ?>
            <div class="grid-item <?php echo $randomNumber > 0 ? 'grid-item--width2':''; ?>">
                <a data-fslightbox="gallery" href="<?php echo "dist/img/".$file; ?>">
                    <?php echo '<img src="dist/img/'.$file.'" border="0" />'; ?>
                </a>
            </div>

        <?php
      }
    }

    ?>
    
        
        <div class="grid-item grid-item--width2">...</div>
    </div>
      
</body>
</html>
<script src="fslightbox.js"></script>
<style>
    .grid-item { width: 200px; padding: 10px; }
    .grid-item--width2 { width: 400px; }
    img {
        width: 100%; height: auto;
    }
    .grid {
    margin: 0 auto;
    }
    .hide {
        display: none;
    }
    .banner {
        width: 100%;
        height: 150px;
        background-image: url('dist/img/DSCN6816.JPG');
        background-size: cover;
        position: relative;
        display: flex;
        justify-content:center;
        align-items: center;
    }
    .banner:after {
        content:"";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;bottom: 0;
        background: rgba(0,0,0,0.3);
        z-index: 1;
    }
    h1 {
        color: #fff;
        font-family: 'Gloria Hallelujah', cursive;
        position: relative;
        z-index: 2;
    }
</style>