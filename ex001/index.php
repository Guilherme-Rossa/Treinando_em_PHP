<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Testando funções em PHP</h1>

    <?php 
        date_default_timezone_set("america/sao_paulo");
        echo "hoje é dia " . date("D d M Y");
        echo " e a hora é " . date("G:i:s")
    ?>
</body>
</html>