<?php 
    $pwd = 552;
    if(isset($_GET["key"])){
        $key = 20;
        echo $_GET["key"];
        for ($i=0; $i<strlen($_GET["key"]); $i++){
            $key += ord($_GET["key"][$i]);
        }

        if($key == $pwd){
            echo "True";
        }else{
            echo "False";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
</head>
<body>
    <h1>Forbidden</h1>
</body>
</html>