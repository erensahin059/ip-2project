<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giyim E-Ticaret</title>
    <link rel="stylesheet" href="styles.css">
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

        nav {
            background-color: #444;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #575757;
        }

        .search-bar {
            text-align: center;
            padding: 10px 0;
        }

        .search-bar input {
            padding: 8px;
            width: 50%;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            margin: 10px;
            padding: 15px;
            width: calc(33% - 20px);
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 20px;
            margin: 10px 0;
        }

        .product p {
            color: #777;
            margin: 5px 0;
        }

        .product .price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .button:hover {
            background-color: #218838;
        }

        .category-title {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .filter-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .filter-bar select, .filter-bar button {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .review-section {
            width: 100%;
            margin-top: 40px;
        }

        .review-section h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .review {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 8px;
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
    </style>
</head>
<body>

<header>
    <h1>Giyim E-Ticaret</h1>
    <p>Erkek ve Kadın Giyim Ürünleri</p>
</header>

<nav>
    <a href="{{ route('women.page') }}" target="_blank">Kadın</a>
    <a href="{{ route('men.page') }}">Erkek</a>
    <a href="{{ route('cart.page') }}">Sepetim</a>
    <a href="{{ route('contact.page') }}">İletişim</a>
    <!-- Arama Çubuğu -->
    <div class="search-bar">
        <input type="text" id="search" placeholder="Ürün Ara...">
    </div>

    <!-- Filtreleme -->
    <div class="filter-bar">
        <select>
            <option value="all">Tümü</option>
            <option value="clothing">Giysi</option>
            <option value="shoes">Ayakkabı</option>
            <option value="accessories">Aksesuarlar</option>
        </select>
        <button>Filtrele</button>
    </div>

    <!-- Kadın Ürünleri -->
    <div id="women" class="container">
        <h2 class="category-title">Kadın Ürünleri</h2>

        <!-- Kadın T-Shirt -->
        <div class="product">
            <img src="{{ asset('foto/kadıntshirt.jpg') }}" alt="Kadın T-Shirt">
            <h3>Kadın T-Shirt</h3>
            <p>Şık ve rahat bir seçenek.</p>
            <p class="price">₺99,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="1"
               data-product-name="Kadın T-Shirt"
               data-product-price="99.99"
               data-product-image="{{ asset('foto/kadıntshirt.jpg') }}">Sepete Ekle</a>
        </div>

        <!-- Kadın Elbise -->
        <div class="product">
            <img src="{{ asset('foto/kadınelbise.jpg') }}" alt="Kadın Elbise">
            <h3>Kadın Elbise</h3>
            <p>Özel günler için ideal.</p>
            <p class="price">₺199,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="2"
               data-product-name="Kadın Elbise"
               data-product-price="199.99"
               data-product-image="{{ asset('foto/kadınelbise.jpg') }}">Sepete Ekle</a>
        </div>

        <!-- Kadın Ceket -->
        <div class="product">
            <img src="{{ asset('foto/kadınceket.jpg') }}" alt="Kadın Ceket">
            <h3>Kadın Ceket</h3>
            <p>Soğuk günlerde şıklık.</p>
            <p class="price">₺249,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="3"
               data-product-name="Kadın Ceket"
               data-product-price="249.99"
               data-product-image="{{ asset('foto/kadınceket.jpg') }}">Sepete Ekle</a>
        </div>

    </div>

    <!-- Erkek Ürünleri -->
    <div id="men" class="container">
        <h2 class="category-title">Erkek Ürünleri</h2>

        <!-- Erkek T-Shirt -->
        <div class="product">
            <img src="{{ asset('foto/erkektshirt.jpg') }}" alt="Erkek T-Shirt">
            <h3>Erkek T-Shirt</h3>
            <p>Rahat ve modern bir seçenek.</p>
            <p class="price">₺89,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="4"
               data-product-name="Erkek T-Shirt"
               data-product-price="89.99"
               data-product-image="{{ asset('foto/erkektshirt.jpg') }}">Sepete Ekle</a>
        </div>

        <!-- Erkek Pantolon -->
        <div class="product">
            <img src="{{ asset('foto/erkekpant.jpeg') }}" alt="Erkek Pantolon">
            <h3>Erkek Pantolon</h3>
            <p>Şık ve konforlu.</p>
            <p class="price">₺159,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="5"
               data-product-name="Erkek Pantolon"
               data-product-price="159.99"
               data-product-image="{{ asset('foto/erkekpant.jpeg') }}">Sepete Ekle</a>
        </div>

        <!-- Erkek Ceket -->
        <div class="product">
            <img src="{{ asset('foto/erkekceket.jpeg') }}" alt="Erkek Ceket">
            <h3>Erkek Ceket</h3>
            <p>Soğuk havalarda sıcak tutar.</p>
            <p class="price">₺299,99</p>
            <a href="#" class="button add-to-cart"
               data-product-id="6"
               data-product-name="Erkek Ceket"
               data-product-price="299.99"
               data-product-image="{{ asset('foto/erkekceket.jpeg') }}">Sepete Ekle</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Giyim E-Ticaret</p>
    </footer>

    <script>
        document.querySelectorAll('.add-to-cart').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                let productId = button.getAttribute('data-product-id');
                let productName = button.getAttribute('data-product-name');
                let productPrice = button.getAttribute('data-product-price');
                let productImage = button.getAttribute('data-product-image');

                // Sepeti güncelleme işlemi için Ajax isteği gönder
                fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        name: productName,
                        price: productPrice,
                        image: productImage
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message); // Ürün sepete eklendi mesajı
                    });
            });
        });
    </script>
</body>
</html>
