<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página TeamPloro</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <img src="assets/png/Infinity.jpg" alt="Logo TeamPloro" class="logo">
    <h1>Bem-vindo à TeamPloro</h1>
    <a href="#" class="btn-login" onclick="openModal()">Login</a>

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
