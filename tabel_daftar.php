<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - Restoran Jinan</title>
    <!-- Menghubungkan file CSS terpisah -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>✨ Restoran Jinan ✨</h1>
        <p>10 Kuliner Populer — Ekonomis & Lezat</p>
    </div>

    <?php
    // Array multidimensi berisi daftar menu Bali
    $menu_restoran = [
        [
            "no" => 1,
            "nama" => "Ayam Betutu (Porsi Personal)",
            "kategori" => "Unggas & Rempah",
            "harga" => 25000
        ],
        [
            "no" => 2,
            "nama" => "Nasi Campur Bali",
            "kategori" => "Nasi Khas",
            "harga" => 18000
        ],
        [
            "no" => 3,
            "nama" => "Sate Lilit Ayam (5 Tusuk)",
            "kategori" => "Sate",
            "harga" => 15000
        ],
        [
            "no" => 4,
            "nama" => "Nasi Jinggo Special",
            "kategori" => "Nasi Bungkus",
            "harga" => 8000
        ],
        [
            "no" => 5,
            "nama" => "Rujak Kuah Pindang",
            "kategori" => "Camilan & Segar",
            "harga" => 10000
        ],
        [
            "no" => 6,
            "nama" => "Tipat Cantok (Gado-Gado Bali)",
            "kategori" => "Olahan Ketupat",
            "harga" => 12000
        ],
        [
            "no" => 7,
            "nama" => "Sate Plecing",
            "kategori" => "Sate Pedas",
            "harga" => 18000
        ],
        [
            "no" => 8,
            "nama" => "Lawar Ayam Khas Bali",
            "kategori" => "Lauk Pelengkap",
            "harga" => 12000
        ],
        [
            "no" => 9,
            "nama" => "Laklak Bali (4 pcs)",
            "kategori" => "Kue / Dessert",
            "harga" => 10000
        ],
        [
            "no" => 10,
            "nama" => "Es Daluman Segar",
            "kategori" => "Minuman Khas",
            "harga" => 8000
        ]
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Nama Makanan</th>
                <th>Kategori</th>
                <th class="right">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu_restoran as $item): ?>
                <tr>
                    <td class="center"><strong><?= $item['no']; ?></strong></td>
                    <td>
                        <?= $item['nama']; ?>
                        <?php if ($item['no'] <= 3): ?>
                            <span class="badge-populer">Favorit</span>
                        <?php endif; ?>
                    </td>
                    <td><?= $item['kategori']; ?></td>
                    <td class="right harga">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>♥ Selamat Menikmati Hidangan di Restoran Jinan ♥</p>
    </div>
</div>

</body>
</html>