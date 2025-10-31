<!-- Belajar PHP
<h1>Saya belajar PHP</h1> -->
<?php
    $nama ="Nafilah Aulia Salma";
    $kelas = "10";
    $usia = "15";
    $hobi = "Mendengarkan musik";
    $alamat = "Siwalanpanji";
    $cita_cita = "orang sukses";
    $enter = "<br>";

    // echo $nama;
    // echo $enter;

    // echo $kelas;
    // echo $enter;

    // echo $usia;
    // echo $enter;

    // echo $hobi;
    // echo $enter;

    // echo $alamat;
    // echo $enter;

    // echo $cita_cita;
    // echo $enter;




    // echo "<h1>Saya belajar PHP</h1>";
    // echo "Saya kelas:";
    // echo 12; nama kelas hobi alamat
    // echo "Nama : ";
    // echo "Nafilah Aulia Salma";
    // echo "<br>";
    // echo "Kelas : ";
    // echo "10";
    // echo "<br>";
    // echo "Usia : ";
    // echo "15";
    // echo "<br>";
    // echo "Hobi : ";
    // echo "Mendengarkan musik";
    // echo "<br>";
    // echo "Alamat : ";
    // echo "Siwalanpanji";
    // echo "<br>";
    // echo "Cita - cita : ";
    // echo "Jadi orang sukses";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Fila</title>
    </head>
    <body>
        <div>
            <h1>Identitas</h1>
            <table>
                <tbody>
                    <tr>
                        <td>
                            Nama :
                        </td>
                        <td>
                            <?= $nama;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kelas :
                        </td>
                        <td>
                            <?= $kelas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Usia :
                        </td>
                        <td>
                            <?= $usia; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hobi :
                        </td>
                        <td>
                            <?= $hobi; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Alamat :
                        </td>
                        <td>
                            <?= $alamat; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cita - Cita : 
                        </td>
                        <td>
                            <?= $cita_cita; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    </html>
