<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sepatu Samba Sneakers - Twinkle Toes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        header {
            background: #ddd;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            color: #000;
        }
        .container {
            display: flex;
            padding: 40px;
            background: #fff;
        }
        .image-section {
            flex: 1;
        }
        .image-section img {
            width: 100%;
            max-width: 400px;
        }
        .details {
            flex: 1;
            padding: 0 40px;
        }
        .details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .details p {
            font-size: 18px;
            margin: 5px 0;
        }
        select, button {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
        }
        button {
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #444;
        }
        .back-btn {
            margin: 10px;
        }
    </style>
</head>
<body>

<header>
    <div><strong>Twinkle Toes</strong></div>
    <nav>
        <a href="#">PRIA</a>
        <a href="#">WANITA</a>
        <a href="#">ANAK</a>
    </nav>
    <div>
        <span>Status Pesanan</span> |
        <a href="#">Masuk</a>
        <input type="text" placeholder="Cari">
        🛒
    </div>
</header>

<a href="produk_pria.php" class="back-btn">⬅ KEMBALI</a>

<div class="container">
    <div class="image-section">
        <img src="images/b6a03f8a52a53595b1f8cdef0c754c1d.jpeg" alt="Sepatu Samba Sneakers">
    </div>
    <div class="details">
        <h2>Sepatu Samba Sneakers</h2>
        <p><strong>Rp.200.000</strong></p>

        <form method="POST" action="cart.php">
            <label for="size">PILIH SIZE</label><br>
            <select name="size" id="size" required>
                <option value="">UKURAN</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
            </select><br>

            <input type="hidden" name="product" value="Sepatu Samba Sneakers">
            <input type="hidden" name="price" value="200000">
            
            <button type="submit">TAMBAH KE KERANJANG ➝</button>
        </form>
    </div>
</div>

</body>
</html>
