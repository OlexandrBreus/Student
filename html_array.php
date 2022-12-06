<?php
$array = ['first', 2, 'third', 4, 'fifth', 6, 'seventh', 8, 'ninth', 10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
<ul>
    <?php
    $html = '';
    foreach ($array as $value){
        $html .= '<li>'. $value. '</li>';
    }
    echo $html;
    ?>
</ul>
</body>
</html>
