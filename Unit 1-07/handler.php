<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>

  <body>
    
    Welcome <?php echo $_POST["userName"]; ?>!<br>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
    
  </body>
</html>
