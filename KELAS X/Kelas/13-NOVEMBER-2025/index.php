<form action="" method="POST">
    <input type="number" name="nis" id="nis" required placeholder="Masukkan NIS">
    <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama">
    <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
    <input type="text" name="telepon" id="telepon" placeholder="Masukkan Telepon">
    <input type="submit" name="simpan" value="simpan" >
</form>

<?php
    $host = 'localhost';
    $user = 'root';
    $password = '123456';
    $db = 'dbsekolah';
    
    $koneksi = mysqli_connect($host, $user, $password, $db);


    if (isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        // echo $nis, "-", $nama, "-", $alamat, "-", $telepon;

        $sql = "INSERT INTO tblsiswa (nis, nama, alamat, telepon) VALUES ($nis, '$nama', '$alamat', '$telepon')";
        echo $sql;
        $query = mysqli_query($koneksi, $sql);

    }

    $sql = "SELECT * FROM tblsiswa";
    $query = mysqli_query($koneksi, $sql);

    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
    <?php
    while ($siswa = mysqli_fetch_array($query)){
    ?>
                <tr>
                    <td><?= $siswa['nis']; ?></td>
                    <td><?= $siswa['nama']; ?></td>
                    <td><?= $siswa['alamat']; ?></td>
                    <td><?= $siswa['telepon']; ?></td>
                </tr>

                <?php } ?>

            </tbody>
        </table>