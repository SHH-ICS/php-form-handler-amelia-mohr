<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Webpage with MDL, Favicon, and PHP form">
    <meta name="keywords" content="isc2o">
    <meta name="author" content="Amelia M">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-pink.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="./images/site.webmanifest">
    <title>MDL, Favicon, and PHP form</title>
  </head>

  <body>
    
    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>
    
    <form action="handler.php" method="post">
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Name...</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Email...</label>
      </div>
      
    
  </body>
  
</html>
