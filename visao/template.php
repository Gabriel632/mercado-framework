<html>
    <head>
        <title>template MVC</title>
        <base href="<?= BASE_URL ?>">

        <link rel="stylesheet" href="./publico/css/estilo.css">
    </head>
    <body class="container">
        <?php require "cabecalho.php"; ?>

        <?php alertComponentRender(); ?>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php require 'rodape.visao.php'; ?>

    </body>
</html>
