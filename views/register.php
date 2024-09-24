<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        /* Fundo em degradê de rosa para roxo pastel */
        body {
            background: linear-gradient(135deg, rgb(255, 182, 193), rgb(204, 153, 255)); /* Rosa para roxo pastel */
            font-family: 'Comic Sans MS', 'Poppins', sans-serif; /* Fontes */
            color: rgb(90, 90, 90); /* Texto em cinza */
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div {
            background-color: rgba(255, 182, 193, 0.8); /* Fundo rosa cpastel */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        h2 {
            color: rgb(255, 105, 135); /* Título em rosa */
            font-size: 24px;
        }

        label {
            display: block;
            margin: 10px 0 5px 0;
            font-size: 14px;
        }

        input[type="text"], input[type="email"], input[type="password"], select {
            width: 80%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid rgb(255, 182, 193); /* Borda rosa pastel */
            border-radius: 8px;
            background-color: rgb(255, 240, 245); /* Fundo rosa claro */
            font-size: 16px;
            color: rgb(90, 90, 90);
        }

        button {
            background-color: rgb(255, 182, 193); /* Botão rosa */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.4s, transform 0.4s; /* Animação */
        }

        button:hover {
            background-color: rgb(204, 153, 255); /* De rosa para roxo pastel */
            transform: scale(1.1); /* Aumenta da Animação */
        }

        a {
            display: block;
            margin-top: 15px;
            color: rgb(255, 105, 135); /* Link rosa vibrante */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>

        <h2> Cadastro de Usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="nome">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admion</option>
                <option value="gestor">Gestr</option>
                <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>

        </form>

        <a href="">Voltar ao Login</a>
    </div>
</body>
</html>