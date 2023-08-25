<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dist/bundle.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="grid">
    <?php 
    $handle = opendir(dirname(realpath(__FILE__)).'/dist/img/');
    while($file = readdir($handle)){
        $randomNumber = rand(-5,5);
        if($file !== '.' && $file !== '..'){ ?>
            <div class="grid-item <?php echo $randomNumber > 0 ? 'grid-item--width2':''; ?>">
                <?php echo '<img src="dist/img/'.$file.'" border="0" />'; ?>
            </div>

        <?php
      }
    }

    ?>
    
        
        <div class="grid-item grid-item--width2">...</div>
    </div>
      
</body>
</html>

<style>
    .grid-item { width: 200px; }
    .grid-item--width2 { width: 400px; }
    img {
        width: 100%; height: auto;
    }
</style>