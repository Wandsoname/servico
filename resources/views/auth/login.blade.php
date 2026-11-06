<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Conecta Serviços</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #91CCE7, #F5E583);
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 40px 35px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #CC092F;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .logo p {
            color: #666;
            font-size: 14px;
        }

        .login-container h2 {
            text-align: center;
            color: #5E50A1;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
        }

        .form-group input:focus {
            border-color: #ED145B;
            box-shadow: 0 0 5px rgba(237, 20, 91, 0.25);
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #CC092F;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #ED145B;
        }

        .voltar {
            display: block;
            text-align: center;
            margin-top: 22px;
            color: #5E50A1;
            text-decoration: none;
            font-weight: bold;
        }

        .voltar:hover {
            color: #CC092F;
        }

        .destaque {
            width: 60px;
            height: 5px;
            background: #F5E583;
            border-radius: 5px;
            margin: 15px auto 0;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            <h1>Conecta Serviços</h1>
            <p>Conectando profissionais e clientes</p>
            <div class="destaque"></div>
        </div>

        <h2>Acesse sua conta</h2>

        <form>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="btn-login">
                Entrar
            </button>
        </form>

        <a href="{{ url('/') }}" class="voltar">
            ← Voltar para o início
        </a>

    </div>

</body>
</html>