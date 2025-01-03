<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erkek Ürünleri</title>
    <style>
        /* Genel CSS Stilleri */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header p {
            margin: 5px 0;
            font-size: 18px;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            margin: 0 10px;
            font-size: 18px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #28a745;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            margin: 15px;
            padding: 20px;
            width: 300px;
            box-sizing: border-box;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 22px;
            margin: 15px 0;
            color: #333;
        }

        .product p {
            color: #777;
            margin: 10px 0;
        }

        .product .price {
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
            margin-top: 10px;
        }

        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #218838;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Mobile Adaptasyonu */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
            .product {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Erkek Ürünleri</h1>
    <p>Rahat ve Şık Seçenekler</p>
</header>

<!-- Navbar -->
<nav>
    <a href="{{ url('/') }}">Anasayfa</a>
</nav>

<div class="container">
    <!-- Erkek T-Shirt -->
    <div class="product">
        <img src="{{ asset('foto/erkektshirt.jpg') }}" alt="Erkek T-Shirt">
        <h3>Erkek T-Shirt</h3>
        <p>Rahat ve modern bir seçenek.</p>
        <p class="price">₺89,99</p>
        <a href="#" class="button">Sepete Ekle</a>
    </div>

    <!-- Erkek Pantolon -->
    <div class="product">
        <img src="{{ asset('foto/erkekpant.jpeg') }}" alt="Erkek Pantolon">
        <h3>Erkek Pantolon</h3>
        <p>Şık ve konforlu.</p>
        <p class="price">₺159,99</p>
        <a href="#" class="button">Sepete Ekle</a>
    </div>

    <!-- Erkek Ceket -->
    <div class="product">
        <img src="{{ asset('foto/erkekceket.jpeg') }}" alt="Erkek Ceket">
        <h3>Erkek Ceket</h3>
        <p>Soğuk havalarda sıcak tutar.</p>
        <p class="price">₺299,99</p>
        <a href="#" class="button">Sepete Ekle</a>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Giyim E-Ticaret</p>
</footer>

</body>
</html>
