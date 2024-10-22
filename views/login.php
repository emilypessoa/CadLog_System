<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <style>
        /* Fundo em degradê de rosa para roxo pastel */
        body {
            background: linear-gradient(135deg, rgb(255, 182, 193), rgb(204, 153, 255)); /* Rosa para roxo pastel como fundo */
            font-family: 'Comic Sans MS', 'Poppins', sans-serif; /* Fontes*/
            color: rgb(90, 90, 90); /* Texto em cinza */
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main {
            background-color: rgba(255, 182, 193, 0.8); /* Fundo rosa pastel */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        input[type="email"], input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
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
            transform: scale(1.1); /* Aumenta da animação */
        }

        a {
            display: block;
            margin-top: 15px;
            color: rgb(255, 105, 135);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>
</body>

</html>