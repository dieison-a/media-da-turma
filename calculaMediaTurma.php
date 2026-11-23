<?php
function calcularMediaTurma($alunos)
{
    $soma = 0;
    $quantidade = count($alunos);

    foreach ($alunos as $matricula => $dados) {
        $soma = $soma + $dados['media'];
    }

    $media = $soma / $quantidade;

    return $media;
}

$alunos = [
    $_POST['matricula1'] => [
        'nome' => $_POST['nome1'],
        'media' => $_POST['media1'],
    ],
    $_POST['matricula2'] => [
        'nome' => $_POST['nome2'],
        'media' => $_POST['media2'],
    ],
    $_POST['matricula3'] => [
        'nome' => $_POST['nome3'],
        'media' => $_POST['media3'],
    ],
];

$mediaTurma = calcularMediaTurma($alunos);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Média da Turma</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="cartao tabela">
        <h1>Dados da turma</h1>

        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Média final</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $matricula => $dados): ?>
                    <tr>
                        <td><?php echo number_format($matricula, 0, ',', '.'); ?></td>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo number_format($dados['media'], 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p class="resultado"><strong>Média geral da turma:</strong> <?php echo number_format($mediaTurma, 2, ',', '.'); ?></p>

        <a href="index.html">Cadastrar novos alunos</a>
    </main>
</body>

</html>
