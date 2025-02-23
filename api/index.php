<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCM Logon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E5E5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 350px;
        }
        .login-card {
            background-color: #FFFFFF;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-header {
            background-color: #004080;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }
        .form-label {
            font-size: 14px;
        }
        .btn-primary {
            background-color: #004080;
            border: none;
        }
        .btn-primary:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="card login-card">
        <div class="login-header">PCM Logon</div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="username" placeholder="Digite seu usuário">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
