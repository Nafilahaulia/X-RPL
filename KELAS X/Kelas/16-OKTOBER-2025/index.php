<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webside Sekolah</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e6f2ff;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #cce6ff;
            padding: 20px;
            display: flex;
            align-items: center;
            border-bottom: 3px solid #3399ff;
        }
        header img {
            height: 60px;
            margin-right: 15px;
        }
        header h1 {
            color: #004080;
            font-size: 28px;
            margin: 0;
        }
        nav {
            background-color: #b3d9ff;
            padding: 10px 0;
        }
        nav ol {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15;
            background-color: #b3daff;
            margin: 0;
        }
        nav ol li a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
        nav ol li a:hover {
            color: #003366;
            text-decoration: underline;
        }
        section {
            padding: 40px 0;
        }
        footer {
            background-color: #b3daff;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .centered-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
        }
    </style>
</head>
<body>
    <header class="container">
        <img src="images/logo smkn 2 buduran.png" alt="logo sekolah">
        <h1>SMK Negeri 2 Buduran Sidoarjo</h1>
    </header>
    <div>
        <nav>
            <ol>
                <li><a href="?menu=profil">Profil</a></li>
                <li><a href="?menu=sejarah">sejarah</a></li>
                <li><a href="?menu=jurusan">Jurusan</a></li>
                <li><a href="?menu=prestasi">Prestasi</a></li>
                <li><a href="?menu=kegiatan">kegiatan</a></li>
                <li><a href="?menu=kontak">kontak</a></li>
            </ol>
        </nav>
        <section>
           
            <?php
                if (isset($_GET['menu'])){
                    $isi = $_GET['menu'];

                    if ($isi == "profil"){
                        require_once "pages/profil.php";
                    }
                    if ($isi == "sejarah"){
                        require_once "pages/sejarah.php";
                    }
                    if ($isi == "jurusan"){
                        require_once "pages/jurusan.php";
                    }
                    if ($isi == "prestasi"){
                        require_once "pages/prestasi.php";
                    }
                    if ($isi == "kegiatan"){
                        require_once "pages/kegiatan.php";
                    }
                    if ($isi == "kontak"){
                        require_once "pages/kontak.php";
                    }

                }else{
                    require_once "pages/profil.php";
                }

                // if (isset($_POST['tombol'])){
                //     $nama = $_POST['nama'];
                //     $pesan = $_POST['pesan'];
                //     $email = $_POST['email'];

                //     echo $nama;
                //     echo "<br>";
                //     echo $email;
                //     echo "<br>";
                //     echo $pesan;
                    
                // }
            ?>
        </section>
        <footer>
            <p>&copy; 2025 | WEB ini dibuat oleh <strong>Nafilah</strong></p>
        </footer>
    </div>
</body>
</html>