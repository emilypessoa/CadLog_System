<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
    <style>/* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    background-color: #ffe6f2; /* Fundo rosado suave */
    color: #4b004b; /* Texto em um tom de roxo escuro */
    margin: 0;
    padding: 0;
}

/* Container principal */
.container {
    width: 80%;
    max-width: 800px;
    margin: auto;
    text-align: center;
    padding: 2em;
    background-color: #fff0f5; /* Fundo rosado mais claro para o container */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Título */
h1 {
    color: #ff007f; /* Rosa vibrante */
    font-size: 2.5em;
    margin-bottom: 0.5em;
}

/* Parágrafos */
p {
    font-size: 1.2em;
    color: #800080; /* Roxo escuro */
}

/* Botões */
.btn {
    display: inline-block;
    padding: 0.8em 1.5em;
    margin: 0.5em;
    background-color: #ff66b2; /* Rosa médio */
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #e60073; /* Rosa mais escuro */
}

.btn:active {
    background-color: #cc005c; /* Rosa ainda mais escuro */
}

/* Estilos por perfil */
.admin {
    background-color: #ffb3d9; /* Fundo para perfil Admin */
}

.gestor {
    background-color: #ff80bf; /* Fundo para perfil Gestor */
}

.colaborador {
    background-color: #ff4da6; /* Fundo para perfil Colaborador */
}
</style>
</head>
 
<body class="<?= $_SESSION['perfil']  ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']  ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']  ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'):  ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif($_SESSION['perfil'] == 'gestor'):  ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>