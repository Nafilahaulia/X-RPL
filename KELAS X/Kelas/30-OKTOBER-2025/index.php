<form action="" method="post">
    Tanggal :
    <input type="number" name="tanggal" placeholder="masukkan tanggal"> <br>
    Bulan :
    <input type="number" name="bulan" placeholder="masukkan bulan"> <br>

    <input type="submit" name="kirim" value="zodiak anda ...">
</form>

<form action="" method="post">
    a:
    <input type="number" name="a" placeholder="bilangan a"><br>
    b:
    <input type="number" name="b" placeholder="bilangan b"><br>

    <input type="submit" name="hitung" value="jumlahkan">
    <input type="submit" name="hitung" value="kurangi">
    <input type="submit" name="hitung" value="kalikan">
    <input type="submit" name="hitung" value="bagikan">
</form>

<?php

    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'jumlahkan') {
            echo "Penjumlahan dari $a + $b adalah : <br>";
            echo $a + $b;
        }

        if ($hitung == 'kurangi') {
            echo "Penjumlahan dari $a - $b adalah : <br>";
            echo $a - $b;
        }

        if ($hitung == 'kalikan') {
            echo "Penjumlahan dari $a * $b adalah : <br>";
            echo $a * $b;
        }

        if ($hitung == 'bagikan') {
            echo "Penjumlahan dari $a / $b adalah : <br>";
            echo $a / $b;
        }
    }


    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
    }

    //function itu wadah
    function belajar() {
        echo "hari ini saya belajar function";
    }

    //memanggil function
    // belajar();

    

    //jika function terdiri dari 2 kata maka kata pertama huruf depannya kecil, kata kedua huruf pertamanya besar
    function cekTanggal($tanggal){
        //tanggal
        
        if ($tanggal > 0 && $tanggal < 32) {
            // echo "tanggal benar";
            return true;
        }else {
        //   echo "tanggl salah";
            return false;
        }
    }

    //memanggil function
    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(100);


    // $tanggal = 24;
    // $bulan = 5;
    function zodiak($bulan,$tanggal){
        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if ($bulan ==  1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Capricorn";
                }else {
                    echo "Zodiak anda Aquarius";
                }
            }

            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Aquarius";
                }else {
                    echo "Zodiak anda Pisces";
                }
            }

            if ($bulan == 3) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Pisces";
                }else {
                    echo "Zodiak anda Aries";
                }
            }

            if ($bulan == 4) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Aries";
                }else {
                    echo "Zodiak anda Taurus";
                }
            }

            if ($bulan == 5) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Taurus";
                }else {
                    echo "Zodiak anda Gemini";
                }
            }

            if ($bulan == 6) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Gemini";
                }else {
                    echo "Zodiak anda Cancer";
                }
            }

            if ($bulan == 7) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Cancer";
                }else {
                    echo "Zodiak anda Leo";
                }
            }

            if ($bulan == 8) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Leo";
                }else {
                    echo "Zodiak anda  Virgo";
                }
            }

            if ($bulan == 9) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Virgo";
                }else {
                    echo "Zodiak anda Libra";
                }
            }

            if ($bulan == 10) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Libra";
                }else{
                    echo "Zodiak anda Scorpio";
                }
            }

            if ($bulan == 11) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Scorpio";
                }else{
                    echo "Zodiak anda Sagitaurus";
                }
            }

            if ($bulan == 12) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Sagitaurus";
                }else{
                    echo "Zodiak anda Capricorn";
                }
            }
        }else {
            echo 'tanggal atau bulan salah';
        }
    }
    // zodiak(5,24);
    // zodiak(5,14);
    // zodiak(7,14);
    // zodiak(1,140);

    function cekBulan($bulan){
        if ($bulan > 0 && $bulan < 13) {
            return true;
        }else{
            return false;
        }
    }

    cekBulan(0);

    if (cekbulan(1) && cekTanggal(4)) {
        echo "Bulan atau Tanggal benar";
    }else {
        echo "Bulan atau Tanggal Salah";
    }


    function luasPersegiPanjang($p, $l) {
        $luas = $p * $l;
        return $luas;
    }

    $p = 55;
    $l = 33;
    $t = 150;

    echo "volume balok dengan panjang $p, lebar $l, dan tinggi $t adalah";

    echo luasPersegiPanjang($p,$l) * $t;


    function tambah($a, $b) {
        return $a + $b;
    }

    function kurang($a, $b) {
        return $a - $b;
    }

    function bagi($a, $b) {
        return $a / $b;
    }

    function kali($a, $b) {
        return $a * $b;
    }

    $a = 3;
    $b = 9;

?>