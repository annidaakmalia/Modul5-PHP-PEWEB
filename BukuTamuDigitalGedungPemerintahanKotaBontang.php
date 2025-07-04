<?php
// Inisialisasi variabel untuk menyimpan pesan
$nama = $email = $pesan = "";
$error = "";

// Proses form saat disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan bersihkan
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pesan = htmlspecialchars(trim($_POST["pesan"]));

    // Validasi input
    if (empty($nama) || empty($email) || empty($pesan)) {
        $error = "Semua kolom harus diisi!";
    } else {
        // Tampilkan data yang dikirim
        $successMessage = "Terima kasih, $nama! Pesan Anda telah diterima.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital | Pemerintahan Kota Bontang</title>
    <style>
        :root {
            --biru: #0056b3;
            --biru-muda: #e6f2ff;
            --kuning: #ffc107;
            --hijau: #28a745;
            --putih: #ffffff;
            --abu: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
            background: linear-gradient(135deg, var(--biru-muda) 0%, var(--putih) 100%);
            background-attachment: fixed;
            background-size: cover;
        }
        
        .header {
            background-color: rgba(255, 255, 255, 0.9);
            width: 100%;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            height: 70px;
            margin-right: 20px;
        }
        
        .title {
            text-align: center;
        }
        
        .title h1 {
            color: var(--biru);
            margin: 0;
            font-size: 1.8rem;
        }
        
        .title p {
            color: #666;
            margin: 5px 0 0;
            font-size: 1rem;
        }
        
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 30px 20px;
            width: 100%;
        }
        
        .container {
            width: 100%;
            max-width: 700px;
            animation: fadeIn 0.5s ease-out;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-top: 5px solid var(--biru);
            transition: transform 0.3s;
        }
        
        .form-container:hover {
            transform: translateY(-5px);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--biru);
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: var(--kuning);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.2);
        }
        
        textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        button {
            background-color: var(--hijau);
            color: var(--putih);
            padding: 16px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .error {
            color: #d9534f;
            padding: 15px;
            background-color: #f9e8e8;
            border: 1px solid #f1c1c1;
            border-radius: 8px;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .success {
            color: var(--hijau);
            padding: 15px;
            background-color: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
        }
        
        .data-display {
            margin-top: 20px;
            padding: 25px;
            background-color: var(--biru-muda);
            border-radius: 8px;
            border-left: 5px solid var(--biru);
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-right: 0;
                margin-bottom: 15px;
                height: 60px;
            }
            
            .form-container {
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
            }
            
            .logo {
                height: 50px;
            }
            
            input[type="text"],
            input[type="email"],
            textarea {
                padding: 12px 15px;
            }
            
            button {
                padding: 14px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="header-content">
        <img src="https://th.bing.com/th/id/R.60041ad6e7a2e4cb3d33a52bd2207071?rik=gTZbFJ2oVW4hUw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-x_6CVezRGy0%2fVeVZwYWEZzI%2fAAAAAAAALVo%2fDIMWFyP8OPI%2fs1600%2fbontang-logo-Kota.png&ehk=IZyv%2bAnTkFgjrs3SajbY4HM9BSeXkstHmI02uPTfrRs%3d&risl=&pid=ImgRaw&r=0" 
             alt="Lambang Kota Bontang - bergambar perisai dengan warna kuning dan hitam, di bagian atas terdapat padi dan kapas" 
             class="logo">
        <div class="title">
            <h1>Buku Tamu Digital</h1>
            <p>Gedung Pemerintahan Kota Bontang</p>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="pesan">Pesan/Komentar:</label>
                    <textarea id="pesan" name="pesan" rows="6" required><?php echo $pesan; ?></textarea>
                </div>
                
                <button type="submit">Kirim Pesan</button>
            </form>
            
            <?php
            if (!empty($error)) {
                echo "<div class='error'>$error</div>";
            } elseif (isset($successMessage)) {
                echo "<div class='success'>$successMessage</div>";
                echo "<div class='data-display'>";
                echo "<h3 style='color:var(--biru); margin-top:0;'>Data Tamu:</h3>";
                echo "<div style='margin-bottom:15px;'><strong>Nama:</strong><br>$nama</div>";
                echo "<div style='margin-bottom:15px;'><strong>Email:</strong><br>$email</div>";
                echo "<div><strong>Pesan/Komentar:</strong><br>".nl2br($pesan)."</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<div class="footer">
    &copy; <?php echo date("Y"); ?> Pemerintahan Kota Bontang. Semua hak dilindungi.
</div>

</body>
</html>
