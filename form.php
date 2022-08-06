<?php 
    $url = filter_input(INPUT_GET, 'url');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Gerar URLs</title>
    </head>
    <body>
        <form method="GET" action="processaForm.php">
            <label>Entrada:</label><br>
            <input style="width: 600px" type='text' name='texto' placeholder='Digite o texto'>
            <input type="submit" value="Enviar">
            <br><br>
            <label>Saída:</label><br>
            <input style="width: 600px" type='text' name="url" value='<?= $url ?>'>
        </form>
    </body>
</html>