<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Bilhão - Sofia Carvalho</title>
</head>
<body>
    <h1>Jogo do Bilhão</h1>

    <?php
    $perguntas = [
        "Quem foi tobias no COLTEC?",
        "Qual turma é conhecida pelo seu mascote alien?",
        "Quem foi a maior pixadora do COLTEC?",
    ];

    $respostas = [
        ["Professor", "Rato", "Cachorro", "Calouro"],
        ["101", "103", "105", "102"],
        ["Kátia", "Ju arnaut", "Stella", "Rose da Nuped"],
    ];

    $corretas = [1, 2, 1];

    foreach ($perguntas as $index => $pergunta) {
        echo "<h2>Pergunta " . ($index + 1) . "</h2>";
        echo "<p>$pergunta</p>";

        foreach ($respostas[$index] as $altIndex => $resposta) {
            echo "<input type='radio' name='pergunta_$index' value='$altIndex'> $resposta<br>";
        }

        echo "<p>Resposta correta: " . $respostas[$index][$corretas[$index]] . "</p>";
        echo "<hr>";
    }
    ?>
</body>
</html>