<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengguna - Studi Kasus 2</title>
    <!-- Menghubungkan ke file CSS terpisah -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="container">
    <h2>Form Input Data Pengguna</h2>

    <!-- Form HTML dengan Method POST -->
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="contoh@email.com">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" required placeholder="Masukkan alamat lengkap"></textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required placeholder="08xxxxxxxxxx">
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

    <!-- Memproses & Menampilkan Data Menggunakan PHP -->
    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = nl2br(htmlspecialchars($_POST['alamat']));
        $telepon = htmlspecialchars($_POST['telepon']);
        ?>

        <div class="result-box">
            <h3>Hasil Input Data:</h3>
            <div class="result-item"><strong>Nama:</strong> <?php echo $nama; ?></div>
            <div class="result-item"><strong>Email:</strong> <?php echo $email; ?></div>
            <div class="result-item"><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></div>
            <div class="result-item"><strong>Alamat:</strong> <?php echo $alamat; ?></div>
            <div class="result-item"><strong>Nomor Telepon:</strong> <?php echo $telepon; ?></div>
        </div>

        <?php
    }
    ?>
</div>

</body>
</html>