<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İletişim</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #28a745;
        }

        /* Navbar'ı ortalamak için Flexbox kullanıyoruz */
        nav {
            background-color: #444;
            overflow: hidden;
            display: flex;
            justify-content: center; /* Ortalamayı sağlar */
            align-items: center;
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 18px;
        }

        nav a:hover {
            background-color: #575757;
        }

        .container {
            width: 60%;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            text-align: left;
            display: block;
        }

        input, textarea {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #28a745;
            outline: none;
        }

        input.error, textarea.error {
            border-color: #dc3545;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
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

        .form-message {
            font-size: 14px;
            color: #777;
            margin-top: 10px;
        }

        .form-message.error {
            color: #dc3545;
        }

        .form-message.success {
            color: #28a745;
        }

        /* Mobile Adaptasyonu */
        @media (max-width: 768px) {
            .container {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ url('/') }}">Ana Sayfa</a>
</nav>

<header>
    <h1>İletişim</h1>
</header>

<div class="container">
    <h2>Bize Ulaşın</h2>

    <!-- Success/Error Message Display -->
    <div id="form-message" class="form-message"></div>

    <!-- Laravel Blade Form with Error Handling -->
    <form method="POST" action="{{ route('contact.send') }}" id="contactForm">
        @csrf
        <div>
            <label for="name">Adınız</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}">
            @error('name')
            <div class="form-message error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">E-posta</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
            @error('email')
            <div class="form-message error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="message">Mesajınız</label>
            <textarea id="message" name="message" required>{{ old('message') }}</textarea>
            @error('message')
            <div class="form-message error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Gönder</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Giyim E-Ticaret</p>
</footer>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();

        document.querySelectorAll('.error').forEach(function(errorElement) {
            errorElement.textContent = '';
        });

        let hasError = false;

        // Ad soyad kontrolü
        const name = document.getElementById('name').value;
        if (!name.trim()) {
            hasError = true;
            document.getElementById('name-error').textContent = 'Adınızı girmeniz gerekiyor.';
            document.getElementById('name').classList.add('error');
        }

        const email = document.getElementById('email').value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!email.trim() || !emailPattern.test(email)) {
            hasError = true;
            document.getElementById('email-error').textContent = 'Geçerli bir e-posta adresi girin.';
            document.getElementById('email').classList.add('error');
        }

        // Mesaj kontrolü
        const message = document.getElementById('message').value;
        if (!message.trim()) {
            hasError = true;
            document.getElementById('message-error').textContent = 'Mesajınızı girmeniz gerekiyor.';
            document.getElementById('message').classList.add('error');
        }

        if (!hasError) {
            document.getElementById('form-message').textContent = 'Mesajınız başarıyla gönderildi!';
            document.getElementById('form-message').classList.add('success');
        } else {
            document.getElementById('form-message').textContent = 'Lütfen tüm alanları düzgün doldurun.';
            document.getElementById('form-message').classList.add('error');
        }
    });
</script>

</body>
</html>
