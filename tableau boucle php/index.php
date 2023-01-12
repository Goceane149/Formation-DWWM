<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Document</title>
</head>
<body>

<?php
$prenom = array("Jimmy"=>"19/20","Greg"=>"14/20","Stephane"=>"18/20","Perrine"=>"20/20","Anthony"=>"17/20","Oceane"=>"15/20");
echo "<pre>";
ksort($prenom);
echo <<<html

<table class="table">
  <thead>
    <tr>
    <th scope="col">prénom</th>
    <th scope="col">note</th>
    
html;

foreach($prenom as $x => $x_value) {
    echo <<<html
    <tr>
      <td>{$x}</td>
      <td>{$x_value}</td>     
    </tr>
    html;
  }
  ?>
</body>
</html>