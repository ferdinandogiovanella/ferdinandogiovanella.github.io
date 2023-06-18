<!DOCTYPE html>
<html>
<head>
    <title>FORMULARIO AR</title>
    <meta charset="utf-8">
    <meta description="Formulario da Atividade Reflexiva">
</head>
<body>
    <form action="action_page.php" method="post">
        <label for="nome">NOME:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="sobrenome">SOBRENOME:</label><br>
        <input type="text" id="sobrenome" name="sobrenome" required><br><br>
        <label for="idade">IDADE:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>
        <label for="mensagem">MENSAGEM:</label><br>
        <input type="text" id="mensagem" name="mensagem"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <br><br>

    <?php 
        if(isset($_GET["mensagemA"])) { //Se uma mensagem existir, ela é exibida.
            echo "<h3>Olá {$_GET["mensagemA"]}</h3><br>";
        }
    ?>

</body>
</html>