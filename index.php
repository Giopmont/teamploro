<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página TeamPloro</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #231F20;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Para centralizar verticalmente */
            margin: 0; /* Remover margens padrão do corpo */
        }

        img.logo {
            max-width: 200px;
            height: auto;
        }

        h1 {
            color: white;
        }

        /* Estilos para o botão "Entrar" */
        .btn-login {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            text-decoration: none;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        /* Estilos para o modal de login */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Estilos para os campos de login e senha */
        .login-input {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        /* Estilos para o botão "Login" no modal */
        .btn-modal-login {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-modal-login:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <img src="assets/png/Infinity.jpg" alt="Logo TeamPloro" class="logo">
    <h1>Bem-vindo à TeamPloro</h1>
    <a href="#" class="btn-login" onclick="openModal()">Acessar</a>

    <!-- Modal de login -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <h2>Login</h2>
            <input type="text" placeholder="Usuário" class="login-input" required>
            <input type="password" placeholder="Senha" class="login-input" required>
            <button class="btn-modal-login" onclick="closeModal()">Entrar</button>
        </div>
    </div>

    <script>
        // Função para abrir o modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Função para fechar o modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>
