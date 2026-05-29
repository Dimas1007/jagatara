<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>JAGATARA | UMKM Desa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f7f8ee;
            color: #1f2937;
        }

        .navbar {
            background: #0f3d2e;
            color: white;
            padding: 18px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 1px;
            color: #facc15;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 24px;
            font-weight: 600;
        }

        .navbar a:hover {
            color: #facc15;
        }

        .container {
            padding: 40px 70px;
        }

        .hero {
            background: linear-gradient(135deg, #0f3d2e, #166534, #84cc16);
            color: white;
            padding: 70px;
            border-radius: 28px;
            display: grid;
            grid-template-columns: 1.3fr 0.7fr;
            gap: 30px;
            align-items: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .hero h1 {
            font-size: 48px;
            margin: 0 0 15px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            opacity: 0.95;
        }

        .hero-box {
            background: rgba(255,255,255,0.15);
            padding: 28px;
            border-radius: 24px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .hero-box h2 {
            color: #facc15;
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            background: #facc15;
            color: #0f3d2e;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: 700;
            margin: 4px;
        }

        .btn-green {
            background: #166534;
            color: white;
        }

        .section-title {
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .section-title h2 {
            font-size: 32px;
            margin-bottom: 6px;
            color: #0f3d2e;
        }

        .section-title p {
            color: #6b7280;
            margin-top: 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .card {
            background: white;
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.08);
            border: 1px solid #e5e7eb;
        }

        .product-card {
            transition: 0.25s;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0,0,0,0.14);
        }

        .product-card img,
        .detail-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 18px;
            background: #e5e7eb;
        }

        .badge {
            display: inline-block;
            background: #dcfce7;
            color: #166534;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
        }

        .price {
            color: #15803d;
            font-size: 24px;
            font-weight: 800;
        }

        .business-name {
            color: #92400e;
            font-weight: 700;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
            margin-top: 30px;
        }

        .stat-card {
            background: white;
            padding: 28px;
            border-radius: 22px;
            border-left: 7px solid #facc15;
            box-shadow: 0 10px 26px rgba(0,0,0,0.08);
        }

        .stat-card h1 {
            margin: 0;
            color: #166534;
            font-size: 38px;
        }

        .stat-card p {
            margin: 8px 0 0;
            color: #6b7280;
            font-weight: 600;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 24px rgba(0,0,0,0.08);
        }

        th {
            background: #0f3d2e;
            color: white;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        input, textarea, select {
            width: 100%;
            padding: 13px;
            margin-bottom: 16px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
        }

        label {
            font-weight: 700;
            color: #0f3d2e;
        }

        .footer {
            margin-top: 60px;
            background: #0f3d2e;
            color: white;
            padding: 30px 70px;
            text-align: center;
        }

        @media(max-width: 768px) {
            .navbar, .container, .footer {
                padding: 24px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 36px;
            }

            .hero h1 {
                font-size: 34px;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="brand">JAGATARA</div>
    <div>
        <a href="/">Beranda</a>
        <a href="/admin/dashboard">Admin</a>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer">
    <strong>JAGATARA</strong> — Platform Digital Wirausaha UMKM Desa Berbasis Private Cloud
</div>

</body>
</html>