    <?php

    require_once 'memento.php';

    $textDocument = new TextDocument();

    $textDocument->setText("Hello World!");
    $textDocument->setText("Bonjour le monde!");
    $textDocument->undo();
    $textDocument->undo();
    $textDocument->redo();
    $textDocument->setText("Hola Mundo!");
    $textDocument->undo();
    $textDocument->redo();
