<?php 
$usuarios = array(
    array(
        "id" => 0,
        "username" => "Nicolas"
    ),
    array(
        "id" => 1,
        "username" => "Juancho"
    ),
    array(
        "id" => 2,
        "username" => "Pedro"
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a Js</title>
</head>
<body>

<script>
    let user = JSON.parse('<?= json_encode($usuarios) ?>');
    console.log(user);

    
</script>
    
</body>
</html>