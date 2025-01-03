<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sepetim</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Sepetim</h1>
</header>

<!-- Sepet Ürün Listesi -->
<div class="container">
    @if(count($cart) > 0)
        @foreach($cart as $item)
            <div class="product">
                <img src="{{ asset('foto/' . $item['image']) }}" alt="{{ $item['name'] }}">
                <h3>{{ $item['name'] }}</h3>
                <p>Fiyat: ₺{{ number_format($item['price'], 2) }}</p>
                <p>Adet: {{ $item['quantity'] }}</p>
                <p>Toplam: ₺{{ number_format($item['price'] * $item['quantity'], 2) }}</p>
            </div>
        @endforeach

        <!-- Sepet Toplamı -->
        <div class="total">
            <h3>Toplam Tutar: ₺{{ number_format(array_sum(array_map(function($item) {
                return $item['price'] * $item['quantity'];
            }, $cart)), 2) }}</h3>
        </div>

    @else
        <p>Sepetinizde ürün bulunmamaktadır.</p>
    @endif
</div>

<footer>
    <p>&copy; 2024 Giyim E-Ticaret</p>
</footer>

</body>
</html>
