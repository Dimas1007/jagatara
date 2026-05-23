<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>JAGATARA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f8f3;
            color: #1f2937;
        }

        .navbar {
            background: #14532d;
            color: white;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .container {
            padding: 40px 60px;
        }

        .hero {
            background: linear-gradient(135deg, #166534, #84cc16);
            color: white;
            padding: 60px;
            border-radius: 20px;
            margin-bottom: 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
        }

        .btn {
            display: inline-block;
            background: #166534;
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            margin: 4px;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="navbar">
    <strong>JAGATARA</strong>
    <div>
        <a href="/">Beranda</a>
        <a href="/admin/dashboard">Admin</a>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>