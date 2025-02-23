<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PCM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #E5E5E5;
        }
        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #F2F2F2;
            padding: 10px;
            position: fixed;
            height: 100%;
            border-right: 1px solid #ccc;
        }
        .sidebar h4 {
            font-size: 16px;
            font-weight: bold;
            padding: 10px 5px;
            color: #333;
            border-bottom: 1px solid #ccc;
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 8px;
            font-size: 14px;
            border-radius: 3px;
        }
        .sidebar a:hover {
            background-color: #DADADA;
        }
        /* Navbar */
        .navbar {
            width: 100%;
            background-color: #004080;
            height: 50px;
            position: fixed;
            left: 220px;
            top: 0;
            padding: 0 15px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar .logout-btn {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            font-size: 14px;
        }
        .navbar .logout-btn:hover {
            background-color: #003366;
            border-radius: 3px;
        }
        /* Conteúdo principal */
        .content {
            margin-left: 220px;
            padding: 70px 20px;
            width: 100%;
        }
        .content h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .content p {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4>PCM Logon</h4>
    <a href="#">📊 Dashboard</a>
    <a href="#">⚙️ Configurações</a>
    <a href="#">📂 Relatórios</a>
    <a href="#">🔗 Links</a>
    <a href="index.html" class="text-danger">🚪 Logout</a>
</div>

<div class="navbar">
    <span>Bem-vindo, Usuário!</span>
    <a href="index.html" class="logout-btn">Sair</a>
</div>

<div class="content">
    <h2>Dashboard</h2>
    <p>Bem-vindo ao sistema PCM Logon. Escolha uma opção no menu ao lado.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
