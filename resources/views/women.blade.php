<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kadın Ürünleri</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        /* Genel stil ayarları */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Kadın Ürünleri Başlığı */
        .category-title {
            font-size: 24px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        /* Ürünler için stil */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 15px;
            width: 280px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .product p {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 15px;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Navigasyon responsive */
        @media screen and (max-width: 768px) {
            nav {
                display: block;
                text-align: center;
                margin: 10px 0;
            }

            nav a {
                display: inline-block;
                margin: 10px 0;
                font-size: 18px;
            }

            .container {
                flex-direction: column;
                align-items: center;
            }

            .product {
                width: 90%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Kadın Ürünleri</h1>
    <nav>
        <a href="{{ url('/') }}">Ana Sayfa</a>
        <a href="{{ route('women.page') }}" target="_blank">Kadın</a>
        <a href="#men">Erkek</a>
        <a href="#cart">Sepetim</a>
        <a href="{{ route('contact.page') }}">İletişim</a>
    </nav>
</header>

<!-- Kadın Ürünleri Listesi -->
<div class="container">
    <h2 class="category-title">Kadın Ürünleri</h2>

    <!-- Kadın T-Shirt -->
    <div class="product">
        <img src="{{ asset('foto/kadıntshirt.jpg') }}" alt="Kadın T-Shirt">
        <h3>Kadın T-Shirt</h3>
        <p>Şık ve rahat bir seçenek.</p>
        <p class="price">₺99,99</p>

        <!-- Sepete eklemek için form -->
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="Kadın T-Shirt">
            <input type="hidden" name="price" value="99.99">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="image" value="kadıntshirt.jpg">
            <button type="submit" class="button">Sepete Ekle</button>
        </form>
    </div>

    <!-- Kadın Elbise -->
    <div class="product">
        <img src="{{ asset('foto/kadınelbise.jpg') }}" alt="Kadın Elbise">
        <h3>Kadın Elbise</h3>
        <p>Özel günler için ideal.</p>
        <p class="price">₺199,99</p>
        <a href="#" class="button">Sepete Ekle</a>
    </div>

    <!-- Kadın Ceket -->
    <div class="product">
        <img src="{{ asset('foto/kadınceket.jpg') }}" alt="Kadın Ceket">
        <h3>Kadın Ceket</h3>
        <p>Soğuk günlerde şıklık.</p>
        <p class="price">₺249,99</p>
        <a href="#" class="button">Sepete Ekle</a>
    </div>
</div>

<footer>
    <p>&copy; 2024 Giyim E-Ticaret</p>
</footer>

</body>
</html>
