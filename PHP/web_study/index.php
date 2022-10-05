<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JavaScript</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body id="target">
      <header>
        <h1><a href="http://localhost:8080/php.php">JavaScript</a></h1>
      </header>
      <nav>
        <ol>
          <?php
            echo file_get_contents("list.txt");
           ?>
        </ol>
      </nav>

      <div id="control">
        <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
        <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
      </div>

      <article>
        <?php
        if(empty($_GET['id']) === false){
            echo file_get_contents($_GET['id'].".txt");
        }
         ?>
      </article>
  </body>
</html>
