<?php
$text = $_GET['paragraph'];
$censured = $_GET['word'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <?php echo $text ?> 
        <div>
            la lunghezza è <?php echo strlen($text) ?>
        </div>
    </p>
    <div>
        <p>
            <?php echo str_replace($censured,"***", $text)?> 
            <div>
                la lunghezza è <?php echo strlen(str_replace($censured,"***", $text)) ?> 
            </div>
            
        </p>
    </div>

</body>
</html>