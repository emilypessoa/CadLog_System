<?php
    session_start();

    if(isset($_SESSION['perfil'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
    <style>
    /* Define o estilo geral da página */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        h2 {
            font-size: 28px;
            color: #ff6b6b;
            margin-bottom: 20px;
        }

        /* Estiliza a tabela */
        table.styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            width: 100%;
            border-radius: 12px 12px 0 0;
            overflow: hidden;
            font-size: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        table.styled-table thead tr {
            background-color: #ff6b6b;
            color: #ffffff;
            text-align: left;
        }

        table.styled-table th, table.styled-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #dddddd;
        }

        table.styled-table tbody tr {
            background-color: #f8f9fa;
            transition: background-color 0.2s;
        }

        table.styled-table tbody tr:hover {
            background-color: #ffeaea;
        }

        table.styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        /* Botões */
        a.btn, a {
            display: inline-block;
            background-color: #ff6b6b;
            color: #fff;
            padding: 10px 20px;
            margin: 20px auto;
            border-radius: 25px;
            text-decoration: none;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(255, 107, 107, 0.4);
            transition: background-color 0.3s;
        }

        a.btn:hover, a:hover {
            background-color: #ff8787;
        }

        /* Estilo adicional para o rodapé da tabela */
        table.styled-table tfoot tr {
            background-color: #ff6b6b;
            color: #ffffff;
        }
    </style>
</head>

<body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href="">Editar</a>
                        <?php endif; ?>

                        <!-- Insere botão de exclusão apenas para perfil admin -->
                        <?php if($_SESSION['perfil'] == 'admin'): ?>
                            <a href="">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
 
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>