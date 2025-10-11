<?php
    $menu = ['profil','alamat','kontak','kegiatan','jadwal'];

    $berita = "Suasana Auditorium Hasan Al-Bashri MTsN 1 Sidoarjo pada Selasa (6/5/2025) tampak semarak dan penuh antusiasme.  
               Ratusan siswa dan guru berkumpul menyaksikan Pameran Hasil Karya Ujian Praktik Informatika yang digelar sebagai bagian dari evaluasi pembelajaran akhir semester genap. 
               Kegiatan ini merupakan inisiasi madrasah yang digawangi oleh Guru TIK, Erlin Yuli Anggraini, S.T. Acara ini sukses menyita perhatian dengan beragam karya inovatif berbasis teknologi.";

    $img = ['foto/dokumentasi.jpg','foto/logomtsn1sda.png'];

    $isiprofil = "Madrasah Tsanawiyah Negeri 1 Sidoarjo, semula bernama PGA 4 Tahun yang didirikan pada tahun 1968 dan belum memiliki tempat / gedung sendiri dan masih menumpang di SD Negeri 4 di Jl. A. Yani / alun – alun Sidoarjo.
                  Kemudian pada tahun 1970 pindah menempati Gedung SD Baperki di Jl. Gajah Mada No. 197 Sidoarjo, dengan Surat Izin Penempatan dari Kodim 0816 Sidoarjo hingga tahun 2001.
                  Pada tanggal 16 Maret 1978 berdasarkan Keputusan Menteri Agama Nomor 16 Tahun 1978  PGA 4 Tahun Sidoarjo  berubah nama menjadi MTs. Negeri Sidoarjo.
                  Selanjutnya pada tahun pelajaran 2002 – 2003 MTs. Negeri Sidoarjo pindah tempat lagi dari Jl. Gajah Mada No. 197 Sidoarjo ke Jl. Stadion No. 150 Kemiri Sidoarjo, 
                  dengan asset 12 rombel , 1 ruang lab.IPA , 1 ruang musholla kecil, 1 ruang Perpustakaan serta luas lahan 5.629 m2";

    $isialamat = "Jl. Stadion No.150, Kemiri, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61234";

    $kontak = "Whatsapp: 081332946056 | Telp: (031) 8953735 | Email: mtsnsidoarjo@gmail.com";

    $kegiatan = "Kegiatan meliputi: Upacara peringatan, Ekstrakurikuler, dll.";
    $jadwal = "Senin - Rabu: 06.30 - 16.15 WIB | Kamis: 06.30 - 14.20 | Jumat: 06.30 - 11.40";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTsN 1 Sidoarjo</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        /*Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #67919eff;
            color: #333;
            line-height: 1.6;
        }

        #header {
            background-color: #005f73;
            color: white;
            padding: 20px;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 25px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .logo {
            height: 130px;  /* Lebih besar */
            width: auto;
            flex-shrink: 0;
        }

        .header-container h1 {
            font-size: 32px;
            font-weight: bold;
        }



        #nav {
            background-color: #0a9396;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
           color: white;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            background-color: transparent;
        }

        nav a:hover {
            background-color: #007f86;
            color: #ffd166;
        }

        .container {
            padding: 40px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .section {
            background-color: white;
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s ease;
        }

        .section:hover {
            transform: scale(1.01);
        }

        .section h2 {
            color: #005f73;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .section img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 15px;
        }

        footer {
            background-color: #005f73;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .logo {
                height: 100px;
            }

            .header-container h1 {
                font-size: 22px;
            }
        }

    </style>
</head>

<body>

    <header id="header">
        <div class="header-container">
            <img src="<?= $img[1]; ?>" alt="Logo MTsN 1 Sidoarjo" class="logo">
             <h1>Madrasah Tsanawiyah Negeri 1 Sidoarjo</h1>
        </div>
    </header>

    <nav>
        <a href="#profil"><?= $menu[0]; ?></a>
        <a href="#alamat"><?= $menu[1]; ?></a>
        <a href="#kontak"><?= $menu[2]; ?></a>
        <a href="#kegiatan"><?= $menu[3]; ?></a>
        <a href="#jadwal"><?= $menu[4]; ?></a>
    </nav>

    <div class="container">
        <div class="section" id="profil">
            <h2><?= $menu[0]; ?></h2>
            <p><?= $isiprofil; ?></p>
        </div>

        <div class="section" id="alamat">
            <h2><?= $menu[1]; ?></h2>
            <p><?= $isialamat; ?></p>
        </div>

        <div class="section" id="kontak">
            <h2><?= $menu[2]; ?></h2>
            <p><?= $kontak; ?></p>
        </div>

        <div class="section" id="kegiatan">
            <h2><?= $menu[3]; ?></h2>
            <p><?= $kegiatan; ?></p>
        </div>

        <div class="section" id="jadwal">
            <h2><?= $menu[4]; ?></h2>
            <p><?= $jadwal; ?></p>
        </div>

        <div class="section" id="berita">
            <h2> Berita </h2>
            <p><?= $berita; ?></p>
            <img src="<?= $img[0]; ?>" alt="Kegiatan Sekolah">
        </div> 
    </div>

    <footer>
        &copy; <?= date("Y"); ?> MTsN 1 Sidoarjo. All rights reserved.
    </footer>

</body>
</html>