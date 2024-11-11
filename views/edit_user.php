<!DOCTYPE html>
<html lang="pt-br">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuário</title>
<link rel="stylesheet" href="css/edit.css">
<style>
body.edit-body {
    background-color: #ffe6f2;
    font-family: Arial, sans-serif;
}

.edit-container {
    width: 100%;
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffb3d9;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    color: #333;
}

.edit-container h2 {
    text-align: center;
    color: #ff66a3;
}

.edit-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #d63384;
}

.edit-form input[type="text"],
.edit-form input[type="email"],
.edit-form select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #d63384;
    border-radius: 4px;
    background-color: #fff0f5;
}

.edit-form input[type="text"]:focus,
.edit-form input[type="email"]:focus,
.edit-form select:focus {
    border-color: #ff66a3;
    outline: none;
    box-shadow: 0px 0px 4px #ff66a3;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #ff66a3;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #e60073;
}

.back-link {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #d63384;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.back-lin
</style>
</head>

 
<body class="edit-body">
<div class="edit-container">
<h2>Editar Usuário</h2>
<form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required>
 
            <label for="email">Email:</label>
<input type="email" name="email" id="email" value="<?= $user['email']?>" required>
 
            <label for="perfil">Perfil:</label>
<select name="perfil" id="perfil">
<option value="admin"<?= $user['perfil'] == 'admin' ? 'selected' : ''?>>Admin</option>
<option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : ''?>>Gestor</option>
<option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : ''?>>Colaborador</option>
</select>
 
            <button type="submit" class="btn">Salvar</button>
</form>
<a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
</div>
</body>
 
</html>